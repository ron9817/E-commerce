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
.product_container .d-inline-block{
    vertical-align:top;
}
.product_container .lhs .button .w-50{
    width:13.6rem!important;
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
                <button class="btn d-inline-block w-50 py-3 mr-1 cart text-uppercase"><i class="fa fa-cart-plus text-white" aria-hidden="true"></i> add to cart</button><!--
                    keep this as it is for proper rendering
                --><button class="btn d-inline-block w-50 py-3 ml-1 buy text-uppercase"><i class="fa fa-bolt text-white" aria-hidden="true"></i> buy now</button>
            </div>
        </div><!--
            keep this as it is for proper rendering
        --><div class="d-inline-block p-3 rhs">
            <div class="title">{{$product['title']}}</div>
            <div class="category my-1"><span class="font-weight-bold">Category:</span> <span>{{$product['category']}}</span></div>
            <div class="cost my-1"><span class="font-weight-bold">Cost:</span> <span>₹{{$product['price']}}/-</span></div>
            <div class="quantity my-1"><span class="font-weight-bold">Quantity:</span> <span>{{$product['stock']}}</span></div>
            <div class="quantity my-1"><span class="font-weight-bold">Reviews:</span> <span>{{$product['stock']}}</span></div>
        </div>
    </div>
</div>
@endsection

    


    <!-- <div>
    <div class="d-inline-block product-container-lhs">
            
        </div>
        <div class="d-inline-block product-container-rhs">
            
        </div>
    </div> -->