@push('css')
<style>
    .nav-container{
        background-color:#2874f0;
    }
    .mx-10{
        margin: 0 10rem;
    }
    .logo .text a{
        font-size: 12px;
        color: #fff!important;
    }
    .logo .text a span{
        color:#dfd424!important;
        font-weight:700;
    }
    .text-white{
        color: #fff;
    }
    .text-blue{
        color: #2874f0
    }
    .b-0{
        border:0!important;
    }
    input.b-0:focus{
        border:0px!important;
        border-color:#fff!important;
        outline: none;
    }
    .nav-container{
        font-weight:800!important;
    }
    .w-90{
        width:90%!important;
    }
    .w-40{
        width:40%!important;
    }
    #nav-login-button{
        width:10rem;
    }
    /* .search-bar{
        flex:2;
    }
    .logo, .other-button{
        flex:1;
    } */
</style>
@endpush
<div class="nav-container">
    <div class="d-flex justify-content-center py-2 ">
        <div class="logo mx-4 my-2">
            <a href="/">
                <img width="85" src="logo.png" alt="Flipkart" title="Flipkart">
            </a>
            <div class="text">
                <a class="" href="/">Explore <span class="">Plus </span><img width="10" src="plus.png"></a>
            </div>
        </div>
        <div class="search-bar w-40 mx-4 my-2">
            <form class="" action="/search" method="GET">
                <div class="input-group">
                    <input type="text" class="p-2 w-90 rounded-0form-control b-0" aria-label="" aria-describedby="basic-addon1" value="" title="Search for products, brands and more" name="q" autocomplete="off" placeholder="Search for products, brands and more">
                    <div class="input-group-append w-10">
                        <button class="rounded-0 btn btn-light b-0" type="button"><i class="fa text-blue fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="other-button">
            <div class="m-2 d-inline-block">
                <button class="btn btn-light px-2 rounded-0 text-blue" id="nav-login-button" data-toggle="modal" data-target="#login-modal">Login</button>
            </div>
            <div class="m-2 d-inline-block text-white">
                More <i class="fa fa-angle-down" aria-hidden="true"></i>
            </div>
            <div class="m-2 d-inline-block text-white">
                <i class="fa fa-cart-plus text-white" aria-hidden="true"></i> Cart
            </div>
        </div>
    </div>
</div>