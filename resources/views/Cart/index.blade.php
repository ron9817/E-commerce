@extends('Home.layouts.bootstrap_layout')
@section('title', 'Cart')
@push('css')
<style>
</style>
@endpush
@push('script')
<script>
</script>
@endpush
@section('body')
    <div class="row">
        <div class="col">
            @include('Home.partials.top_nav')
        </div>
    </div>

    <div class="row">
        <div class="col">
        @include('Home.partials.category_nav')
        </div>
    </div>

    <div class="row">
        <div class="col">
        @include('Cart.cart')
        </div>
    </div>
    
@endsection

    