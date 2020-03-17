@extends('Home.layouts.bootstrap_layout')
@section('title', 'Seller')
@push('css')
<style>
    .pointer{
        cursor:pointer;
    }
    .nav .nav-item{
        border: none!important;
        outline:none!important;
        font-size:20px;
        font-weight:500;
    }
    .nav .nav-item.nav-link.active{
        border-bottom:2px solid #dcb444!important;
        font-weight:700;
    }
    .nav-tabs{
        border-bottom:none!important;
    }
</style>
@endpush
@section('body')
    <div class="row">
        <div class="col">
            @include('Home.partials.top_nav')
        </div>
    </div>

    <div class="rwo">
        <div class="col mt-5">
            <div class="nav nav-tabs nav-fill pointer" id="seller" role="tablist">

                <a class="nav-item nav-link active mx-3" data-toggle="tab" role="tab" aria-selected="true" id="product" data-target="#product_data">Products</a>

                <a class="nav-item nav-link mx-3" data-toggle="tab" role="tab" aria-selected="true" id="order" data-target="#order_data">Orders</a>

            </div>
            <div class="tab-content my-3">
                <div class="tab-pane container active mx-0" id="product_data">
                    @include('Seller.partials.products')
                </div>
                <div class="tab-pane container" id="order_data">
                    Order
                </div>
            </div>
        </div>
    </div>
@endsection

    