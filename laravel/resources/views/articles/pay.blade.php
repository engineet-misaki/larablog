@extends('layout.common')
 
@section('title', 'インデックスページ')
 
@section('content')
<div class="text-align-cneter m-5 p-5">
    <form action="{{ secure_asset('pay') }}" method="POST">
    @csrf
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ config('tmp.PUBLISH_PASS') }}"
        data-amount="100"
        data-name="Stripe決済デモ"
        data-label="決済をする"
        data-description="これはデモ決済です"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-currency="JPY">
    </script>
    </form>
</div>
<form action="{{ secure_asset('pay') }}" method="POST">

@endsection
 
@include('layout.footer')