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
</script>
@endpush
@push('css')
<style>
.container{
    height:40rem!important;
}
.product-container-lhs{
    /* background-color: #000; */
    width:38%;
    height:100%;
    border: 1px solid #00000026;
}
.product-container-rhs{
    /* background-color: #000; */
    width: 58%;
    height:100%;
    border: 1px solid #00000026;
}
.product-container-lhs .image{
    background-color: #d8d3d357;
}
.product-container-lhs .cart{
    background-color:#ff9f00;
    border-radius:0px;
    color:#fff;
}
.product-container-lhs .buy{
    background-color:#fb641b;
    border-radius:0px;
    color:#fff;
}
</style>
@endpush

@section('content')
<!-- <div class="container my-2"> -->
<div>
<div class="d-inline-block product-container-lhs">
    <div>
     fmasfbasmnfbasmnfbsnfbasnfbmansbfnamsbfasbfmnasbfmnasbfmnasbfmnsa
    </div>  
    <div>mfnasfnaslkfjsalkfjaslkj</div>
</div>
<div class="d-inline-block product-container-rhs">
    <div>
    <div>l;l</div>
    </div>
</div>
</div>
    <!-- <div class="d-inline-block product-container" data-id="{{$product['id']}}">
        <div class="image"></div>
        <div class="mt-3 d-flex justify-content-between">
            <button class="btn w-100 mr-2 p-3 cart text-uppercase"><i class="fa fa-cart-plus text-white" aria-hidden="true"></i> add to cart</button>
            <button class="btn w-100 p-3 buy text-uppercase"><i class="fa fa-bolt text-white" aria-hidden="true"></i> buy now</button>
        </div>
    </div>
    <div class="d-inline-block product-container" data-id="{{$product['id']}}">
        <div class="title">{{$product['title']}}</div>
        <div class="category my-1"><span class="font-weight-bold">Category:</span> <span>{{$product['category']}}</span></div>
        <div class="cost my-1"><span class="font-weight-bold">Cost:</span> <span>₹{{$product['price']}}/-</span></div>
        <div class="quantity my-1"><span class="font-weight-bold">Quantity:</span> <span>{{$product['stock']}}</span></div>
    </div> -->
<!-- </div> -->
@endsection

    