@extends('Home.layouts.bootstrap_layout')
@section('title', 'Home')
@push('script')

@endpush
@section('body')
    <div class="row m-0">
        <div class="col p-0">
            @include('Home.partials.top_nav')
        </div>
    </div>

    <div class="row m-0">
        <div class="col p-0">
            @include('Home.partials.category_nav')
        </div>
    </div>
@endsection

    