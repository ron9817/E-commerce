@extends('Home.layouts.bootstrap_layout')
@section('title', 'Home')
@section('body')
    <div class="row">
        <div class="col">
            @include('Home.partials.top_nav')
        </div>
    </div>

    <div class="row">
        <div class="col">
            @include('Home.partials.category_nav')
        </div>
    </div>

    <div class="rwo">
        <div class="col"></div>
    </div>
@endsection

    