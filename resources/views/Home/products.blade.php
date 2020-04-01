@extends('Home.layouts.bootstrap_layout')
@section('title', $category_name )
@push('script')

@endpush
@push('css')
<style>
.product-container{
    width:21.9rem;
    /* background-color: #000; */
    border: 1px solid #00000026;
}
.product-container:hover{
    box-shadow: 0 3px 16px 0 rgba(0,0,0,.11);
}
</style>
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

    <div class="row m-0">
        <div class="col p-0">
            @foreach($products as $p_key=>$product)
            <div class="d-inline-block product-container p-2 m-2">
            {{$product->title}}
            </div>
            @endforeach
        </div>
    </div>


@endsection

    