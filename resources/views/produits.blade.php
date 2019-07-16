@include('partials.header')
@if(Session::has('produits'))
    <?php $produits = session('produits') ?>
@endif
<?php $error = session('error') ?>

<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm" style="border-right: 3px solid #ccc;border-bottom: 1px solid #ccc;border-bottom-right-radius: 50px">
                    <h4 class="m-text14 p-b-7">
                        Categories
                    </h4>
                    <ul class="main_menu">
                        <li>
                            <a href="{{route('sp', ['categorie' => 'Tous'])}}" class="s-text13 {{$active == "Tous" ? 'text-white badge badge-danger' : ''}}" id="{{$active == "Tous" ? 'active' : ''}}">
                                <span class="size1 size1">&nbsp;Tous&nbsp;</span>
                            </a>
                        </li>
                        @foreach($categories as $categorie)
                        <li>
                            <a href="{{route('sp', ['categorie' => strtolower($categorie->categorieName)])}}" class="s-text13 {{strtoupper($active) == $categorie->categorieName ? 'text-white badge badge-danger' : ''}}" id="{{strtoupper($active) == $categorie->categorieName ? 'active' : ''}}">
                                <span class="size1 size1">&nbsp;{{$categorie->categorieName}}&nbsp;</span>
                            </a>
                            @if(count(get_categorie_famille($categorie->id)) > 1)
                            <ul class="sub_menu">
                                @foreach(get_categorie_famille($categorie->id) as $famille)
                                    <li><a href="{{route('famille', ['famille' => strtolower($famille)])}}">{{$famille}}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <div class="flex-sb-m flex-w p-b-35">
                    <div class="search-product pos-relative bo4 of-hidden col-md-6">
                        <form action="{{route('recherche')}}" method="post">
                            @csrf
                            <input class="s-text7 size6 p-l-23 p-r-50" id="recherche" type="text" name="recherche" placeholder="Rechercher Produits...">

                            <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    @if($error)
                        <div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
                            <i class="fa fa-eye-slash"></i> <span class="text-muted">Désolé rien ne correspond à <b class="text-danger">"{{$error}}"</b> dans notre sytème.</span><br>
                            <i class="fa fa-hand-o-down"></i> <span class="text-muted">Veuillez trouvez nos produits disponible.</span>
                        </div>
                    @endif
                    @foreach($produits as $produit)
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <img src='{{asset("images/storage/$produit->avatar")}}' class="img-rounded img-responsive" alt="IMG-PRODUITS" width="300" height="300">

                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <a href="{{route('dp', ['productName' => strtolower(trim(preg_replace('/\s+/', '', $produit->productName))) . 'spmobile' . $produit->id])}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="color: #fff">
                                            PLUS DE DETAIL
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="block2-txt p-t-20">
                                <b><a href="{{route('dp', ['productName' => strtolower(trim(preg_replace('/\s+/', '', $produit->productName))) . 'spmobile' . $produit->id])}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$produit->productName}}
                                </a></b>
                                @if($produit->mtt1)
                                <span class="block2-oldprice m-text7 p-r-5">
                                {{$produit->mtt1}}
                                </span>
                                @endif

                                @if($produit->mtt2)
                                <span class="block2-newprice m-text8 p-r-5">
                                {{$produit->mtt2}}
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="pagination flex-m flex-w p-t-26">
                    @if($produits->previousPageUrl())
                        <a href="{{$produits->previousPageUrl()}}" class="item-pagination flex-c-m trans-0-4 active-pagination" title="Moins"><i class="fa fa-chevron-up"></i></a>
                    @endif
                    @if($produits->hasMorePages())
                        <a href="{{$produits->nextPageUrl()}}" class="item-pagination flex-c-m trans-0-4 active-pagination" title="Plus"><i class="fa fa-chevron-down"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.footer')
