<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //
    public function index(){
        $tmp = "_thumbnail_id";
        $articles = DB::table('wp_term_relationships')
            ->join('wp_term_taxonomy', function ($join){
                $join->on('wp_term_taxonomy.term_taxonomy_id', '=', 'wp_term_relationships.term_taxonomy_id')
                ->where('taxonomy', 'post_tag');
            })->join('wp_posts', 'wp_posts.ID', '=', 'wp_term_relationships.object_id')
            ->join('wp_postmeta', function ($join) use ($tmp){
                $join->on('wp_posts.ID', '=', 'wp_postmeta.post_id')
                    ->where('meta_key','=', "$tmp");
            })->get();

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
                ->first()->slug;
            array_push($list, $link);
        }

        $category_lists = DB::table('wp_term_taxonomy')->where('taxonomy', '=', 'category')
        ->join('wp_terms', 'wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')->orderBy('wp_terms.term_id', 'desc')->get();

        $picture = [];
        foreach($articles as $article){
            $picture_id = $article->meta_value;
            $picture_link = DB::table('wp_posts')
                ->where("id", $picture_id)
                ->first()->guid;
            array_push($picture, $picture_link);
        }

        $icon = ["fas fa-coins", "fas fa-cogs", "fab fa-bitcoin", "fas fa-code", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs"];
        // dd($category_lists);
        return view('articles.page', compact('articles', 'list', 'category_lists', 'picture', 'icon'));
    }
    //
    public function list($category){
        $tmp = "_thumbnail_id";
        $articles = DB::table('wp_term_relationships')
            ->join('wp_term_taxonomy', 'wp_term_taxonomy.term_taxonomy_id', '=', 'wp_term_relationships.term_taxonomy_id')
            ->join('wp_terms', function ($join) use ($category){
                $join->on('wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')
                ->where('taxonomy','category')
                ->where('slug', '=', "$category");
            })->join('wp_posts', 'wp_posts.ID', '=', 'wp_term_relationships.object_id')
            ->join('wp_postmeta', function ($join) use ($tmp){
                $join->on('wp_posts.ID', '=', 'wp_postmeta.post_id')
                    ->where('meta_key','=', "$tmp");
            })->get();

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
                ->first()->slug;
            array_push($list, $link);
        }
        
        $picture = [];
        foreach($articles as $article){
            $picture_id = $article->meta_value;
            $picture_link = DB::table('wp_posts')
                ->where("id", $picture_id)
                ->first()->guid;
            array_push($picture, $picture_link);
        }

        $category_lists = DB::table('wp_term_taxonomy')->where('taxonomy', '=', 'category')
        ->join('wp_terms', 'wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')->orderBy('wp_terms.term_id', 'desc')->get();
        

        $icon = ["fas fa-coins", "fas fa-cogs", "fab fa-bitcoin", "fas fa-code", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs"];
        // dd($articles);
        return view('articles.page', compact('articles', 'list', 'category_lists', "picture", "icon"));
    }
    //
    public function show($category,$article){
        $articles = DB::table('wp_term_relationships')
            ->join('wp_term_taxonomy', 'wp_term_taxonomy.term_taxonomy_id', '=', 'wp_term_relationships.term_taxonomy_id')
            ->join('wp_terms', function ($join)use ($article){
                $join->on('wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')
                ->where('taxonomy','post_tag')
                ->where('slug', "=", "$article");
            })->join('wp_posts', 'wp_posts.ID', '=', 'wp_term_relationships.object_id')->first();
        // dd($articles);

        $category_lists = DB::table('wp_term_taxonomy')->where('taxonomy', '=', 'category')
        ->join('wp_terms', 'wp_terms.term_id', '=', 'wp_term_taxonomy.term_id')->orderBy('wp_terms.term_id', 'desc')->get();


        $icon = ["fas fa-coins", "fas fa-cogs", "fab fa-bitcoin", "fas fa-code", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs", "fas fa-cogs"];

        return view('articles.article', compact('articles', 'category_lists', 'icon'));
    }
}
