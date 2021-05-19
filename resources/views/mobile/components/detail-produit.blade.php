@include('mobile.partials.header')
@include('mobile.partials.nav')
@include('mobile.partials.sidebar')
<!-- Begin page content -->
    <main class="flex-shrink-0 main-container mb-5">        
        <div class="container-fluid h-300 py-2 position-relative overflow-hidden">
            <div class="background">
                <img src='{{asset("storage/storage/$produit->avatar")}}' class="img-thumbnail" alt="IMG-PRODUITS" width="100%">
                {{-- <a href="{{asset("storage/storage/$produit->avatar")}}" target="_blank">
                     <img src="{{asset("storage/storage/$produit->avatar")}}" class="img-thumbnail" alt="IMG-PRODUITS" height="200" width="100%">
                </a> --}}
            </div> 
        </div>
        <div class="container mb-4 top-100">
            <div class="card border-0 shadow-light mb-4">
                <div class="card-body position-relative">
                    <div class="top-right mt-2"><button class="btn btn-link text-danger p-0"><i class="material-icons text-danger vm">favorite</i></button></div>
                    <h4 class="text-default">{{  $produit->productName}}</h4>
                    <p class="mb-1">{{$produit->mtt1}} - {{$produit->mtt2}}</p>
                    <p class="text-mute small"><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span> 125 reviews, 25 Feedback </p>
                   
                    <div class="row mb-4">
                        <div class="col text-left">
                            <h4 class="text-success">{{$produit->mtt1}} - {{$produit->mtt2}}</h4>
                            <div class="input-group mt-2 text-center increasenumber">
                                <div class="input-group-prepend ">
                                    <button class="btn btn-sm btn-outline-default px-3 remove" type="button">-</button>
                                </div>
                                <input type="text" class="form-control form-control-sm text-center w-50px" placeholder="" value="2">
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-outline-default px-3 add" type="button">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto align-self-end"><button class="btn btn-sm btn-default"><i class="material-icons">shopping_basket</i> Add</button></div>
                    </div>
                    <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 achat">
                            Acheter
                        </button>
                    </div>
                    <ul class="nav nav-tabs nav-fill justift-content-center mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Review</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active was-validated " id="details" role="tabpanel" aria-labelledby="details-tab">
                            <h5 class="subtitle mb-3">Information du produit</h5>
                            <p class="text-muted ">
                                {{ $produit->description }}
                            </p>
                        </div>
                        {{-- <div class="tab-pane fade " id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div class="card mb-4">
                                <div class="card-header border-0">
                                    <p>"Best product item and taste very fast and excellent packaging I am loving it. Thats awesome set for packaging with sppon and fork."</p>
                                </div>
                                <div class="card-footer">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-2">
                                            <img src="assets/img/user3.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Johnson Johny</h6>
                                            <p class="text-mute small">
                                                Vennama, USA | <span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span> 5.0 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header border-0">
                                    <p>"Working with John is awesome and we have done several project together. He will surely surprise what outcome will be delivered."</p>
                                </div>
                                <div class="card-footer">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-2">
                                            <img src="assets/img/user5.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Maxi Artisty </h6>
                                            <p class="text-mute small">
                                                Vennama, USA | <span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span> 4.5 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body p-0">
                                    <textarea class="form-control border-0" rows="3" placeholder="Enter your feedback..."></textarea>
                                </div>
                                <div class="card-footer">
                                    <h5><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span><span class="text-warning icon_star"></span></h5>
                                </div>
                                <div class="card-footer">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-2">
                                            <img src="assets/img/user1.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">you</h6>
                                            <p class="text-mute small">Vennama, USA </p>
                                        </div>
                                        <button class="btn btn-44 btn-default" type="button"><i class="material-icons">send</i></button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
<!-- End of page content -->

@include('mobile.partials.footer')

