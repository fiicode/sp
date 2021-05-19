<!-- Fixed navbar -->
<header class="header fixed-top" >
    <div class="d-flex justify-content-center m-1">
        <a href="#" class="btn btn-warning text-center" type="button" disabled>
            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
            Une mise à jour en cours...
        </a>
    </div>
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
                </div>
            </div>
            <div>
                <a class="navbar-brand pull-right" href="#">
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
            {{-- <a href="profile.html" class=""><span class="avatar avatar-30"><img src="{{asset('assets/img/user1.png')}}" alt=""></span></a> --}}
        </div>
    </nav>
</header>
<!-- Fixed navbar ends -->