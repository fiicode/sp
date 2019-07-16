<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<!--
   /$$$$$$  /$$$$$$$        /$$      /$$  /$$$$$$  /$$$$$$$  /$$$$$$ /$$       /$$$$$$$$
 /$$__  $$| $$__  $$      | $$$    /$$$ /$$__  $$| $$__  $$|_  $$_/| $$      | $$_____/
| $$  \__/| $$  \ $$      | $$$$  /$$$$| $$  \ $$| $$  \ $$  | $$  | $$      | $$
|  $$$$$$ | $$$$$$$/      | $$ $$/$$ $$| $$  | $$| $$$$$$$   | $$  | $$      | $$$$$
 \____  $$| $$____/       | $$  $$$| $$| $$  | $$| $$__  $$  | $$  | $$      | $$__/
 /$$  \ $$| $$            | $$\  $ | $$| $$  | $$| $$  \ $$  | $$  | $$      | $$
|  $$$$$$/| $$            | $$ \/  | $$|  $$$$$$/| $$$$$$$/ /$$$$$$| $$$$$$$$| $$$$$$$$
 \______/ |__/            |__/     |__/ \______/ |_______/ |______/|________/|________/

                                                                                       bahaboubackr
 -->
    <title>S.P mobile</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="copyright" content="2018">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SP mobile vous propose de l'originalité et de la qualité" />
    <base href="{{url('/')}}">
    <meta name="referrer" content="origin">
    <link rel="canonical" href="{{url('/')}}">
    <meta name="keywords" content="SP MOBILE,SHOP, BOUTIQUE, ELECTRONIQUE , TECHNOLOGIE" />
    <meta name="author" content="bahaboubackr" />
    {{--<link rel="shortcut icon" href="favicon.ico">--}}
    <link rel="apple-touch-icon" href="{{asset('images/icons/title.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/icons/title.png')}}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/themify/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/elegant-font/html-css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125754072-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125754072-1');
    </script>


    <style>
        #active {
            font-weight: 900;
            font-size: 20px;
            background-color: #EB3D00;
        }
        .autocomplete-suggestions {
            border: 1px solid #e4e4e4;
            background: #F4F4F4;
            cursor: default;
            overflow: auto
        }
        .autocomplete-suggestion {
            padding: 2px 5px;
            font-size: 1.2em;
            white-space: nowrap;
            overflow: hidden
        }
        .autocomplete-selected {
            background: #f0f0f0
        }
        .autocomplete-suggestions strong {
            font-weight: normal;
            color: #3399ff;
            font-weight: bolder
        }
        .text-danger .spcolor {
            color: #EB3D00;
        }
    </style>
</head>
{{--<body class="animsition">--}}
<body class="">
<?php $get_categories = get_categorie() ?>
<header class="header1">
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <a href="https://www.facebook.com/SPmobole/" class="topbar-social-item fa fa-facebook-official"></a>
                {{--<a href="#" class="topbar-social-item fa fa-instagram"></a>--}}
                {{--<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>--}}
                {{--<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>--}}
                {{--<a href="#" class="topbar-social-item fa fa-youtube-play"></a>--}}
            </div>
            <span class="topbar-child1 text-danger" style="color: #EB3D00;font-weight: bold">
                Livraison possible partout en GUINEE
            </span>
            <div class="topbar-child2">
                <span class="topbar-email" style="color: #EB3D00;">
                    service@spmobilestore.com
                </span>
            </div>
        </div>

        <div class="wrap_header" style="border-bottom: 7px solid #EB3D00;;border-top: 1px solid #EB3D00;;border-bottom-right-radius: 50px; border-bottom-left-radius: 50px">
            <a href="{{url('/')}}" class="logo">
                <img src="{{asset('images/icons/logo.png')}}" alt="IMG-LOGO" width="210" height="200" style="max-height: 50px">
            </a>
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="{{url('/')}}">Accueil</a>
                        </li>
                        <li>
                            <a href="{{route('sp', ['categorie' => 'Tous'])}}">Produits</a>
                            <ul class="sub_menu">
                                @foreach($get_categories as $categorie)
                                <li><a href="{{route('sp', ['categorie' => $categorie->categorieName])}}">{{$categorie->categorieName}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li>
                            <div class="pos-relative bo11 of-hidden">
                                <form action="{{route('recherche')}}" method="post">
                                    @csrf
                                    <input class="s-text3 size1 p-l-23 p-r-53" type="text" name="recherche" placeholder="Recherche..">

                                    <button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
                                        <i class="fs-13 fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-icons">
                <div class="header-wrapicon2">
                    <img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>
                </div>
                <span class="linedivide1"></span>
                <a href="{{route('login')}}" class="header-wrapicon1 dis-block">
                    <img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
                </a>
            </div>
        </div>
    </div>
    <div class="wrap_header_mobile" style="border-bottom: 7px solid #EB3D00;;border-top: 1px solid #EB3D00;border-bottom-right-radius: 50px; border-bottom-left-radius: 50px">
        <a href="{{url('/')}}" class="logo-mobile">
            <img src="{{asset('images/icons/logo.png')}}" alt="IMG-LOGO" width="180" height="80" style="max-height: 50px">
        </a>
        <div class="btn-show-menu">
            <div class="header-icons-mobile">
                <div class="header-wrapicon2">
                    <img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>
                </div>
                <span class="linedivide2"></span>
                <a href="{{route('login')}}" class="header-wrapicon1 dis-block">
                    <img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
                </a>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <span class="topbar-child1 text-danger" style="color: #EB3D00;font-weight: bold">
                        Livraison possible partout en GUINEE
                    </span>
                </li>
                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="https://www.facebook.com/SPmobole/" class="topbar-social-item fa fa-facebook-official"></a>
                    </div>
                </li>
                <li class="item-topbar-mobile p-l-10">
                    <div class="pos-relative bo11 of-hidden">
                        <input class="s-text3 size1 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search">

                        <button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
                            <i class="fs-13 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{route('sp', ['categorie' => 'Tous'])}}">Produits</a>
                    <ul class="sub-menu">
                        @foreach($get_categories as $categorie)
                            <li><a href="{{route('sp', ['categorie' => $categorie->categorieName])}}">{{$categorie->categorieName}}</a></li>
                        @endforeach
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>
                <li class="item-menu-mobile">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>