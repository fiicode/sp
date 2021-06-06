<footer class="bg6 p-t-45 p-b-25 p-l-45 p-r-45">
    <div class="flex-w p-b-5">
        <div class="col-md-4">
            <h4 class="s-text12 p-b-30 text-danger">
                ENTRER EN CONTACT
            </h4>
            <div>
                <p class="s-text7 w-size27" id="contact">
                    Des questions? Appelez-nous au: <br>
                    <i class="fa fa-phone"></i> (+224) 624 63 45 21 / 664 50 90 91 <br>
                    <i class="fa fa-email"></i> service@spmobilestore.com
                </p>
                <div class="flex-m p-t-30">
                    <a href="https://www.facebook.com/SPmobole/" class="fs-18 color1 p-r-20 fa fa-facebook-official text-primary"></a>
                    <a href="https://www.linkedin.com/SPmobole/" class="fs-18 color1 p-r-20 fa fa-linkedin text-primary"></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h4 class="s-text12 p-b-30 text-danger">
                Categories
            </h4>
            <ul>
                @foreach(get_categorie() as $categorie)
                    <li><a href="{{route('sp', ['categorie' => $categorie->categorieName])}}">{{$categorie->categorieName}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <h4 class="s-text12 p-b-30 text-danger">
                Abonné
            </h4>
            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="email" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>
                <div class="w-size2 p-t-20">
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Souscrire
                    </button>
                </div>

            </form>
        </div>
    </div>
    <hr>
    <div class="t-center p-l-15 p-r-15">
        <div class="t-center s-text8 p-t-10">
            Tous les droits sont réservés. | <a href="{{url('/')}}">SP-Mobile</a>.
            <a href="{{route('about')}}" class="pull-left">Qui sommes-nous ?</a>
            <a href="{{route('legal')}}" class="pull-right">Politique de confidentialité.</a>
            <p>Copyright © <b class="text-danger">{{date('Y')}}</b>.</p>
        </div>
    </div>
</footer>
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog" role="document" data-dismiss="modal">
        <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

        <div class="wrap-video-mo-01">
            <div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
            <div class="video-mo-01">
                <iframe src="https://www.youtube.com/embed/qTz8ZhNrEDA?rel=0&amp;showinfo=0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<script type="text/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slick-custom.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/lightbox2/js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.autocomplete.min.js')}}"></script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "est ajouté au panier!", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "est ajouté à la liste de souhaits!", "success");
        });
    });
    $('.js-show-header-dropdown').on('click', function(){
        swal("Cette option est en cours de développement!")
    });
    $('.achat').on('click', function(){
        swal("Cette option est en cours de développement!","Contactez-nous au (+224) 626 41 20 41/ 664 50 90 91 ")
    });
    // {{--var produit = null;--}}
    // {{--var field = $('#recherche');--}}
    // {{--field.keyup(function() {--}}
    //     {{--if(this.value.length > 1) {--}}
    //         {{--$.ajax({--}}
    //             {{--method: 'POST',--}}
    //             {{--url: '{{route('recherche')}}',--}}
    //             {{--data: {--}}
    //                 {{--_token: '{{ Session::token() }}',--}}
    //                 {{--recherche: this.value--}}
    //             {{--}--}}
    //         {{--}).done(function (msg) {--}}
    //             {{--produit = msg['recherche'];--}}
    //         {{--});--}}
    //         {{--field.autocomplete({--}}
    //             {{--lookup: produit,--}}
    //             {{--transformResult: function(response) {--}}
    //                 {{--return {--}}
    //                     {{--suggestions: $.map(response.myData, function(dataItem) {--}}
    //                         {{--return { value: dataItem.valueField, data: dataItem.dataField };--}}
    //                     {{--})--}}
    //                 {{--};--}}
    //             {{--}--}}
    //         {{--});--}}
    //     {{--}--}}
    // {{--});--}}
</script>
{{--<script>--}}
{{--    mapboxgl.accessToken = 'pk.eyJ1IjoiYmFoYWJvdWJhY2tyIiwiYSI6ImNqeWVzM2JjeTE0d3ozbW56djJobnl2MHkifQ.A-IEuRQkmjdeX2X1GJglQA';--}}
{{--    var map = new mapboxgl.Map({--}}
{{--        container: 'map',--}}
{{--        style: 'mapbox://styles/mapbox/light-v10',--}}
{{--        center: [-13.638943, 9.603245],--}}
{{--        zoom: 16.10,--}}
{{--        pitch: 40,--}}
{{--        bearing: 20,--}}
{{--        antialias: true--}}
{{--    });--}}

{{--    map.on('load', function() {--}}
{{--        map.addLayer({--}}
{{--            'id': 'room-extrusion',--}}
{{--            'type': 'fill-extrusion',--}}
{{--            'source': {--}}
{{--// GeoJSON Data source used in vector tiles, documented at--}}
{{--// https://gist.github.com/ryanbaumann/a7d970386ce59d11c16278b90dde094d--}}
{{--                'type': 'geojson',--}}
{{--                'data': 'https://docs.mapbox.com/mapbox-gl-js/assets/indoor-3d-map.geojson'--}}
{{--            },--}}
{{--            'paint': {--}}
{{--// See the Mapbox Style Specification for details on data expressions.--}}
{{--// https://docs.mapbox.com/mapbox-gl-js/style-spec/#expressions--}}

{{--// Get the fill-extrusion-color from the source 'color' property.--}}
{{--                'fill-extrusion-color': ['get', 'color'],--}}

{{--// Get fill-extrusion-height from the source 'height' property.--}}
{{--                'fill-extrusion-height': ['get', 'height'],--}}

{{--// Get fill-extrusion-base from the source 'base_height' property.--}}
{{--                'fill-extrusion-base': ['get', 'base_height'],--}}

{{--// Make extrusions slightly opaque for see through indoor walls.--}}
{{--                'fill-extrusion-opacity': 0.5--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
<script type="text/javascript" src="{{asset('vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });

    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect2')
    });
</script>
<script src="js/sweetalert.min.js"></script>
<script type="text/javascript">
    @if(\Illuminate\Support\Facades\Session::has('success'))
    swal({
        title: "{{\Illuminate\Support\Facades\Session::get('success')}}!",
        text: "NB: vôtre chance depend des vos infos.",
        imageUrl: "images/thumbs-up.jpg"
    });
    @endif
    $(function () {
        $('[data-toggle=tooltip]').tooltip();
    });
</script>

<script src="{{asset('js/main.js')}}"></script>

</body>
</html>