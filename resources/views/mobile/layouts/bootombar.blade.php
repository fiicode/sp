<!-- sticky footer tabs -->
<div class="footer-tabs border-top text-center">
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                <i class="material-icons">store</i>
                <small class="sr-only">Home</small>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">
                <i class="material-icons">view_day</i>
                <small class="sr-only">search</small>
            </a>
        </li>
        <li class="nav-item centerlarge">
            <a class="nav-link bg-default" id="cart-tab" data-toggle="tab" href="#cart" role="tab" aria-controls="cart" aria-selected="false">
                <i class="material-icons">shopping_basket</i>
                <small class="sr-only">chat</small>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="favorite-tab" data-toggle="tab" href="#favorite" role="tab" aria-controls="favorite" aria-selected="false">
                <i class="material-icons">favorite</i>
                <small class="sr-only">Best</small>
            </a>
        </li>
        @auth       
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                    <i class="material-icons">person</i>
                    <small class="sr-only">Account</small>
                </a>
            </li>
        @endauth
        @guest
           <li class="nav-item">
                <a class="nav-link"  href="{{route('login')}}"  aria-controls="profile" aria-selected="false">
                    <i class="material-icons">person</i>
                    <small class="sr-only">Account</small>
                </a>
            </li>           
        @endguest
    </ul>
</div>
<!-- sticky footer tabs ends -->