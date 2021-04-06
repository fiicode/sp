<div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
    <div class="container my-4">
        <h5 class="page-subtitle">Que cherchez-vous ?<br>
            <span class="text-mute small mt-2">Rechercher maintenant</span>
        </h5>
        <div class="row mt-4">
            <div class="col">
                <input type="text" class="form-control shadow-light border-0" placeholder="Rechercher un produit...">
            </div>
            <div class="col-auto">
                <button class="btn btn-default default-shadow btn-40 collapsed" data-toggle="collapse" data-target="#filtercollapse" aria-expanded="false"><i class="material-icons">filter_list</i></button>
            </div>
        </div>
    </div>
    <div class="container mb-4 collapse show" id="filtercollapse">
        <button class="btn mb-2 btn-default">Tous</button>
        <button class="btn mb-2 btn-outline-default">Pochettes</button>
        <button class="btn mb-2 btn-outline-default">Téléphone</button>
        <button class="btn mb-2 btn-outline-default">Montres</button>
        <button class="btn mb-2 btn-outline-default">Jeux</button>
        <button class="btn mb-2 btn-outline-default">Lunettes</button>
        <button class="btn mb-2 btn-outline-default">Sacs</button>

{{--        <div class="row mt-4">--}}
{{--            <div class="col">--}}
{{--                <label class="text-mute small">From Price</label>--}}
{{--                <input type="text" class="form-control" placeholder="From Price" value="0">--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <label class="text-mute small">To Price</label>--}}
{{--                <input type="text" class="form-control" placeholder="To Price" value="500">--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row mt-4">
{{--            <div class="col">--}}
{{--                <label class="text-mute small">City</label>--}}
{{--                <input type="text" class="form-control" placeholder="Enter City">--}}
{{--            </div>--}}
            <div class="col">
                <label class="text-mute small">Boutique</label>
                <select class="form-control">
                    <option>Prima Center</option>
                    <option>En ville</option>
                    <option>Madina</option>
                </select>
            </div>
        </div>
    </div>
    <div class="container mb-4">
{{--        <h6 class="page-subtitle">Recent Items</h6>--}}
        <div class="row article-feed-menu">
            @foreach($menu as $produit)
                @if(Storage::disk('public')->has($produit->avatar))
                    <div class="col-6 col-md-3 article-menu">
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
            {{$produits->links('mobile.layouts.load-menu')}}
        </div>
    </div>
</div>