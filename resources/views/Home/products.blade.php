@extends('Home.index')
@if(isset($category_name))
@section('title', $category_name )
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
.product-container{
    width:19.75rem;
    /* background-color: #000; */
    border: 1px solid #00000026;
}
.product-container .image{
    background-color: #d8d3d357;
    width:100%;
    height:20rem;
    background-blend-mode: normal;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
}
.product-container:hover{
    box-shadow: 0 3px 16px 0 rgba(0,0,0,.11);
    border:none;
}
.product-container:hover .title{
    color:#2874f0;
}
</style>
@endpush

@section('content')
    @foreach($products as $p_key=>$product)
    <a href="{{env('APP_URL')}}/product/{{$product->id}}">
        <div class="d-inline-block product-container p-3 m-4 pointer" data-id="{{$product->id}}">
            <div class="image" style="background-image:url({{asset($product->image)}})">
                {{--<img src="{{asset($product->image)}}">--}}
            </div>
            <div class="title">{{$product->title}}</div>
            <div class="category my-1"><span class="font-weight-bold">Category:</span> <span>{{$product->category->display_name}}</span></div>
            <div class="cost my-1"><span class="font-weight-bold">Cost:</span> <span>₹{{$product->price}}/-</span></div>
            <div class="quantity my-1"><span class="font-weight-bold">Quantity:</span> <span>{{$product->stock}}</span></div>
        </div>
    </a>
    @endforeach
@endsection

    