@include('partials.header')

<div class="container pb-2">
    <div class="row rounded-sm">
        <table class="table size1">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">avatar</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Profes.</th>
                    <th scope="col">Age</th>
                    <th scope="col">Club</th>
                    <th scope="col">Quart.</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($jouers as $jouer)
                @if(get_event_phone($jouer->id))
                    <tr>
                        <th scope="row">FJ0{{$jouer->id}}</th>
                        <th><img src="{{$jouer->avatar}}" class="bd-placeholder-img rounded-circle" width="70" height="70"></th>
                        <td>{{$jouer->name}}</td>
                        <td>{{get_event_phone($jouer->id)}}</td>
                        <td>{{get_event_profe($jouer->id)}}</td>
                        <td>{{get_event_age($jouer->id)}}</td>
                        <td>{{get_event_equip($jouer->id)}}</td>
                        <td>{{get_event_quar($jouer->id)}}</td>
                        <td>
                            @if($jouer->confirm_competit)
                                <span class="m-text19 w-size20 w-full-sm text-success">
                                    Confirmé  
                                </span>
                            @else
                                <button class="btn btn-primary">
                                    Confirmer
                                </button>
                            @endif
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('partials.footer')