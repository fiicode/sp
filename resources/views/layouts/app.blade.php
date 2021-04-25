<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="bahaboubackr" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SP-Mobile') }}</title>
    <link rel="shortcut icon" href="favicon.ico">
    <!--
       /$$$$$$  /$$$$$$$       /$$      /$$  /$$$$$$  /$$$$$$$  /$$$$$$ /$$       /$$$$$$$$
     /$$__  $$| $$__  $$      | $$$    /$$$ /$$__  $$| $$__  $$|_  $$_/| $$      | $$_____/
    | $$  \__/| $$  \ $$      | $$$$  /$$$$| $$  \ $$| $$  \ $$  | $$  | $$      | $$
    |  $$$$$$ | $$$$$$$/      | $$ $$/$$ $$| $$  | $$| $$$$$$$   | $$  | $$      | $$$$$
     \____  $$| $$____/       | $$  $$$| $$| $$  | $$| $$__  $$  | $$  | $$      | $$__/
     /$$  \ $$| $$            | $$\  $ | $$| $$  | $$| $$  \ $$  | $$  | $$      | $$
    |  $$$$$$/| $$            | $$ \/  | $$|  $$$$$$/| $$$$$$$/ /$$$$$$| $$$$$$$$| $$$$$$$$
     \______/ |__/            |__/     |__/ \______/ |_______/ |______/|________/|________/

                                                                                           bahaboubackr
     -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flat-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
    {{-- <link href="css/now-ui-kit.css" rel="stylesheet"> --}}
    @yield('styles')
</head>
<body style="background-color: #293a4a">


  <nav class="navbar navbar-inverse navbar-embossed" role="navigation" style="box-shadow: 0px 0px 9px #000">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="{{ url('/')}}" target="_blank" title="https://spmobilestore.com" data-placement="bottom" data-toggle="tooltip">
         <i class="fa fa-globe"></i> Aller au site <span class="fui-export hidden-sm"></span>
      </a>
    </div>
    <div class="collapse navbar-collapse hidden-xs hidden-sm" id="navbar-collapse-01">
      <ul class="nav navbar-nav navbar-right">
      <li class="pull-rigth hidden-xs hidden-sm hidden-md"><a title="Administration du site" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-tachometer"></i> ADMINISTRATION</a></li>
      @guest
        {{-- <li><a href="{{ route('login')}}">Login</a></li> --}}
          {{-- <li><a href="{{ route('register')}}">Register</a></li> --}}
      @else
        <form class="navbar-form navbar-left" action="#" role="search" title="Rechercher dans la Base de données" data-placement="bottom" data-toggle="tooltip">
          <div class="form-group">
            <div class="input-group">
              <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
              <span class="input-group-btn">
                <button type="submit" class="btn"><span class="fui-search"></span></button>
              </span>
            </div>
          </div>
        </form>
        <li class="hidden-xs hidden-sm"><a href="https://webmail1.hostinger.fr/" target="_blank" title="Boite-mail" data-placement="bottom" data-toggle="tooltip"><span class="fui-mail"></span><span class="navbar-new">2</span></a></li>
        <li class="hidden-xs hidden-sm"><a href="#" title="conversations" data-placement="bottom" data-toggle="tooltip"><span class="fa fa-comments-o"></span><span class="navbar-unread">3</span></a></li>
        <li class="hidden-xs hidden-sm"><a href="#" title="notifications" data-placement="bottom" data-toggle="tooltip"><span class="fa fa-bell-o"></span><span class="navbar-new">2</span></a></li>
        <li><a href="{{url('home')}}" title="Home Admin" data-placement="bottom" data-toggle="tooltip"><span class="fui-windows-8"></span> Dashboard<span class="navbar-unread">1</span></a></li>
        <li class="dropdown hidden-xs hidden-sm" title="{{ Auth::user()->name }} est connecté" data-placement="bottom" data-toggle="tooltip">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="fui-user"></span> {{ Auth::user()->name }} <b class="caret"></b></a>
        </li>
        <li title="Déconnexion" data-placement="bottom" data-toggle="tooltip">
            <a href="{{ route('logout')}}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
               <i class="fui-exit"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
      @endguest
      </ul>
    </div>
  </nav>
    {{-- <div id="app" class="col-md-offset-4"> --}}


        {{-- <div class="row"> --}}
          <div class="content">
            <div class="container">
                {{-- @if(Session::has('message'))
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-check"></i> Message!</h5>
                    {{Session::get('message')}}.
                  </div>
                @endif --}}
                @yield('content')
            </div>
            @yield('dashboard')
          </div>
        {{-- </div> --}}

    {{-- </div> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/flat-ui.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    {{-- <script src="{{ assets('js/now-ui') }}-kit.js"></script> --}}
    @yield('scripts')
    <script type="text/javascript">
      @if(Session::has('message'))
        swal({
          title: "{{Session::get('message')}}!",
          text: "success.",
          imageUrl: "images/thumbs-up.jpg"
        });
      @endif
      $(function () {
          $('[data-toggle=tooltip]').tooltip();
        });
    </script>
</body>
</html>
