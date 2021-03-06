<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\Categorie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where([
            ['deleted_at', null]
        ])->get();
        $categories = Categorie::where([
            ['deleted_at', null]
        ])->get();
        return view('admin.listOfProducts', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'productName' => 'required|min:2',
            'categorie' => 'required',
            'description' => 'nullable|min:3'
        ]);
        $categorie_id = Categorie::select('id')->where('categorieName', $request['categorie'])->get()->first();
        if (!$categorie_id) {
            return redirect()->back();
        }
        Product::create([
            'productName' => $request['productName'],
            'mtt1' => $request['mtt1'],
            'mtt2' => $request['mtt2'],
            'categorie_id' => $categorie_id->id,
            'description' => $request['description'],
            'user_id' => Auth::user()->id
        ]);
        //
        return redirect()->intended('home')->with(['message' => 'Product ' . $request['productName'] . ' created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'productName' => 'required|min:2',
            'categorie' => 'required',
            'description' => 'nullable|min:3'
        ]);

        $categorie_id = Categorie::select('id')->where('categorieName', $request['categorie'])->get()->first();
        if (!$categorie_id) {
            return redirect()->back();
        }
        $product->productName = $request['productName'];
        $product->mtt1 = $request['mtt1'];
        $product->mtt2 = $request['mtt2'];
        $product->categorie_id = $categorie_id->id;
        $product->description = $request['description'];
        $product->update();

        return redirect()->route('products.index')->with(['message' => 'Products updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->deleted_at = Date('Y-m-d H:i:s');
        $product->update();

        return redirect()->route('products.index')->with(['message' => 'Products deleted!']);
    }
}
