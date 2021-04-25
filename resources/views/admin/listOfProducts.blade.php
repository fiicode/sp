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
                <a href="{{route('image', 'all')}}" class="btn btn-success" title="Afficher les Categories" data-placement="bottom" data-toggle="tooltip">Image aux produits <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('search_produit.store') }}" method="POST" class="form-inline">
                    @csrf
                   <div class="form-group {{$errors->has('search_produit') ? ' has-error' : ''}}">
                        <input type="text" name="search_produit" class="form-control" id="search_produit" placeholder="Search" title="Rechercher dans la Base de données" data-placement="bottom" data-toggle="tooltip">
                        @if($errors->has('search_produit'))
                            <span class="help-block">
                                <strong>{{$errors->first('search_produit')}}</strong>
                            </span>
                        @endif 
                    </div>
                    <button type="submit" class="btn btn-primary btn-fill">Rechercher</button>
                </form>
            </div>
            <div class="col-md-4">
                <div>
                    <select class="form-control" onchange="location = this.value;">
                        @foreach($categories as $val)
                            <option {{ $cn == $val->categorieName ? 'selected' : '' }}><a href="{{route('filter_produit', $val->categorieName)}}" onclick="(() => submit())">{{$val->categorieName}}</a></option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="box" style="font-size: 13px">
                <div class="box-header box-primary">
                    <h3 class="box-title">Produits</h3>
                </div>
                <div class="box-body">
                    <table id="produits" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="col-md-1">ID</th>
                            <th class="col-md-2">Nom</th>
                            <th class="col-md-2">Description</th>
                            <th class="col-md-1">Categorie</th>
                            <th class="col-md-1">Prix Max.</th>
                            <th class="col-md-1">Prix Min.</th>
                            <th class="col-md-1">Update</th>
                            <th class="col-md-1">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr title=" User add: {{$product->user->username}} , created at : {{$product->created_at->format('d M Y')}}, updated at: {{$product->updated_at->format('d M Y')}}" data-placement="bottom" data-toggle="tooltip">
                                <td class="col-md-1">{{$product->id}}</td>
                                <form action="{{route('products.update', $product->id)}}" method="post">
                                    @csrf
                                    @method('PATCH')
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
                                    <a href="{{route('products.destroy', $product->id)}}" class="btn btn-danger btn-xs" data-method="DELETE" data-confirm="Etes-vous sûr"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- @if({{ route('filter_produit') }}) --}}
            <div class="text-center"> {{ $products->links() }}</div>
        {{-- @endif --}}
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