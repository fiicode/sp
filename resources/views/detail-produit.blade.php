@include('partials.header')
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-10 p-l-15-sm">
    <a href="{{url('/')}}" class="s-text16">
        Accueil
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <a href="{{route('sp', ['categorie' => $categorie])}}" class="s-text16">
        {{$categorie}}
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <span class="s-text17">
        {{$produit->productName}}
	</span>
</div>
<div class="container bgwhite p-t-10 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>

                <div class="slick3">
                    <div class="item-slick3" data-thumb="{{asset("storage/storage/$produit->avatar")}}">
                        <div class="wrap-pic-w">
                            <img src='{{asset("storage/storage/$produit->avatar")}}' class="img-rounded img-responsive" alt="IMG-PRODUITS">
                        </div>
                    </div>

                    <div class="item-slick3" data-thumb="{{asset("storage/storage/$produit->avatar2")}}">
                        <div class="wrap-pic-w">
                            <img src='{{asset("storage/storage/$produit->avatar2")}}' class="img-rounded img-responsive" alt="IMG-PRODUITS">
                        </div>
                    </div>

                    <div class="item-slick3" data-thumb="{{asset("storage/storage/$produit->avatar3")}}">
                        <div class="wrap-pic-w">
                            <img src='{{asset("storage/storage/$produit->avatar3")}}' class="img-rounded img-responsive" alt="IMG-PRODUITS">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                {{$produit->productName}}
            </h4>

            <span class="m-text17">
                {{$produit->mtt1}} - {{$produit->mtt2}}
            </span>
            <p class="s-text8 p-t-10">
                {{$produit->description}}.
            </p>
            <div class="p-t-33 p-b-60">
                <div class="flex-r-m flex-w p-t-10">
                    <div class="w-size16 flex-m flex-w">
                        <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                            </button>
                            <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                            <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 achat">
                                Acheter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-b-45">
                <span class="s-text8">Categorie: {{$categorie}}</span>
            </div>
            <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Description
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>
                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        {!! nl2br($produit->description) !!}
                    </p>
                </div>
            </div>
            <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Informations
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>
                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        {{--Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat--}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="relateproduct bgwhite p-t-45 p-b-138">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center text-danger">
                <i class="fa fa-tags"></i> Produits Similaires
            </h3>
        </div>
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach($brothers as $produit)
                <div class="item-slick2 p-l-15 p-r-15">
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="{{asset("storage/storage/$produit->avatar")}}" alt="IMG-PRODUCT" width="300" height="300">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 achat">
                                        Acheter
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="block2-txt p-t-20">
                            <a href="{{route('dp', ['productName' => strtolower(trim(preg_replace('/\s+/', '', $produit->productName))) . 'spmobile' . $produit->id])}}" class="block2-name dis-block s-text3 p-b-5">
                                {{$produit->productName}}
                            </a>
                            <span class="block2-oldprice m-text7 p-r-5">
                                {{$produit->mtt1}}
                            </span>
                            <span class="block2-newprice m-text8 p-r-5">
                                {{$produit->mtt2}}
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@include('partials.footer')