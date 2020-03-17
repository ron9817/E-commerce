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
    }
    .nav .nav-item.nav-link{
        border: none!important;
        outline:none!important;
        border-bottom:10px solid #dfgd;
    }
    .nav .nav-item.nav-link.active{
        border: none!important;
        outline:none!important;
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

                <a class="nav-item nav-link active" data-toggle="tab" role="tab" aria-selected="true" id="product" data-target="#product_data">Products</a>

                <a class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="true" id="order" data-target="#order_data">Orders</a>

            </div>
            <div class="tab-content">
                <div class="tab-pane container active" id="product_data">
                    Products
                </div>
                <div class="tab-pane container" id="order_data">
                    Order
                </div>
            </div>
        </div>
    </div>
@endsection

    