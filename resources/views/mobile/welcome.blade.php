<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="OneUIUX HTML website template by Maxartkiller. Bootstrap UI UX, Bootstrap theme, Bootstrap HTML, Bootstrap template, Bootstrap website, multipurpose website template. get bootstrap template, website">
    <meta name="author" content="Maxartkiller">

    <title>{{env('APP_NAME')}}</title>
{{--    <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" sizes="180x180">--}}
{{--    <link rel="icon" href="assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">--}}
{{--    <link rel="icon" href="assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">--}}
{{--    <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#ffffff">--}}
{{--    <link rel="icon" href="assets/img/favicons/favicon.ico">--}}

    <!-- Elegant font icons -->
    <link href="{{asset('mobile/assets/vendor/elegant_font/HTMLCSS/style.css')}}" rel="stylesheet">

    <!-- Elegant font icons -->
    <link href="{{asset('mobile/assets/vendor/materializeicon/material-icons.css')}}" rel="stylesheet">

    <!-- Swiper Slider -->
    <link href="{{asset('mobile/assets/vendor/swiper/css/swiper.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('mobile/assets/css/style-red.css')}}" rel="stylesheet" id="style">

    <style>
        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }
        .lds-ellipsis div {
            position: absolute;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #f94620;
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }
        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 0.6s infinite;
        }
        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }
        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(0);
            }
        }
        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(24px, 0);
            }
        }
    </style>
</head>

<body class="ui-rounded">
<!-- Page laoder -->
{{--<div class="container-fluid pageloader">--}}
{{--    <div class="row h-100">--}}
{{--        <div class="col-12 align-self-start text-center">--}}
{{--        </div>--}}
{{--        <div class="col-12 align-self-center text-center">--}}
{{--            <div class="loader-logo">--}}
{{--                <div class="logo">SP<span>onl</span><span>sto</span>--}}
{{--                    <div class="loader-roller">--}}
{{--                        <div></div>--}}
{{--                        <div></div>--}}
{{--                        <div></div>--}}
{{--                        <div></div>--}}
{{--                        <div></div>--}}
{{--                        <div></div>--}}
{{--                        <div></div>--}}
{{--                        <div></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <h4 class="logo-text"><span>SP mobile</span><small>La technologie à votre portée</small></h4>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-12 align-self-end text-center">--}}
{{--            <p class="my-5">Please wait<br><small class="text-mute">A world of great designs is loading...</small></p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Page laoder ends -->

<!-- Fixed navbar -->
<header class="header fixed-top" >
    <nav class="navbar" style="border-bottom: 7px solid #EB3D00;border-top: 1px solid #EB3D00;border-bottom-right-radius: 50px; border-bottom-left-radius: 50px">
        <div>
            <button class="menu-btn btn btn-link btn-44">
                <span class="icon material-icons">menu</span>
            </button>
        </div>
        <div class="centered row">
            <div>
                <div class="pull-left">
                    <img src="{{asset('spmobile.png')}}" class="m-0" width="60">
                    {{--                    <span>onlin.</span><span>store</span>--}}
                </div>
            </div>
            <div>
                <a class="navbar-brand pull-right" href="">
                    <h4 class="logo-text"><span>  SP mobile</span><small>La technologie à votre portée</small></h4>
                </a>
            </div>
        </div>
        <div>
            <form class="form-inline search">
                <input class="form-control w-100" type="text" placeholder="Search..." aria-label="Search">
                <button class="btn btn-link btn-44" type="submit"><span class="icon_search"></span></button>
            </form>
            <button class="btn btn-link search-btn" type="button"><span class="icon_search"></span></button>
{{--            <a href="profile.html" class=""><span class="avatar avatar-30"><img src="{{asset('assets/img/user1.png')}}" alt=""></span></a>--}}
        </div>
    </nav>
</header>
<!-- Fixed navbar ends -->

<!-- sidebar -->
<div class="sidebar">
    <div class="row no-gutters">
        <div class="col-auto align-self-center">
            <figure class="avatar avatar-50">
                <img src="{{asset('spmobile.png')}}" alt="">
            </figure>
        </div>
        <div class="col pl-3 align-self-center">
            <p class="my-0">SP mobile</p>
            <p class="text-mute my-0 small">Prima Center</p>
        </div>
        <div class="col-auto align-self-center">
            <a href="" class="btn btn-link text-white p-2"><i class="material-icons">power_settings_new</i></a>
        </div>
    </div>
    <div class="list-group main-menu my-4">
        <a href="#" class="list-group-item list-group-item-action active"><i class="material-icons">home</i>Accueil</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">view_day</i>Menu</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">shopping_cart</i>Commandes</a><br><br><br><br><br><br><br><br>
        <hr>
        <div class="divider"></div>
        <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">business</i>Apropos de nous</a>
    </div>
</div>
<!-- sidebar ends -->

<!-- Begin page content -->
<main class="flex-shrink-0 main-container pb-0">
    <!-- page content goes here -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            @include('mobile.layouts.categorie')
            @include('mobile.layouts.search')
            @include('mobile.layouts.offers')
            <div class="container">
                <h6 class="page-subtitle">Popular food <a href="#" class="btn btn-sm float-right px-0">View all</a></h6>
                <div class="row article-feed">
                    @foreach($produits as $produit)
                        @if(Storage::disk('public')->has($produit->avatar))
                        <div class="col-6 col-md-3 article">
                            <div class="card border-0 shadow-light text-center mb-4">
                                <div class="card-body position-relative" style="padding: 0px">
    {{--                                <div class="top-right mt-2"><button class="btn btn-link text-danger p-0"><i class="material-icons text-danger vm">favorite</i></button></div>--}}
                                    <div class="h-100px position-relative overflow-hidden" style="height: 170px;border-radius: 10px">
{{--                                        <div class="background background-h-100">--}}
                                            <img src="{{asset("storage/storage/$produit->avatar")}}" alt="" width="100%">
{{--                                        </div>--}}
                                    </div>
                                    <a href=""><p class="small pt-2">{{$produit->productName}}</p></a>
                                    <div class="row p-1">
                                        <div class="col text-left">
                                            <p class="text-success my-0 text-bold">{{$produit->mtt2}}</p>
                                        </div>
                                        <div class="col-auto"><button class="btn btn-sm btn-link text-default p-0"><i class="material-icons">shopping_basket</i></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="row">
                    {{$produits->links('mobile.layouts.loader')}}
                </div>

            </div>
        </div>
        @include('mobile.components.menu')
        @include('mobile.components.cart')
        @include('mobile.components.favorite')
        @include('mobile.components.profile')
    </div>

{{--    <div class="toast bottom-right position-fixed mb-5" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">--}}
{{--        <div class="toast-header">--}}
{{--            <div class="avatar avatar-20 mr-2">--}}
{{--                <div class="background">--}}
{{--                    <img src="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <strong class="mr-auto">Maxartkiller</strong>--}}
{{--            <small>Just now</small>--}}
{{--            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">--}}
{{--                <span aria-hidden="true">&times;</span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--        <div class="toast-body">--}}
{{--            Hello, Welcome to our website.--}}
{{--        </div>--}}
{{--    </div>--}}
</main>
<!-- End of page content -->

<br><br><br><br>

@include('mobile.layouts.bootombar')


<!-- scroll to top button -->
<button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>
<!-- scroll to top button ends-->

@include('mobile.layouts.colorsettings')
@include('mobile.layouts.footer')