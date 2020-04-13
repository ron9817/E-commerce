@extends('Home.layouts.bootstrap_layout')
@section('title', 'Home')
@push('script')
<script>
window.swal.fire("Hello");
</script>
@endpush
@push('css')
<style>
    .footer{
        background-color:#172337;
        border:1px solid #454d5e;
    }
    .footer div{
        color:#fff;
        display: inline-block;
        width:16%;
    }
    .footer div div{
        color:#fff;
        display: block;
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
            @yield('content')
        </div>
    </div>

    <div class="row m-0">
        <div class="col p-0">
        <!-- @include('Home.partials.footer') -->
        </div>
    </div>

@endsection