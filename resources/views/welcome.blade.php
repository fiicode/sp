@include('partials.header')
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item3-slick1" style="background-image: url(images/slide_1.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        <span class="text-muted">Bienvenue</span><span class="text-info"> Chez</span> <span class="text-danger">S.P Mobile</span>
                    </h2>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            VISITEZ
                        </a>
                    </div>
                </div>
            </div>
            <div class="item-slick1 item1-slick1" style="background-image: url(images/slide_2.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        SP mobile vous propose de l'originalité et de la qualité.
                    </span>
                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        <span class="text-danger">Des nouveaux produit.</span>
                    </h2>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            VISITEZ
                        </a>
                    </div>
                </div>
            </div>
            <div class="item-slick1 item2-slick1" style="background-image: url(images/slide_3.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h3 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        <span class="text-info">SP mobile vous propose de l'originalité et de la qualité.</span>
                    </h3>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            VISITEZ
                        </a>
                    </div>
                </div>
            </div>
            <div class="item-slick1 item2-slick1" style="background-image: url(images/slide_4.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        <span class="text-primary">Disponible dans nos boutiques</span>
                    </span>
                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        <span class="text-danger">DECOUVREZ DES NOUVEAUTES</span>
                    </h2>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            VISITEZ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="banner bgwhite p-t-40 p-b-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{asset('images/banner_1.jpg')}}" alt="IMG-BENNER"  width="300" height="300">
                    <div class="block1-wrapbtn w-size2">
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Accessoires
                        </a>
                    </div>
                </div>
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{asset('images/banner_2.jpg')}}" alt="IMG-BENNER"  width="300" height="300">
                    <div class="block1-wrapbtn w-size2">
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Materiels
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{asset('images/banner_3.jpg')}}" alt="IMG-BENNER"  width="300" height="300">
                    <div class="block1-wrapbtn w-size2">
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Equipements
                        </a>
                    </div>
                </div>
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{asset('images/banner_4.jpg')}}" alt="IMG-BENNER"  width="300" height="300">
                    <div class="block1-wrapbtn w-size2">
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Beats
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{asset('images/banner_5.jpg')}}" alt="IMG-BENNER"  width="300" height="300">
                    <div class="block1-wrapbtn w-size2">
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Téléphones
                        </a>
                    </div>
                </div>
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{asset('images/banner_6.jpg')}}" alt="IMG-BENNER"  width="300" height="300">
                    <div class="block1-wrapbtn w-size2">
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Jeux
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="newproduct bgwhite p-t-45 p-b-105">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center text-danger">
                <i class="fa fa-trophy text-info"></i> Quelques Produits.
            </h3>
        </div>
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach(quelques_produits() as $produit)
                <div class="item-slick2 p-l-15 p-r-15">
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="{{asset("images/storage/$produit->avatar")}}" alt="IMG-PRODUCT"  width="300" height="300">
                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>
                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <a href="{{route('dp', ['productName' => strtolower(trim(preg_replace('/\s+/', '', $produit->productName))) . 'spmobile' . $produit->id])}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                        Acheter
                                    </a>
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
<section class="banner2 bg5 p-t-55 p-b-55">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                <div class="hov-img-zoom pos-relative">
                    <img src="{{asset("images/storage/" . get_promo())}}" alt="IMG-BANNER"  width="300" height="450">
                    <div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
                        <span class="m-text9 p-t-45 fs-20-sm">
                            La beauté de
                        </span>
                        <h3 class="l-text1 fs-35-sm">
                            Nouveauté
                        </h3>
                        <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="s-text4 hov2 p-t-20 ">
                            VOIR LA COLLECTION
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                <div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
                    <img src="{{asset("images/storage/" . get_promo())}}" alt="IMG-BANNER"  width="300" height="450">
                    <div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
                        <div class="t-center">
                            <span class="block2-newprice m-text9">
									PROMO
                            </span>
                        </div>
                        <div class="flex-c-m p-t-44 p-t-30-xl">
                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                <span class="m-text9 p-b-1 days">
                                    01
                                </span>
                                <span class="s-text4">
                                    Jours
                                </span>
                            </div>
                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                <span class="m-text9 p-b-1 hours">
                                    00
                                </span>
                                <span class="s-text4">
                                    Heurs
                                </span>
                            </div>
                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                <span class="m-text9 p-b-1 minutes">
                                    00
                                </span>
                                <span class="s-text4">
                                    mins
                                </span>
                            </div>
                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                <span class="m-text9 p-b-1 seconds">
                                    00
                                </span>
                                <span class="s-text4">
                                    secs
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <br>
        <h2><i class="fa fa-facebook-square" style="color: #4267B2"></i> Nos Publications.</h2><br>
        <div class="row">
            <div class="col-md-4">
                <div>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FSPmobole%2Fposts%2F1938046932885513&width=350" width="350" height="580" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FSPmobole%2Fposts%2F1806102992746575&width=350" width="350" height="580" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FSPmobole%2Fposts%2F1736482916375250&width=350" width="350" height="580" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram -->
<section class="instagram p-t-20">
    <div class="flex-w">
        @foreach(get_instagram() as $produit)
        <div class="block4 wrap-pic-w">
            <img src="{{asset("images/storage/$produit->avatar")}}" alt="IMG-INSTAGRAM">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">{{rand(945,6428)}}</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Disponible chez SP Mobile
                        A kaloum almamiya 664 50 90 91
                        A Prima center 626 41 20 41
                        Livraison possible partout en GUINEE
                    </p>

                    <span class="s-text9">
							<i class="fa fa-facebook-official"></i> #SP mobile
                    </span>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>

<!-- Shipping -->
<section class="shipping bgwhite p-t-62 p-b-46">
    <div class="flex-w p-l-15 p-r-15">
        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                Livraison possible partout en GUINEE
            </h4>

            <a href="#" class="s-text11 t-center">
                Plus d'info
            </a>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
            <h4 class="m-text12 t-center">
                48 Heurs de garantie
            </h4>

            <span class="s-text11 t-center">
                Il suffit de le retourner dans les 48 heurs pour un échange.
            </span>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                Ouverture des Boutiques
            </h4>

            <span class="s-text11 t-center">

                Boutique ouverte du lundi au dimanche de 8h à 20h
				</span>
        </div>
    </div>
</section>


@include('partials.footer')