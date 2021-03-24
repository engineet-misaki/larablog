<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //
    public function index(){
        $articles = DB::table('wp_term_relationships')
            ->join('wp_term_taxonomy', function ($join){
                $join->on('wp_term_taxonomy.term_taxonomy_id', '=', 'wp_term_relationships.term_taxonomy_id')
                ->where('taxonomy', 'post_tag');
            })->join('wp_posts', 'wp_posts.ID', '=', 'wp_term_relationships.object_id')->get();

        $list = [];
        foreach($articles as $article){
            $id = $article->object_id;
            $link = DB::table('wp_term_relationships')
                ->join('wp_term_taxonomy', function ($join){
                    $join->on('wp_term_relationships.term_taxonomy_id', '=', 'wp_term_taxonomy.term_taxonomy_id')
                    ->where('taxonomy','post_tag');
                })->join('wp_posts', function ($join) use($id){
                    $join->on('wp_posts.ID', '=', 'wp_term_relationships.object_id')
                    ->where('object_id', "$id");
                })->join('wp_terms', 'wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')
                ->first()->name;
            array_push($list, $link);
        }

        $category_lists = DB::table('wp_term_taxonomy')->where('taxonomy', '=', 'category')
        ->join('wp_terms', 'wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')->orderBy('wp_terms.term_id', 'desc')->get();
        // dd($category_lists);
        return view('articles.page', compact('articles', 'list', 'category_lists'));
    }
    //
    public function list($category){
        $articles = DB::table('wp_term_relationships')
            ->join('wp_term_taxonomy', 'wp_term_taxonomy.term_taxonomy_id', '=', 'wp_term_relationships.term_taxonomy_id')
            ->join('wp_terms', function ($join) use ($category){
                $join->on('wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')
                ->where('taxonomy','category')
                ->where('slug', '=', "$category");
            })->join('wp_posts', 'wp_posts.ID', '=', 'wp_term_relationships.object_id')->get();

        $list = [];
        foreach($articles as $article){
            $id = $article->object_id;
            $link = DB::table('wp_term_relationships')
                ->join('wp_term_taxonomy', function ($join){
                    $join->on('wp_term_relationships.term_taxonomy_id', '=', 'wp_term_taxonomy.term_taxonomy_id')
                    ->where('taxonomy','post_tag');
                })->join('wp_posts', function ($join) use($id){
                    $join->on('wp_posts.ID', '=', 'wp_term_relationships.object_id')
                    ->where('object_id', "$id");
                })->join('wp_terms', 'wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')
                ->first()->name;
            array_push($list, $link);
        }


        $category_lists = DB::table('wp_term_taxonomy')->where('taxonomy', '=', 'category')
        ->join('wp_terms', 'wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')->orderBy('wp_terms.term_id', 'desc')->get();
        // dd($articles);
        return view('articles.page', compact('articles', 'list', 'category_lists'));
    }
    //
    public function show($category,$article){
        $articles = DB::table('wp_term_relationships')
            ->join('wp_term_taxonomy', 'wp_term_taxonomy.term_taxonomy_id', '=', 'wp_term_relationships.term_taxonomy_id')
            ->join('wp_terms', function ($join)use ($article){
                $join->on('wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')
                ->where('taxonomy','post_tag')
                ->where('slug', "=", "%$article%");
            })->join('wp_posts', 'wp_posts.ID', '=', 'wp_term_relationships.object_id')->first();
        // dd($articles);

        $category_lists = DB::table('wp_term_taxonomy')->where('taxonomy', '=', 'category')
        ->join('wp_terms', 'wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')->orderBy('wp_terms.term_id', 'desc')->get();

        return view('articles.article', compact('articles', 'category_lists'));
    }
}
