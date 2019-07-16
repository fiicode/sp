@extends('layouts.app')

@section('dashboard')
    <div class="row demo-samples">
        <div class="hidden-xs hidden-sm hidden-md col-md-3 col-lg-3">
            <div class="todo" style="box-shadow: 1px 1px 9px #000">
                <div class="todo-search" title="Rechercher dans la Base de données" data-placement="right" data-toggle="tooltip">
                    <input class="todo-search-field" type="search" value="" placeholder="Search" />
                </div>
                <ul>
                    <li class="todo-done" title="Administration du site" data-placement="right" data-toggle="tooltip">
                        <div class="todo-icon fui-home"></div>
                        <div class="todo-content">
                            <h4 class="todo-name">
                                Dashboard
                            </h4>
                            Times Square
                        </div>
                    </li>
                    <li title="Liste des utilisateurs" data-placement="right" data-toggle="tooltip">
                        <a href="{{route('users.index')}}">
                            <div class="todo-icon fui-user"></div>
                            <div class="todo-content">
                                <h4 class="todo-name">
                                    User Registrations
                                </h4>
                                Total Users suscribe : {{count($user)}}
                            </div>
                        </a>
                    </li>
                    <li title="Afficher les catégories" data-placement="right" data-toggle="tooltip">
                        <a href="{{route('categories.index')}}">
                            <div class="todo-icon fui-list-thumbnailed"></div>
                            <div class="todo-content">
                                <h4 class="todo-name">
                                    Categories
                                </h4>
                                Total Categories : {{count($categorie)}}
                            </div>
                        </a>
                    </li>
                    <li title="Afficher les produits" data-placement="right" data-toggle="tooltip">
                        <a href="{{route('products.index')}}">
                            <div class="todo-icon fa fa-bicycle"></div>
                            <div class="todo-content">
                                <h4 class="todo-name">
                                    Products
                                </h4>
                                Total Products : {{count($product)}}
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-12 col-sm-6 col-md-3 col-lg-3 share mrl" style="box-shadow: 1px 1px 9px #000; background-color: #293a4a;color: #1abc9c">
            <div class="todo-icon fui-user"></div>
            <h5 class="demo-panel-title logo">Add Users.</h5>
            <form action="{{route('users.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Name">
                    @if($errors->has('name'))
                        <span class="help-block">
              <p>{{$errors->first('name')}}</p>
          </span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('username') ? ' has-error' : ''}}">
                    <input type="text" name="username" value="{{old('username')}}" class="form-control" placeholder="Username">
                    @if($errors->has('username'))
                        <span class="help-block">
              <p>{{$errors->first('username')}}</p>
          </span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                    <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="email">
                    @if($errors->has('email'))
                        <span class="help-block">
                <p>{{$errors->first('email')}}</p>
            </span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('password') ? ' has-error' : ''}}">
                    <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Password">
                    @if($errors->has('password'))
                        <span class="help-block">
                <p>{{$errors->first('password')}}</p>
            </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password confirm">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('users.index')}}" class="btn btn-danger" title="Liste des utilisateurs" data-placement="right" data-toggle="tooltip">Users List <i class="fa fa-arrow-circle-right"></i></a>
            </form>
        </div>

        <div class="col-md-12 col-sm-5 col-md-2 col-lg-2 share mrl" style="box-shadow: 1px 1px 9px #000; background-color: #293a4a;color: #1abc9c">
            <div class="todo-icon fui-list-thumbnailed"></div>
            <h5 class="demo-panel-title logo">Categories.</h5>
            <form action="{{route('categories.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group{{$errors->has('categorieName') ? ' has-error' : ''}}">
                    <input type="text" name="categorieName" value="{{old('categorieName')}}" class="form-control" placeholder="categorie">
                    @if($errors->has('categorieName'))
                        <span class="help-block">
                  <p>{{$errors->first('categorieName')}}</p>
              </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-warning btn-sm">Save</button>
                <a href="{{route('categories.index')}}" class="btn btn-danger btn-sm" title="Afficher les catégories" data-placement="bottom" data-toggle="tooltip">Categories List <i class="fa fa-arrow-circle-right"></i></a>
            </form>
        </div>

        <div class="col-md-12 col-sm-6 col-md-3 col-lg-3 share mrl" style="box-shadow: 1px 1px 9px #000; background-color: #293a4a;color: #1abc9c">
            <div class="todo-icon fa fa-bicycle"></div>
            <h5 class="demo-panel-title logo">Add Products.</h5>
            <form action="{{route('products.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group{{$errors->has('productName') ? ' has-error' : ''}}">
                    <input type="text" name="productName" value="{{old('productName')}}" class="form-control" placeholder="Product name">
                    @if($errors->has('productName'))
                        <span class="help-block">
                    <p>{{$errors->first('productName')}}</p>
                </span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('mtt1') ? ' has-error' : ''}}">
                    <input type="text" name="mtt1" value="{{old('mtt1')}}" class="form-control" placeholder="Montant Max">
                    @if($errors->has('mtt1'))
                        <span class="help-block">
                    <p>{{$errors->first('mtt1')}}</p>
                </span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('mtt2') ? ' has-error' : ''}}">
                    <input type="text" name="mtt2" value="{{old('mtt2')}}" class="form-control" placeholder="Montant Min">
                    @if($errors->has('mtt2'))
                        <span class="help-block">
                    <p>{{$errors->first('mtt2')}}</p>
                </span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('categorie') ? ' has-error' : ''}}">
                    <select class="form-control" name="categorie">
                        @foreach($categorie as $val)
                            <option>{{$val->categorieName}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('categorie'))
                        <span class="help-block">
                    <p>{{$errors->first('categorie')}}</p>
                </span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('description') ? ' has-error' : ''}}">
                    <textarea class="form-control" placeholder="Description" name="description">{{old('description')}}</textarea>
                    @if($errors->has('description'))
                        <span class="help-block">
                    <p>{{$errors->first('description')}}</p>
                </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <a href="{{route('products.index')}}" class="btn btn-danger" title="Afficher les produits" data-placement="bottom" data-toggle="tooltip">Products List <i class="fa fa-arrow-circle-right"></i></a>
            </form>
        </div>


@endsection