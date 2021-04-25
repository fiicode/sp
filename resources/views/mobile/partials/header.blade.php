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

    <!-- CSS -->
    <link href="{{asset('mobile/assets/css/style.css')}}" rel="stylesheet">
    
    <!-- Elegant font icons -->
    <link href="{{asset('mobile/assets/vendor/elegant_font/HTMLCSS/style.css')}}" rel="stylesheet">

    <!-- Elegant font icons -->
    <link href="{{asset('mobile/assets/vendor/materializeicon/material-icons.css')}}" rel="stylesheet">

    <!-- Swiper Slider -->
    <link href="{{asset('mobile/assets/vendor/swiper/css/swiper.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('mobile/assets/css/style-red.css')}}" rel="stylesheet" id="style">

    <!-- Icons -->
    <link rel="apple-touch-icon" href="{{asset('images/icons/title.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/icons/title.png')}}">

    <!-- Font-awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    
    <!-- Button Acheter -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('fonts/themify/themify-icons.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/elegant-font/html-css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">--}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}"> --}}
     {{-- <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}"> --}}

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