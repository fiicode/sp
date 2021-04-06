<?php

namespace App\Http\Controllers;

use App\Model\Categorie;
use App\Model\Product;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
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
    public function index()
    {
        $products = Product::where([
            ['deleted_at', null]
        ])->get();
        $categories = Categorie::where([
            ['deleted_at', null]
        ])->get();
        return view('admin.image', compact('products', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function show($id)
    {
    	$avatar = Product::find($id);
        $file = Storage::disk('public')->get($avatar->avatar);

        return new Response($file, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::where('id', $id)->get()->first();
        $file = $request->file('file');
        if (!$product || !$file) {
            return redirect()->back();
        }

        //$filename = 'SP_' . $id . '_' . strtotime(date('d-m-y h:m:s')) . '.jpg';
        $filename = 'SP_' . $id . '_' . $request['avatarNumber'] . '.jpg';
        Storage::disk('public')->put($filename, File::get($file));
        if ($request['avatarNumber'] == "1") {
            $product->avatar = $filename ? $filename : null;
        }
        if ($request['avatarNumber'] == "2") {
            $product->avatar2 = $filename ? $filename : null;
        }
        if ($request['avatarNumber'] == "3") {
            $product->avatar3 = $filename ? $filename : null;
        }
        $product->update();

        return redirect()->route('products.index')->with(['message' => 'Image uploaded!']);
    }

}