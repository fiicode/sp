@include('mobile.partials.header')

<!-- Fixed navbar -->
@include('mobile.partials.nav')
<!-- Fixed navbar ends -->

<!-- sidebar -->
@include('mobile.partials.sidebar')
<!-- sidebar ends -->

<!-- Begin page content -->
<main class="flex-shrink-0 main-container">
    <!-- page content goes here -->
    <div class="banner-hero vh-100 scroll-y bg-dark">
        {{-- <div class="background opac">
            <img src="img/login.jpg" alt="">
        </div> --}}
        <div class="container h-100 text-white">
            <div class="row h-100 h-sm-auto">
                <div class="col-12 col-md-8 col-lg-5 col-xl-4 mx-auto align-self-center text-center">
                    {{-- <div class="loader-logo">
                        <div class="logo">1<span>UX</span><span>UI</span>                                
                        </div>
                        <h4 class="logo-text"><span>OneUIUX</span><small>Mobile HTML</small></h4>
                    </div> --}}
                    <h5 class="font-weight-light mb-1 text-mute">Welcome back,</h5>
                    <h3 class="font-weight-normal mb-4">Se conneter</h3>

                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg border-0" placeholder="Email address" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg border-0" placeholder="Password" required="">
                    </div>

                    <div class="my-3 row">
                        <div class="col-6 col-md py-1 text-left">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                <label class="custom-control-label" for="customCheck1">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-6 col-md py-1 text-right text-md-right">
                            <a href="forgotpassword.html" class="text-white">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="mb-4">
                        <a href="index.html" class=" btn btn-lg btn-default default-shadow btn-block">Sign In <span class="ml-2 icon arrow_right"></span></a>
                    </div>
                    <div class="mb-4">
                        <p>Do not have account yet?<br>Please <a href="register.html" class="text-white">Sign up</a> here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End of page content -->


    <!-- scroll to top button -->
    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>
    <!-- scroll to top button ends-->
    
@include('mobile.partials.footer')
