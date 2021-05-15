<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="position-relative overflow-hidden h-200">
        <div class="background">
            <img src="" alt="">
        </div>
    </div>
    <div class="container top-100 text-center mb-4">
        <figure class="avatar avatar-180 rounded-circle shadow  mx-auto bg-white">
            <img src="{{asset('spmobile.png')}}" alt="">
        </figure>
    </div>
    <div class="container-fluid text-center mb-4">
        <h4>SP mobile</h4>
        <p class="text-mute">Conakry, Prima Center.</p>
    </div>
    <div class="container mb-4">
        <ul class="nav nav-pills nav-fill justift-content-center mb-4" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="account-tab" data-toggle="tab" href="{{route('login') }}" role="tab" aria-controls="account" aria-selected="true">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="myorders-tab" data-toggle="tab" href="#myorders" role="tab" aria-controls="myorders" aria-selected="false">Commandes</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">

            </div>
            <div class="tab-pane fade show active " id="myorders" role="tabpanel" aria-labelledby="myorders-tab">
                <div class="row">
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
            </div>
        </div>
    </div>
</div>