<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="./css/app.css">
    <script src="./js/app.js"></script>
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

    @stack('css')
    @stack('script')
    <style>
        a{
            color: initial!important;
        }
    /* login css */
        .expanded-view label{
            transition: all 500ms ease;
            font-size: 0.7rem!important;
        }
        .expanded-view input{
            transition: all 100ms ease;
            font-size: 1.2rem;
        }
        label{
            transition: all 500ms ease;
            margin-bottom:0rem!important;
        }
        input{
            transition: all 100ms ease;
        }
        .collapsed-view input{
            transition:all 100ms ease;
            font-size:  0.2rem!important;
        }
        .collapsed-view label{
            transition:all 500ms ease;
            font-size: 1.2rem!important;
        }
        .left_hand_side{
            background-color:#2874f0;
        }
        .bg-white{
            background-color:#fff;
        }
        .left_hand_side .header{
            color:#fff;
            font-size:30px;
            font-weight:800;
        }
        .left_hand_side .text{
            color:#fff;
            font-size:18px;
        }
        .left_hand_side .image{
            background-image: url("login.png");
            position:absolute;
            bottom:3rem;
            height: 8rem;
            width:12rem;
            padding:0;
            background-size:contain;
            background-repeat: no-repeat;
        }
        .w-40{
            width:45%;
        }
        .form-group label{
            color:#827985;
        }
        .form-group input{
            border:none;
            padding:0;
            border-bottom:1px solid #e0e0e0;
        }
        input:focus{
            border:none;
            padding:0;
            border-bottom:1px solid #e0e0e0;
            outline:none!important;
            box-shadow:none!important;
        }
        .color-blue{
            color:#2b76f0;
            font-weight:700;
            /* border-bottom:1px solid #e0e0e0; */
            padding-bottom:.5rem;
        }
        #password{
            width:75%;
        }
        .form-group.collapsed-view{
            height:4rem!important;
        }
        .login-button{
            background-color:#fb641b;
            width:100%;
            font-weight:500;
            color:#fff;
        }
        .otp-button{
            /* background-color:#fb641b; */
            color:#2b76f0;
            width:100%;
            font-weight:700;
            /* color:#fff; */
            box-shadow:0 2px 4px 0 rgba(0,0,0,.2);
        }
        .modal-close{
            font-size:25px;
            color:#fff;
            font-weight:700;
            cursor:pointer;
        }
        .btn:hover{
            color:#dcb444!important;
        }
        .pointer{
            cursor:pointer;
        }
        

    </style>

    <script>
        const nav_login_button="#nav-login-button, #redirect-login-button";
        const nav_register_button="#nav-register-button";
        const modal_login="#login-modal";
        const form_login_button="#login-form-button";
        const form_login="#login-form";
        const form_register_button="#register-form-button";
        const form_register="#register-form";
        $(document).ready(_=>{
            $(document).on("click",nav_login_button,function(){
                axios.get('/login').then((data)=>{
                    $(modal_login).html(data.data);
                });
            });
            $(document).on("click",nav_register_button,function(){
                axios.get('/register').then((data)=>{
                    $(modal_login).html(data.data);
                });
            });
            $(document).on("click",form_login_button,function(){
                let loginInfo=new FormData($(form_login)[0])
                axios.post('/login',loginInfo).then((data)=>{
                    console.log(data);
                });
            });
            $(document).on("click",form_register_button,function(){
                let registerInfo=new FormData($(form_register)[0])
                axios.post('/register',registerInfo).then((data)=>{
                    console.log(data);
                });
            });
            $(document).on("focus",".collapsed-view",function(){
                $(this).closest(".collapsed-view").removeClass("collapsed-view").addClass("expanded-view");
            });
        });
    </script>
</head>
<body>
    @yield('body')
    <div id="login-modal" class="modal" tabindex="-1" role="dialog" aria-hidden="true"></div>
    {{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>--}}
</body>
</html>