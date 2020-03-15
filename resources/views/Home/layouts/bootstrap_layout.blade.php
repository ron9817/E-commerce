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
    /* login css */
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
            width:15rem;
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
            font-size:20px;
            color:#fff;
            font-weight:700;
            cursor:pointer;
        }

    </style>
</head>
<body>
    @yield('body')
    {{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>--}}
</body>
</html>