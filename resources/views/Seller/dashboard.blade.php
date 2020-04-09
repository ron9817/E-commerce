@extends('Home.layouts.bootstrap_layout')
@section('title', 'Seller Dashboard')
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
    .table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
            background:#5b8ee0!important;
            color:#fff;
    }
    .badge i{
        font-size:15px!important;
    }
    .badge{
        cursor:pointer;
    }
    .w-17p{
        width:17%;
    }
    .p-border{
        border: all;
        border-color:  #495057!important;
    }
</style>
@endpush
@push('script')
<script>
    const button='#add_product-form-button';
    const form="#add_product-form";
    const image_input="#image";
    const url="/seller/add-product";
    $(document).ready(()=>{
        $(document).on("change",image_input, change_label_to_image_name);
        $(document).on("click",button,_=>{
            const data=new FormData($(form)[0]);
            axios.post(url,data).then(data=>{
                if (data.data==1){
                    location.reload();
                }else{
                    alert("Error");
                }
            }).catch(error=>alert("error"));
        });

    });
    let change_label_to_image_name=function(){
        const fileName=$(this).val().split('\\')[2];
        $(this).parent("div").children("label").html(fileName);
    }
</script>
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
                <div class="tab-pane container active" id="product_data">
                    @include('Seller.partials.products')
                </div>
                <div class="tab-pane container" id="order_data">
                    @include('Seller.partials.orders')
                </div>
            </div>
        </div>
    </div>
@endsection

    