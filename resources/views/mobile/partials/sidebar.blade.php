{{--  sidebar --}}
<div class="sidebar">
    <div class="row no-gutters">
        <div class="col-auto align-self-center">
            <figure class="avatar avatar-50">
                <img src="{{asset('spmobile.png')}}" alt="Sp mobile">
            </figure>
        </div>
        <div class="col pl-3 align-self-center">
            <p class="my-0">SP mobile</p>
            <p class="text-mute my-0 small">Prima Center</p>
        </div>
        <div class="col-auto align-self-center">
            <a href="#" class="btn btn-link text-white p-2"><i class="material-icons">power_settings_new</i></a>
        </div>
    </div>
    <div class="list-group main-menu">
        <a href="{{ url('/') }}" class="list-group-item list-group-item-action active"><i class="material-icons">home</i>Accueil</a>
        <a  href="#search" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false"  class="list-group-item list-group-item-action" ><i class="material-icons">view_day</i>Menu</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">shopping_cart</i>Commandes</a><br><br><br>
        <div class="divider my-5"></div><div class="divider my-5"></div><div class="divider my-5"></div><div class="divider my-5"></div>
        <hr class="mt-5 mb-3">
        <a href="{{route('about')}}" class="list-group-item list-group-item-action"><i class="material-icons">business</i>A propos de nous</a>
    </div>
</div>
{{-- sidebar ends  --}}