@extends('Home.layouts.bootstrap_layout')
@section('title', 'Home')
@push('script')
<script>
    $(document).ready(_=>{
        $(document).on("click","#nav-login-button",function(){
            axios.get('/login').then((data)=>{
                $("#login-modal").html(data.data);
            });
        });
        $(document).on("click","#login-form-button",function(){
            let loginInfo=new FormData($("#login-form")[0])
            axios.post('/sign-in',loginInfo).then(()=>{

            })
        })
    });
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

    <div id="login-modal" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
        
    </div>
@endsection

    