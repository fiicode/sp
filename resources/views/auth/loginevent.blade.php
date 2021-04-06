@include('partials.header')

<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url(images/slide_4.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        SP mobile vous propose de l'originalité et de la qualité.
                    </span>
                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        <span class="text-danger">Rentrez avec la console.</span>
                    </h2>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <a href="sign/event/fifa19#competition" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Participez
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our product -->
<section class="bgwhite p-t-45 p-b-58" id="competition">
    <div class="container">
        <div class="sec-title p-b-22">
            <h3 class="m-text5 t-center">
                Évenements
            </h3>
        </div>

        <!-- Tab01 -->
        <div class="tab01">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active text-bold" data-toggle="tab" href="#best-seller" role="tab">Compétition FIFA 19 | </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#featured" role="tab">PROMO VACCANCE | </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#sale" role="tab">PROMO AÛT | </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">PROMO FIN D'ANNÉE</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content p-t-35">
                <!-- - -->
                <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="m-text25 text-center col-md-12 text-danger">
                                        Compétition FIFA 19
                                    </h4>
                                </div>
                                <div class="tab01 col-md-12">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-bold" data-toggle="tab" href="#premierTour" role="tab">8iéme de Final | </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#quarFinal" role="tab">Quart de Final | </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#demiFinal" role="tab">Démi Final |</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#final" role="tab">Final</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content col-md-12">
                                    <div class="tab-pane fade show active" id="premierTour" role="tabpanel">
                                        <div class="row">
                                            @foreach($jouersptou as $jouer)
                                                <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3 alert alert-secondary m-3">
                                                    <img src="{{get_user($jouer->user_id_to) ? get_user($jouer->user_id_to)->avatar : null}}" class="bd-placeholder-img rounded-circle" width="70" height="70"> <span class="text-center pl-5">VS</span>
                                                    <img src="{{get_user($jouer->user_id_from) ? get_user($jouer->user_id_from)->avatar : null}}" class="bd-placeholder-img rounded-circle pull-right" width="70" height="70">
                                                    {{--                                            <h6>{{$jouer->name}}</h6>--}}
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6 col-xl-6">
                                                            <p class="text-danger">{{get_event_equip($jouer->user_id_to)}} &nbsp; ({{$jouer->user_id_to_score}})</p>
                                                            <p>FJ0{{get_user($jouer->user_id_to) ? get_user($jouer->user_id_to)->id : null}}</p>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6 col-xl-6">
                                                            <p class="text-danger">({{$jouer->user_id_from_score}}) &nbsp;{{get_event_equip($jouer->user_id_from)}}</p>
                                                            <p>FJ0{{get_user($jouer->user_id_from) ? get_user($jouer->user_id_from)->id : null}}</p>
                                                        </div>
                                                    </div>
                                                    {{--                                        <p><a class="btn btn-secondary" href="#" role="button">profile &raquo;</a></p>--}}

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="quarFinal" role="tabpanel">
                                        <div class="row">
                                            @foreach($jouersqfinal as $jouer)
                                                <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3 alert alert-secondary m-3">
                                                    <img src="{{get_user($jouer->user_id_to) ? get_user($jouer->user_id_to)->avatar : null}}" class="bd-placeholder-img rounded-circle" width="70" height="70"> <span class="text-center pl-5">VS</span>
                                                    <img src="{{get_user($jouer->user_id_from) ? get_user($jouer->user_id_from)->avatar : null}}" class="bd-placeholder-img rounded-circle pull-right" width="70" height="70">
                                                    {{--                                            <h6>{{$jouer->name}}</h6>--}}
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6 col-xl-6">
                                                            <p class="text-danger">{{get_event_equip($jouer->user_id_to)}} &nbsp; ({{$jouer->user_id_to_score}})</p>
                                                            <p>FJ0{{get_user($jouer->user_id_to) ? get_user($jouer->user_id_to)->id : null}}</p>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6 col-xl-6">
                                                            <p class="text-danger">({{$jouer->user_id_from_score}}) &nbsp;{{get_event_equip($jouer->user_id_from)}}</p>
                                                            <p>FJ0{{get_user($jouer->user_id_from) ? get_user($jouer->user_id_from)->id : null}}</p>
                                                        </div>
                                                    </div>
                                                    {{--                                        <p><a class="btn btn-secondary" href="#" role="button">profile &raquo;</a></p>--}}

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="demiFinal" role="tabpanel">
                                        <div class="row">
                                            @foreach($jouersdfinal as $jouer)
                                                <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3 alert alert-secondary m-3">
                                                    <img src="{{get_user($jouer->user_id_to) ? get_user($jouer->user_id_to)->avatar : null}}" class="bd-placeholder-img rounded-circle" width="70" height="70"> <span class="text-center pl-5">VS</span>
                                                    <img src="{{get_user($jouer->user_id_from) ? get_user($jouer->user_id_from)->avatar : null}}" class="bd-placeholder-img rounded-circle pull-right" width="70" height="70">
                                                    {{--                                            <h6>{{$jouer->name}}</h6>--}}
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6 col-xl-6">
                                                            <p class="text-danger">{{get_event_equip($jouer->user_id_to)}} &nbsp; ({{$jouer->user_id_to_score}})</p>
                                                            <p>FJ0{{get_user($jouer->user_id_to) ? get_user($jouer->user_id_to)->id : null}}</p>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6 col-xl-6">
                                                            <p class="text-danger">({{$jouer->user_id_from_score}}) &nbsp;{{get_event_equip($jouer->user_id_from)}}</p>
                                                            <p>FJ0{{get_user($jouer->user_id_from) ? get_user($jouer->user_id_from)->id : null}}</p>
                                                        </div>
                                                    </div>
                                                    {{--                                        <p><a class="btn btn-secondary" href="#" role="button">profile &raquo;</a></p>--}}

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="final" role="tabpanel">
                                        <div class="row">
                                            @foreach($jouersfinal as $jouer)
                                                <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 alert alert-secondary m-3">
                                                    <img src="{{get_user($jouer->user_id_to) ? get_user($jouer->user_id_to)->avatar : null}}" class="bd-placeholder-img rounded-circle" width="70" height="70"> <span class="text-center pl-5">VS</span>
                                                    <img src="{{get_user($jouer->user_id_from) ? get_user($jouer->user_id_from)->avatar : null}}" class="bd-placeholder-img rounded-circle pull-right" width="70" height="70">
                                                    {{--                                            <h6>{{$jouer->name}}</h6>--}}
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6 col-xl-6">
                                                            <p class="text-danger">{{get_event_equip($jouer->user_id_to)}} &nbsp; ({{$jouer->user_id_to_score}})</p>
                                                            <p>FJ0{{get_user($jouer->user_id_to) ? get_user($jouer->user_id_to)->id : null}}</p>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6 col-xl-6">
                                                            <p class="text-danger">({{$jouer->user_id_from_score}}) &nbsp;{{get_event_equip($jouer->user_id_from)}}</p>
                                                            <p>FJ0{{get_user($jouer->user_id_from) ? get_user($jouer->user_id_from)->id : null}}</p>
                                                        </div>
                                                    </div>
                                                    {{--                                        <p><a class="btn btn-secondary" href="#" role="button">profile &raquo;</a></p>--}}
                                                    <span class="text-success">final (le 17/08/2019)</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <h4 class="m-text25 text-center col-md-12">
                                        Ouvrez votre compte via
                                    </h4>
                                </div>
                                <div class="col-md-6">
                                    <p>NB: Les prémiers à s'inscrire sont les plus favoris.</p>
{{--                                    <div class="size15 trans-0-4">--}}
{{--                                        <!-- Button -->--}}
{{--                                        <a href="redirect/facebook" class="col-sm-12"><button class="flex-c-m size2 bg-primary bo-rad-23 hov1 m-text13 trans-0-4" type="submit">--}}
{{--                                                <i class="fa fa-facebook-official text-md-center"> facebook</i>--}}
{{--                                            </button></a>--}}
{{--                                    </div>&nbsp;--}}
                                    <div class="size15 trans-0-4">
                                        <!-- Button -->
                                        <a href="redirect/google" class="col-sm-12"><button class="flex-c-m size2 bg-danger bo-rad-23 hov1 m-text13 trans-0-4" type="submit">
                                                <i class="fa fa-google text-md-center"> Google</i>
                                            </button></a>
                                    </div>&nbsp;
                                    <div class="size15 trans-0-4">
                                        <!-- Button -->
                                        <a href="redirect/github" class="col-sm-12 "><button style="background: grey" class="flex-c-m size2 p-l-2 bo-rad-23 hov1 m-text13 trans-0-4" type="submit">
                                                <i class="fa fa-github text-md-center"> Github</i>
                                            </button></a>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-md-6 no-gutters hidden-xs hidden-sm">
                                    <!-- Block3 -->
                                    <div class="block3">
                                        <div class="block3-txt p-t-14">
                                            <h4 class="p-b-7">
                                                <a href="https://www.primaconakry.com/" target="_blank" class="m-text11">
                                                    En partenariat avec <b style="color: #001f3f">Gamin Center.</b> Participez à la compétition <span class="text-primary">fifa19</span> à <span class="text-danger">Prima Center Conakry</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <a href="https://www.primaconakry.com/" target="_blank" class="block3-img dis-block hov-img-zoom">
                                            <img src="{{asset('images/gamin_center.png')}}" alt="IMG-BLOG"  class="rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="tab-pane fade" id="featured" role="tabpanel">
                    <div class="row">
                        @foreach(quelques_produits() as $produit)
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                        <img src="{{asset("storage/storage/$produit->avatar")}}" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <a href="{{route('dp', ['productName' => strtolower(trim(preg_replace('/\s+/', '', $produit->productName))) . 'spmobile' . $produit->id])}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
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

                <!--  -->
                <div class="tab-pane fade" id="sale" role="tabpanel">
                    <div class="row">
                        @foreach(quelques_produits() as $produit)
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                        <img src="{{asset("storage/storage/$produit->avatar")}}" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <a href="{{route('dp', ['productName' => strtolower(trim(preg_replace('/\s+/', '', $produit->productName))) . 'spmobile' . $produit->id])}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
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

                <!--  -->
                <div class="tab-pane fade" id="top-rate" role="tabpanel">
                    <div class="row">
                        @foreach(quelques_produits() as $produit)
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                        <img src="{{asset("storage/storage/$produit->avatar")}}" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <a href="{{route('dp', ['productName' => strtolower(trim(preg_replace('/\s+/', '', $produit->productName))) . 'spmobile' . $produit->id])}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
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
        </div>
    </div>
</section>


<!-- Banner video -->
<section class="parallax0 parallax100" style="background-image: url(images/fifa_event.jpg);">
    <div class="overlay0 p-t-190 p-b-200">
        <div class="flex-col-c-m p-l-15 p-r-15">
				<span class="m-text9 p-t-45 fs-20-sm">
					Tournois FIFA 19 à
				</span>

            <h4 class="l-text1 fs-35-sm text-danger">
                Prima Center Conakry
            </h4>

            <span class="btn-play s-text4 hov5 cs-pointer p-t-25" data-toggle="modal" data-target="#modal-video-01">
					<i class="fa fa-play" aria-hidden="true"></i>
					Play Video
				</span>
        </div>
    </div>
</section>

<section class="blog bgwhite p-t-94 p-b-65">
    <div class="container">
        <div class="sec-title p-b-52">
            <h3 class="m-text5 t-center">
                PS4 JOUEURS - TOP 3
            </h3>
        </div>

        <div class="row">
            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="#" class="block3-img dis-block hov-img-zoom">
                        <img src="https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-19/images/2019/07/nicolas99fc-ps4.jpg.adapt.crop16x9.1455w.jpg" alt="IMG-BLOG" height="200">
                    </a>

                    <div class="block3-txt p-t-14">
                        <h4 class="p-b-7">
                            <a href="#" class="m-text11">
                                FC Bâle 1893
                            </a>
                        </h4>

                        <span class="s-text6">1</span> <span class="s-text7"> Nicolas99FC</span>

                        <p class="s-text8 p-t-16">
                            Cet Argentin plein de sang-froid occupe la tête du classement PlayStation®4 depuis janvier. Favori de chaque compétition à laquelle il participe, Nicolas99FC cherchera à retrouver son meilleur niveau en vue de la FIFA eWorld Cup pour prouver à nouveau qu’il mérite son statut de meilleur joueur du monde sur PlayStation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="#" class="block3-img dis-block hov-img-zoom">
                        <img src="https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-19/images/2019/07/psvpinnaweb.jpg.adapt.1456w.jpg" alt="IMG-BLOG" height="200">
                    </a>

                    <div class="block3-txt p-t-14">
                        <h4 class="p-b-7">
                            <a href="#" class="m-text11">
                                PSV esports
                            </a>
                        </h4>

                        <span class="s-text6">2</span> <span class="s-text7"> PSV PINNA97</span>

                        <p class="s-text8 p-t-16">
                            Auteur d’un début de saison remarquable, PSV PINNA97 a pu rester dans le haut du classement mondial PlayStation avant de prendre un peu de recul dans la deuxième partie de saison. Ce joueur belge tentera d’affiner son jeu à Berlin pour rééditer sa performance lors de la FIFA eWorld Cup l’an dernier où il avait terminé à la deuxième place.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="#" class="block3-img dis-block hov-img-zoom">
                        <img src="https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-19/images/2019/07/nyc-chris-champ.jpg.adapt.1456w.jpg" alt="IMG-BLOG" height="200">
                    </a>

                    <div class="block3-txt p-t-14">
                        <h4 class="p-b-7">
                            <a href="#" class="m-text11">
                                New York City FC
                            </a>
                        </h4>

                        <span class="s-text6">3</span> <span class="s-text7"> NYC_Chris</span>

                        <p class="s-text8 p-t-16">
                            Après son triomphe lors de la toute première édition de l’eChampions League le mois dernier, NYC_Chris est l’un des compétiteurs les plus en forme sur les deux derniers mois. En pleine confiance, ce joueur d’eMLS aura à cœur de poursuivre sur sa lancée pour prouver qu’il a sa place au sein de l’élite sur Playstation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')