@include('mobile.partials.header')

{{--  Fixed navbar  --}}
@include('mobile.partials.nav')
{{-- Fixed navbar ends  --}}

{{-- < sidebar  --}}
@include('mobile.partials.sidebar')
{{--  sidebar ends  --}}

{{--  Begin page content  --}}
<main class="flex-shrink-0 main-container pb-0">
    <!-- page content goes here -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            @include('mobile.layouts.categorie')
            @include('mobile.layouts.search')
{{--            @include('mobile.layouts.offers')--}}
            <div class="container">
                <h6 class="page-subtitle">Produits Populaires <a href="#" class="btn btn-sm float-right px-0">Voir Plus</a></h6>
                <div class="row article-feed">
                    @foreach($produits as $produit)
                        @if(Storage::disk('public')->has($produit->avatar))
                        <div class="col-6 col-md-3 article">
                            <div class="card border-0 shadow-light text-center mb-4">
                                <div class="card-body position-relative" style="padding: 0px">
    {{--                                <div class="top-right mt-2"><button class="btn btn-link text-danger p-0"><i class="material-icons text-danger vm">favorite</i></button></div>--}}
                                    <div class="h-100px position-relative overflow-hidden" style="height: 170px;border-radius: 10px">
{{--                                        <div class="background background-h-100">--}}
                                            <a href="{{route('dp', ['slug' => strtolower(trim(preg_replace('/\s+/', '', $produit->slug)))])}}">
                                                <img src="{{asset("storage/storage/$produit->avatar")}}" alt="" width="100%">
                                            </a>
{{--                                        </div>--}}
                                    </div>
                                    <a href="{{route('dp', ['slug' => strtolower(trim(preg_replace('/\s+/', '', $produit->slug)))])}}"><p class="small pt-2">{{$produit->productName}}</p></a>
                                    <div class="row p-1">
                                        <div class="col text-left">
                                            <p class="text-success my-0 text-bold">{{$produit->mtt2}}</p>
                                        </div>
                                        <div class="col-auto"><button class="btn btn-sm btn-link text-default p-0"><i class="material-icons">shopping_basket</i></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{$produits->links('mobile.layouts.loader')}}
                </div>

            </div>
        </div>
        @include('mobile.components.menu')
        @include('mobile.components.cart')
        @include('mobile.components.favorite')
        @include('mobile.components.profile')
    </div>

{{--    <div class="toast bottom-right position-fixed mb-5" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">--}}
{{--        <div class="toast-header">--}}
{{--            <div class="avatar avatar-20 mr-2">--}}
{{--                <div class="background">--}}
{{--                    <img src="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <strong class="mr-auto">Maxartkiller</strong>--}}
{{--            <small>Just now</small>--}}
{{--            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">--}}
{{--                <span aria-hidden="true">&times;</span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--        <div class="toast-body">--}}
{{--            Hello, Welcome to our website.--}}
{{--        </div>--}}
{{--    </div>--}}
</main>
<!-- End of page content -->

<br><br><br><br>

@include('mobile.layouts.bootombar')


{{-- scroll to top button  --}}
<button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>
{{--  scroll to top button ends --}}

{{--@include('mobile.layouts.colorsettings')--}}
@include('mobile.partials.footer')