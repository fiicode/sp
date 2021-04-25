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
                    <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Compétition FIFA 19 | </a>
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
                        <div class="col-md-6 p-b-30">
                            <div class="row">
                                <h4 class="m-text26 p-b-10 col-md-12">
                                    Mes informations
                                </h4><br>
                                <div class="img-rounded w-96 pl-2">
                                    <img src="{{Auth::user()->avatar}}" alt="" class="rounded-circle" width="150" height="150">
                                </div>
                                <div class="m-text26 pl-5">
                                    <!-- Button -->
                                    &nbsp;<h3 class="text-danger" style="font-weight: bold">{{Auth::user()->name}}</h3><br>
                                    <h6>{{Auth::user()->email}}</h6>
                                </div>&nbsp;
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-6 p-b-30">
                            <h5 class="m-text26 p-b-10 col-md-12">
                                Fourmulaire de participation <i class="fa fa-gamepad"></i>
                            </h5>

                            <div class="bo9 w-size16 col-md-12 p-l-10 p-r-40 p-t-10 p-b-10 p-lr-15-sm">
                                <form class="leave-comment" method="POST" action="{{route('new_member_fifa') }}" aria-label="{{ __('Login') }}">
                                    @csrf
                                    <!--  -->
                                    <div class="flex-w flex-sb-m p-b-12">
                                        <span class="s-text18 w-size19 w-full-sm text-success">
                                            Trophée:
                                        </span>

                                        <span class="m-text21 w-size20 w-full-sm">
                                            @if(Auth::user()->confirm_competit)
                                            <i class="fa fa-trophy text-success"></i> &nbsp;<i class="fa fa-gamepad text-success"></i> <i class="fa fa-futbol-o text-success"></i>
                                            @else
                                                <i class="fa fa-trophy"></i> &nbsp;<i class="fa fa-gamepad"></i> <i class="fa fa-futbol-o"></i>
                                            @endif
                                        </span>
                                    </div>
                                    <div class="flex-w flex-sb-m p-b-12">
                                        <span class="s-text18 w-size19 w-full-sm">
                                            Status:
                                        </span>

                                        <span class="m-text18 w-size20 w-full-sm">
                                            @if(Auth::user()->confirm_competit)
                                                <i class="fa fa-check-square-o text-success"></i>  <strong class="text-success">Vous êtes sélectionnés</strong>
                                            @else
                                            <i class="fa fa-spinner"></i>  Examination en cours...
                                            @endif
                                        </span>
                                    </div>

                                    <!--  -->
                                    <div class="flex-w flex-sb bo10 p-t-10 p-b-1">
                                         <span class="m-text22 w-size19 w-full-sm">
                                            Profession <i class="fa fa-suitcase"></i>:
                                         </span>
                                        @if(Auth::user()->confirm_competit && $user_info_cmpt)
                                            <span class="m-text18 w-size20 w-full-sm">
                                                {{$user_info_cmpt->profession}}
                                            </span>
                                        @else
                                            <div class="w-size20 w-full-sm">
                                                <div class="size13 has-error bo4 m-b-22">
                                                    <input class="sizefull s-text7 p-l-15 p-r-15 has-danger" type="text" value="{{$user_info_cmpt ? $user_info_cmpt->profession : old('profession')}}" name="profession">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex-w flex-sb bo10 p-t-10 p-b-1">
                                         <span class="m-text22 w-size19 w-full-sm">
                                            Âge <i class="fa fa-user"></i>:
                                         </span>
                                        @if(Auth::user()->confirm_competit && $user_info_cmpt)
                                            <span class="m-text18 w-size20 w-full-sm">
                                                {{$user_info_cmpt->age}}
                                            </span>
                                        @else
                                            <div class="w-size20 w-full-sm">
                                                <div class="size13 has-error bo4 m-b-22">
                                                    <input class="sizefull s-text7 p-l-15 p-r-15 has-danger" type="text" value="{{$user_info_cmpt ? $user_info_cmpt->age : old('age')}}" name="age" placeholder="+17 ans ">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex-w flex-sb bo10 p-t-10 p-b-1">
                                        <span class="m-text22 w-size19 w-full-sm">
                                            Numéro <i class="fa fa-phone"></i> :
                                        </span>
                                        @if(Auth::user()->confirm_competit && $user_info_cmpt)
                                            <span class="m-text18 w-size20 w-full-sm">
                                            {{$user_info_cmpt->numero}}
                                        </span>
                                        @else
                                        <div class="w-size20 w-full-sm">
                                            <div class="size13 bo4 m-b-22">
                                                <input class="sizefull s-text7 p-l-15 p-r-15" type="text" value="{{$user_info_cmpt ? $user_info_cmpt->numero : null}}" name="numero" placeholder="666......">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="flex-w flex-sb bo10 p-t-10 p-b-1">
                                        <span class="m-text22 w-size19 w-full-sm">
                                            Quartier <i class="fa fa-map-signs"></i>:
                                        </span>
                                        @if(Auth::user()->confirm_competit && $user_info_cmpt)
                                            <span class="m-text18 w-size20 w-full-sm">
                                            {{$user_info_cmpt->quartier}}
                                        </span>
                                        @else
                                        <div class="w-size20 w-full-sm">
                                            <div class="size13 bo4 m-b-15">
                                                <input class="sizefull s-text7 p-l-15 p-r-15" type="text" value="{{$user_info_cmpt ? $user_info_cmpt->quartier : null}}" name="quartier" placeholder="Kipé / Koloma">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="flex-w flex-sb bo10 p-t-15 p-b-10">
                                        <span class="m-text22 w-size19 w-full-sm">
                                            ÉQUIPE <i class="fa fa-futbol-o"></i>:
                                        </span>
                                        @if(Auth::user()->confirm_competit && $user_info_cmpt)
                                            <span class="m-text18 w-size20 w-full-sm">
                                            {{$user_info_cmpt->equipe}}
                                             </span>
                                        @else
                                        <div class="rs2-select2 col-md-12 rs3-select2 rs4-select2 bo4 of-hidden w-size27 m-t-5 m-b-5">
                                            <select class="selection-2" name="equipe">
                                                <option disabled>ÉQUIPES </option>
                                                @foreach($clubs as $club)
                                                    <option value="{{$club->id}}" {{$user_info_cmpt ? $user_info_cmpt->equipe == $club->club ? 'selected' : '' : ''}}>{{$club->club}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @endif
                                    </div>
                                    @if(Auth::user()->confirm_competit && $user_info_cmpt)
                                        <span class="m-text18 w-size20 w-full-sm">
                                            <i class="fa fa-group text-success"></i>  <strong class="text-success">Préparez vous au choc</strong>
                                        </span>
                                    @else
                                        <div class="size15 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 m-t-7" type="submit">
                                                {{$user_info_cmpt ? 'mettre à jours' : 'S\'inscrire'}} &nbsp; <i class="fa fa-gamepad"></i> &nbsp; {{$user_info_cmpt?'('.$coumpt.')':''}}
                                            </button>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  -->
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

            <h4 class="l-text1 fs-35-sm text-warning">
                Prima Center Conakry
            </h4>

            <span class="btn-play s-text4 hov5 cs-pointer p-t-25" data-toggle="modal" data-target="#modal-video-01">
					<i class="fa fa-play" aria-hidden="true"></i>
					Play Video
				</span>
        </div>
    </div>
</section>

<!-- Blog -->
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
                    <a href="sign/event/fifa19#competition" class="block3-img dis-block hov-img-zoom">
                        <img src="https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-19/images/2019/07/nicolas99fc-ps4.jpg.adapt.crop16x9.1455w.jpg" alt="IMG-BLOG" height="230">
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
                    <a href="sign/event/fifa19#competition" class="block3-img dis-block hov-img-zoom">
                        <img src="https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-19/images/2019/07/psvpinnaweb.jpg.adapt.1456w.jpg" alt="IMG-BLOG" height="230">
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
                    <a href="sign/event/fifa19#competition" class="block3-img dis-block hov-img-zoom">
                        <img src="https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-19/images/2019/07/nyc-chris-champ.jpg.adapt.1456w.jpg" alt="IMG-BLOG" height="230">
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