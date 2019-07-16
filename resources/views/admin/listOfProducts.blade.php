@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="css/dropzone.min.css">
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
                <a href="{{route('categories.index')}}" class="btn btn-success" title="Afficher les Categories" data-placement="bottom" data-toggle="tooltip">Categories List <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="box" style="font-size: 13px">
                <div class="box-header box-primary">
                    <h3 class="box-title">Produits</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="produits" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="col-md-1">ID</th>
                            <th class="col-md-2">Nom</th>
                            <th class="col-md-2">Description</th>
                            <th class="col-md-1">Categorie</th>
                            <th class="col-md-1">MMini.</th>
                            <th class="col-md-1">MMax.</th>
                            <th class="col-md-1">Update</th>
                            <th class="col-md-1">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr title=" User add: {{$product->user->username}} , created at : {{$product->created_at->format('d M Y')}}, updated at: {{$product->updated_at->format('d M Y')}}" data-placement="bottom" data-toggle="tooltip">
                                <td class="col-md-1">{{$product->id}}</td>
                                <form action="{{route('products.update', ['id' => $product->id])}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('PATCH')}}
                                    <td class="col-md-2">
                                        <div class="form-group {{$errors->has('productName') ? 'has-error' : ''}}">
                                            <input class="form-control" id="navbarInput-01" type="text" value="{{$product->productName}}" placeholder="Categorie Name" name="productName">
                                        </div>
                                    </td>
                                    <td class="col-md-2">
                                        <div class="form-group{{$errors->has('description') ? ' has-error' : ''}}">
                                            <textarea class="form-control" placeholder="Description" name="description">{{$product->description}}</textarea>
                                        </div>
                                    </td>
                                    <td class="col-md-1">
                                        <div class="form-group{{$errors->has('categorie') ? ' has-error' : ''}}">
                                            <select class="form-control" name="categorie">
                                                @foreach($categories as $val)
                                                    <option {{ $product->categorie['categorieName'] == $val->categorieName ? 'selected' : ''}}>{{$val->categorieName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td class="col-md-1">
                                        <div class="form-group {{$errors->has('mtt1') ? 'has-error' : ''}}">
                                            <input class="form-control" id="navbarInput-01" type="text" value="{{$product->mtt1}}" placeholder="Montant Haut" name="mtt1">
                                        </div>
                                    </td>
                                    <td class="col-md-1">
                                        <div class="form-group {{$errors->has('mtt2') ? 'has-error' : ''}}">
                                            <input class="form-control" id="navbarInput-01" type="text" value="{{$product->mtt2}}" placeholder="Montant Bas" name="mtt2">
                                        </div>
                                    </td>
                                    <td class="col-md-1">
                                        <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-save"></i></button>
                                    </td>
                                </form>
                                <td class="col-md-1">
                                    <a href="{{route('products.destroy', ['id' => $product->id])}}" class="btn btn-danger btn-xs" data-method="DELETE" data-confirm="Etes-vous sûr"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="box" style="font-size: 13px">
                <div class="box-header box-primary">
                    <h3 class="box-title">Images</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="images" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Img1</th>
                            <th>Image2</th>
                            <th>Image3</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr title=" User add: {{$product->user->username}} , created at : {{$product->created_at->format('d M Y')}}, updated at: {{$product->updated_at->format('d M Y')}}" data-placement="bottom" data-toggle="tooltip">
                                <td>{{$product->id}}</td>
                                <td>{{$product->productName}}</td>
                                <td>
                                    <form action="{{route('uploadImage.update', ['id' => $product->id])}}" class="dropzone" method="post">
                                        {{csrf_field()}}
                                        {{method_field('PATCH')}}
                                        <input type="hidden" name="avatarNumber" value="1">
                                        <img src="{{asset('images/storage/' . $product->avatar)}}" alt="" class="img-rounded img-responsive" height="100" width="250">
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('uploadImage.update', ['id' => $product->id])}}" class="dropzone" method="post">
                                        {{csrf_field()}}
                                        {{method_field('PATCH')}}
                                        <input type="hidden" name="avatarNumber" value="2">
                                        <img src="{{asset('images/storage/' . $product->avatar2)}}" alt="" class="img-rounded img-responsive" height="100" width="250">
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('uploadImage.update', ['id' => $product->id])}}" class="dropzone" method="post">
                                        {{csrf_field()}}
                                        {{method_field('PATCH')}}
                                        <input type="hidden" name="avatarNumber" value="3">
                                        <img src="{{asset('images/storage/' . $product->avatar3)}}" alt="" class="img-rounded img-responsive" height="100" width="250">
                                    </form>
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
    <script src="js/dropzone.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#produits').DataTable();
            $('#images').DataTable();
        })
    </script>
@stop