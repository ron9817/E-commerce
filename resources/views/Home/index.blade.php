@extends('Home.layouts.bootstrap_layout')
@section('title', 'Home')
@push('script')
<script>
    const nav_login_button="#nav-login-button";
    const modal_login="#login-modal";
    const form_login_button="#login-form-button";
    const form_login="#login-form";
    $(document).ready(_=>{
        $(document).on("click",nav_login_button,function(){
            axios.get('/login').then((data)=>{
                $(modal_login).html(data.data);
            });
        });
        $(document).on("click",form_login_button,function(){
            let loginInfo=new FormData($(form_login)[0])
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

    