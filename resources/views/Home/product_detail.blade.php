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
.product-container-lhs{
    width:25rem;
    /* background-color: #000; */
    border: 1px solid #00000026;
}
.product-container-lhs .image{
    background-color: #d8d3d357;
    width:100%;
    height:30rem;
}
</style>
@endpush

@section('content')
<div class="container">
    <div class="d-inline-block product-container-lhs m-1 p-2" data-id="{{$product['id']}}">
        <div class="image"></div>
        <div class="my-2">
            <button class="btn btn-primary">Add to cart</button>
            <button class="btn btn-primary">Add to cart</button>
        </div>
    </div>
    <div class="d-inline-block p-3 m-4" data-id="{{$product['id']}}">
        <div class="title">{{$product['title']}}</div>
        <div class="category my-1"><span class="font-weight-bold">Category:</span> <span>{{$product['category']}}</span></div>
        <div class="cost my-1"><span class="font-weight-bold">Cost:</span> <span>₹{{$product['price']}}/-</span></div>
        <div class="quantity my-1"><span class="font-weight-bold">Quantity:</span> <span>{{$product['stock']}}</span></div>
    </div>
</div>
@endsection

    