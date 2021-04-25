@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('message'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Alert!</h4>
  {{Session::get('message')}}.
  </div>
@endif

  <div class="row">

      <div class="box">
        <div class="box-header box-primary">
          <a href="{{route('filter_produit', 'all')}}" class="btn btn-primary"><i class="fa fa-reply"></i></a>
          <h3 class="box-title pull-right"><span class="badge badge-success">Edition </span> {{$product->productName}}</h3>
        </div>



        <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">
            	{{csrf_field()}}
            	{{method_field('PATCH')}}
              <div class="box-body">
                <div class="form-group{{$errors->has('productName') ? ' has-error' : ''}}">
                	<label for="productName" class="col-sm-2 control-label">Product Name</label>

                   <div class="input-group">
                       <div class="input-group-addon">
	                       <i class="fa fa-font"></i>
	                   </div>
	                   <div class="col-sm-10">
		                    <input type="text" name="productName" value="{{$product->productName}}" class="form-control" placeholder="Product name">
	                   </div>
	                  </div>
                   
                   @if($errors->has('productName'))
                       <span class="help-block">
                           <p>{{$errors->first('productName')}}</p>
                       </span>
                   @endif
               </div>
               <div class="form-group{{$errors->has('file') ? ' has-error' : ''}}">
                  <label for="code" class="col-sm-2 control-label">Image</label>
                  <div class="input-group">
                  	<div class="col-sm-10">
                  		<input type="file" id="file" name="file">

                  		<p class="help-block">take (.jpg, .png)</p>
                  	</div>
                  </div>
               </div>

               <div class="form-group{{$errors->has('code') ? ' has-error' : ''}}">
               	<label for="code" class="col-sm-2 control-label">Reference</label>
                   <div class="input-group">
                       <div class="input-group-addon">
	                       <i class="fa fa-barcode"></i>
	                   </div>
                   	<div class="col-sm-10">
	                    <input type="text" name="code" value="{{$product->code}}" class="form-control" placeholder="Reference">
	                  </div>
                   
                   </div>
                   @if($errors->has('code'))
                       <span class="help-block">
                           <p>{{$errors->first('code')}}</p>
                       </span>
                   @endif
               </div>

                <div cclass="form-group{{$errors->has('categorie') ? ' has-error' : ''}}">
                  <label for="categorie" class="col-sm-2 control-label">Categorie</label>
                  <div class="input-group">
                  	<div class="input-group-addon">
	                       <i class="fa fa-sitemap"></i>
	                   </div>
                  	<div class="col-sm-10">
	                    <select class="form-control" name="categorie">
				            @foreach($categories as $categorie)
				            	<option {{$product->categorie['categorieName'] == $categorie->categorieName ? 'selected' : ''}}> {{$categorie->categorieName}}</option>
				            @endforeach
				            </select>
                  	</div>
                  </div>
                </div>
                <br>
                <div class="form-group{{$errors->has('description') ? ' has-error' : ''}}">
                	<label for="description" class="col-sm-2 control-label">Description</label>
                	<div class="input-group">
                		<div class="input-group-addon">
	                       <i class="fa fa-sitemap"></i>
	                   </div>
                		<div class="col-sm-10">
                    <textarea class="form-control" placeholder="Description" name="description">{{$product->description}}</textarea>
                  </div>
                	</div>
                   @if($errors->has('description'))
                       <span class="help-block">
                           <p>{{$errors->first('description')}}</p>
                       </span>
                   @endif
                </div>


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{route('products.index')}}" class="btn btn-primary"><i class="fa fa-reply"></i></a>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->



      </div>

    </div>
</div>
@endsection
