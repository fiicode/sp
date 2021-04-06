<div class="tab-pane fade" id="favorite" role="tabpanel" aria-labelledby="favorite-tab">
    <div class="container">
        <div class="row">
            <div class="centered">
                <h5 class="page-subtitle">Favoris</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row article-feed-favo">
            @foreach($favo as $produit)
                @if(Storage::disk('public')->has($produit->avatar))
                    <div class="col-6 col-md-3 article-favo">
                        <div class="card border-0 shadow-light text-center mb-4">
                            <div class="card-body position-relative" style="padding: 0px">
                                {{--                                <div class="top-right mt-2"><button class="btn btn-link text-danger p-0"><i class="material-icons text-danger vm">favorite</i></button></div>--}}
                                <div class="h-100px position-relative overflow-hidden" style="height: 170px;border-radius: 10px">
                                    {{--                                        <div class="background background-h-100">--}}
                                    <img src="{{asset("storage/storage/$produit->avatar")}}" alt="" width="100%">
                                    {{--                                        </div>--}}
                                </div>
                                <a href=""><p class="small pt-2">{{$produit->productName}}</p></a>
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
        <div class="row">
            {{$produits->links('mobile.layouts.load-favo')}}
        </div>
    </div>

</div>