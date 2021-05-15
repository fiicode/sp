{{-- MIOBILE --}}
@if (isMobile())


@include('mobile.components.login')


@else
{{-- DESKTOP --}}
@include('partials.header')



<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-b-30">
                <form class="leave-comment"  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Se connecter
                    </h4>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="email"  name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="password" placeholder="********" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="w-size25">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
                            Se connecté
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-5 p-b-30">
                <div class="row">
                    <h4 class="m-text26 p-b-36 p-t-15 col-md-12">
                        Ouvrez votre compte via
                    </h4><br>
{{--                    <div class="w-size25 pull-right">--}}
{{--                        <!-- Button -->--}}
{{--                        <a href="redirect/facebook"><button class="flex-c-m size2 bg-primary bo-rad-23 hov1 m-text3 trans-0-4" type="submit">--}}
{{--                            <i class="fa fa-facebook-official text-md-center"></i>--}}
{{--                        </button></a>--}}
{{--                    </div>&nbsp;--}}
                    <div class="w-size25 pull-right">
                        <!-- Button -->
                        <a href="redirect/google"><button class="flex-c-m size2 bg-danger bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
                            <i class="fa fa-google text-md-center"></i>
                            </button></a>
                    </div>&nbsp;
                    <div class="w-size25 pull-right">
                        <!-- Button -->
                        <a href="redirect/github"><button style="background: grey" class="flex-c-m size2 p-l-2 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
                            <i class="fa fa-github text-md-center"></i>
                            </button></a>
                    </div>
                </div>
                <hr>
{{--                <form class="leave-comment">--}}
{{--                    @csrf--}}
{{--                    <h4 class="m-text26 p-b-36 p-t-15">--}}
{{--                        Créer votre compte--}}
{{--                    </h4>--}}

{{--                    <div class="bo4 of-hidden size15 m-b-20">--}}
{{--                        <input class="sizefull s-text7 p-l-22 p-r-22" type="email" disabled name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">--}}
{{--                        @if ($errors->has('email'))--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                        @endif--}}
{{--                    </div>--}}

{{--                    <div class="bo4 of-hidden size15 m-b-20">--}}
{{--                        <input class="sizefull s-text7 p-l-22 p-r-22" type="password" disabled  name="password" required>--}}
{{--                        @if ($errors->has('password'))--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    <div class="bo4 of-hidden size15 m-b-20">--}}
{{--                        <input class="sizefull s-text7 p-l-22 p-r-22" type="password" disabled  name="password" required>--}}
{{--                        @if ($errors->has('password'))--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                        @endif--}}
{{--                    </div>--}}

{{--                    <div class="w-size25">--}}
{{--                        <!-- Button -->--}}
{{--                        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" disabled type="submit">--}}
{{--                            S'enregistrer--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
            </div>
        </div>
    </div>
</section>


@include('partials.footer')

@endif