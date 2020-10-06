@extends('layouts.layout')

@section('style_css')
    <link rel="stylesheet" href="assets/css/style.css">
@endsection
@section('title','Home')

@section('content')
    <section>
        <div class="container">
            <div class="row m-2 mr-auto py-5 heading">
                <div class="col-12">
                    <div class="display-3">
                        <p>Welcome To Our Shopping World</p>
                    </div>
                    <div class="display-6">
                        Flat 40% OFF on all premium brands.
                    </div>
                    <div class="button">
                        <hr class="w-25 my-3 mx-auto">
                        <a name="" id="" class="btn btn-secondary button_link" href="product.html" role="button">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection