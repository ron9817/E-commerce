@extends('Home.index')
@if(isset($category_name))
@section('title', $product['title'])
@endif
@push('script')
<script>
// $(document).on("click",".product-container",function(){
//     const product_id=$(this).data('id');
//     axios.get().then
// });
$(document).ready(_=>{
    const buy="#buy_btn";
    const cart="#add_cart_btn";

    $(document).on("click",buy,()=>{
        console.log("buy");
    });

    $(document).on("click",cart,()=>{
        console.log("add to cart")        
    });

});
</script>
@endpush
@push('css')
<style>
.product_container{
    /* height:40rem; */
}
.b{
    border: 1px solid #000;
}
.product_container .lhs{
    width:40%;
}
.product_container .lhs .image{
    border: 1px solid #00000026;
}
.product_container .lhs .image .img{
    height:35rem;
    background-color: #d8d3d357;
}
.product_container .lhs .button{
}
.product_container .lhs .button .cart{
    background-color:#ff9f00;
    border-radius:0px;
    color:#fff;
    font-size:19px;
}
.product_container .lhs .button .buy{
    background-color:#fb641b;
    border-radius:0px;
    color:#fff;
    font-size:19px;
}
.product_container .lhs .button .buy:hover{
    color:#fff!important;
}
.product_container .lhs .button .cart:hover{
    color:#fff!important;
}

.product_container .rhs{
    width:60%;
}
.product_container .cost{
    font-size:30px;
    letter-spacing:.2rem;
}
.product_container .d-inline-block{
    vertical-align:top;
}
.product_container .lhs .button .w-50{
    width:13.6rem!important;
}
.breadcrumb{
    background-color:transparent!important;
    font-size:11px!important;
    padding:0!important;
}
.breadcrumb li a{
    color:#9d9696!important;
}
.breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #9d9696;
    content: ">";
}
</style>
@endpush
@section('content')
<div class="container mt-3">
    <div class="product_container">
        <div class="d-inline-block lhs">
            <div class="image p-3">
                <div class="img">
                </div>
            </div>
            <div class="button mt-2">
                <button class="btn d-inline-block w-50 py-3 mr-1 cart text-uppercase" id="add_cart_btn"><i class="fa fa-cart-plus text-white" aria-hidden="true"></i> add to cart</button><!--
                    keep this as it is for proper rendering
                --><button class="btn d-inline-block w-50 py-3 ml-1 buy text-uppercase" id="buy_btn"><i class="fa fa-bolt text-white" aria-hidden="true"></i> buy now</button>
            </div>
        </div><!--
            keep this as it is for proper rendering
        --><div class="d-inline-block p-3 rhs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/category/{{$product['category']}}">{{$product['category']}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{Str::limit($product['title'],7)}}</li>
                </ol>
            </nav>
            <div class="title">{{$product['title']}}</div>
            <div class="cost my-1 font-weight-bold">₹{{$product['price']}}</div>
        </div>
    </div>
</div>
@endsection