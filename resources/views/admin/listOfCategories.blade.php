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
            <a href="{{route('users.index')}}" class="btn btn-danger" title="Afficher les utilisateurs" data-placement="bottom" data-toggle="tooltip">Users List <i class="fa fa-arrow-circle-right"></i></a>
            <a href="{{route('products.index')}}" class="btn btn-success" title="Afficher les produits" data-placement="bottom" data-toggle="tooltip">Products List <i class="fa fa-arrow-circle-right"></i></a>
            <a href="{{route('uploadImage.index')}}" class="btn btn-success" title="Afficher les Categories" data-placement="bottom" data-toggle="tooltip">Image aux produits <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="box" style="font-size: 16px">
            <div class="box-header box-primary">
              <h3 class="box-title">All categories</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>categorie Name <span class="fui-new" title="Modifier le categorie (Champ)." data-placement="bottom" data-toggle="tooltip"></span></th>
                    <th>User Add</th>
                    <th class="hidden-xs hidden-sm">Created at</th>
                    <th class="hidden-xs hidden-sm">Updated at</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($categories as $categorie)
                    <tr>
                        <form action="{{route('categories.update', ['id' => $categorie->id])}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                        <td>{{$categorie->id}}</td>
                        <td>
                          <div class="form-group {{$errors->has('categorieName') ? 'has-error' : ''}}">
                            <input class="form-control" id="navbarInput-01" type="text" value="{{$categorie->categorieName}}" placeholder="Categorie Name" name="categorieName">
                          </div>
                        </td>
                        <td>{{$categorie->user->username}}</td>
                        <td class="hidden-xs hidden-sm">{{$categorie->created_at->format('d M Y')}}</td>
                        <td class="hidden-xs hidden-sm">{{$categorie->updated_at->format('d M Y')}}</td>
                        <td>
                          <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-save"></i> update</button>
                        </td>
                      </form>
                      <td>
                        <a href="{{route('categories.destroy', ['id' => $categorie->id])}}" class="btn btn-danger btn-xs" data-method="DELETE" data-confirm="Etes-vous sûr"><i class="fa fa-trash-o"></i> Delete</a>
                      </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
        <!-- /.modal -->
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