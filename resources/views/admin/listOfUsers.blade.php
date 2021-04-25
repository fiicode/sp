@extends('layouts.app')

@section('styles')
@stop
@section('content')
    <div class="row">
        <div class="row hidden-xs hidden-sm">
          <div class="col-md-4">
            <a href="{{url('home')}}" class="btn btn-embossed btn-info" title="Home" data-placement="bottom" data-toggle="tooltip"><span class="fui-windows-8"></span> Dashboard</a>
          </div>
          <span class="fui-user text-red" title="Page des Users" data-placement="bottom" data-toggle="tooltip"></span>
          <div class="pull-right col-md-6">
            <a href="{{route('categories.index')}}" class="btn btn-danger" title="Afficher les catégories" data-placement="bottom" data-toggle="tooltip">Categories List <i class="fa fa-arrow-circle-right"></i></a>
            <a href="{{route('filter_produit', 'all')}}" class="btn btn-success" title="Afficher les produits" data-placement="bottom" data-toggle="tooltip">Products List <i class="fa fa-arrow-circle-right"></i></a>
              <a href="{{route('image', 'all')}}" class="btn btn-success" title="Afficher les Categories" data-placement="bottom" data-toggle="tooltip">Image aux produits <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="box" style="font-size: 16px">
            <div class="box-header">
              <h3 class="box-title"><span class="fui-user text-blue"></span> All Users</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    {{--<th class="hidden-xs hidden-sm">Image</th>--}}
                    <th>Name</th>
                    <th class="hidden-xs hidden-sm">Username</th>
                    <th>email</th>
                    <th class="hidden-xs hidden-sm">Created at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    {{--<td class="hidden-xs hidden-sm">--}}
                      {{--<img class="profile-user-img img-responsive img-circle" src="images/user.png" alt="User profile picture" height="10px" width="50px">--}}
                    {{--</td>--}}
                    <td>{{$user->name}}</td>
                    <td class="hidden-xs hidden-sm" >{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td class="hidden-xs hidden-sm">{{$user->created_at->format('d M Y')}}</td>
                    <td>
                      @if(Auth::user()->id == $user->id || Auth::user()->id == 1)
                        <a class="btn btn-primary btn-xs">update</a>
                        @if(Auth::user()->id == 1)
                          <a href="{{route('users.destroy', $user->id)}}" class="btn btn-danger btn-xs" data-method="DELETE" data-confirm="Etes-vous sûr"><i class="fa fa-trash-o"></i> Delete</a>
                        @endif
                      @endif
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/scriptdel.js"></script>
    <script type="text/javascript">
      $(function () {
        $('#example1').DataTable()
      })
    </script>
@stop
