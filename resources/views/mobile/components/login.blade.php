@include('mobile.partials.header')

{{-- Fixed navbar  --}}
{{-- @include('mobile.partials.nav') --}}
{{-- Fixed navbar ends  --}}

{{-- sidebar  --}}
@include('mobile.partials.sidebar')
{{--  sidebar ends --}}
    {{-- Begin page content --}}
    <main class="flex-shrink-0 main-container text-center">
        <!-- page content goes here -->
        <div class="banner-hero vh-100 scroll-y bg-dark">
            <div class="background opac">
                <img src="{{asset('images/slide_3.jpg')}}">
            </div><br><br>
            <div class="container h-100 text-white">
                <div class="row h-100 h-sm-auto">
                    <div class="col-12 col-md-8 col-lg-5 col-xl-4 mx-auto align-self-center text-center">
                        <div class="loader-logo">
                                <img src="{{asset('spmobile.png')}}" class="m-0" width="85">                                
                            <h4 class="logo-text"><span class="font-weight-bolder">  SP mobile</span><small>La technologie à votre portée</small></h4>
                        </div>
                        <br>
                        
                        <h5 class="font-weight-light mb-1 text-mute">Content de vous revoir</h5>
                        <h3 class="font-weight-normal mb-4"> Se connecter</h3>

                        <form action="{{ route('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="sr-only">Email </label>
                                <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control form-control-lg border-0 @error('email') is-invalid @enderror" placeholder="Adresse e-mail"   autofocus="">                            
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Mot de pass</label>
                                <input type="password" name="password" id="password" class="form-control form-control-lg border-0 @error('password') is-invalid @enderror" placeholder="********"> 
                                @if($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="my-3 row">
                                <div class="col-6 col-md py-1 text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                        <label class="custom-control-label" for="customCheck1">Souviens-toi de moi</label>
                                    </div>
                                </div>
                                <div class="col-6 col-md py-1 text-right text-md-right">
                                    <a href="#" class="text-white">Mot de passe oublié?</a>
                                </div>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class=" btn btn-lg btn-default default-shadow btn-block">Se connecter <span class="ml-2 icon arrow_right"></span></a>
                            </div>
                        </form>
                        <div class="mb-4">
                            <p>Vous n'avez pas encore de compte?<br>Veuillez  <a href="#" class="text-white">vous inscrire</a> ici.</p>
                        </div>

                        <div class="col-md-5 col-sm-12 p-b-30 mx-5">
                            <div class="row">
                        
                                <div class="w-size25 m-3">
                                    <!-- Button -->
                                    <a href="redirect/google"><button class="flex-c-m size2 bg-danger bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
                                        <i class="fa fa-google text-md-center"></i>
                                        </button></a>
                                </div>&nbsp;
                                <div class="w-size25 m-3">
                                    <!-- Button -->
                                    <a href="redirect/github"><button style="background: grey" class="flex-c-m size2 p-l-2 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
                                        <i class="fa fa-github text-md-center"></i>
                                        </button></a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End of page content -->
@include('mobile.partials.footer')
