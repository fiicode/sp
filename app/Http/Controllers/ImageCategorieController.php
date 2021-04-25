<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Categorie;
use App\Model\Product;

class ImageCategorieController extends Controller
{
    private $page = 18;

    public function index($categorie)
    {
        $categories = Categorie::where([
            ['deleted_at', null]
        ])->limit(10)->get();
        $ps = Product::where('deleted_at', null)->latest();
        $cn = 'all';    
        if($categorie == $cn) {
            $products = $ps->paginate($this->page);
        } else {
            $categorie = Categorie::where([
                ['deleted_at', null],
                ['categorieName', $categorie]
                ])->get()->last();
                if (!$categorie) {
                    return redirect()->back();
                }
                $products = $ps->where('categorie_id', $categorie->id)->paginate($this->page);
            $cn = $categorie->categorieName;
        }
        return view('admin.image', compact('products', 'categories', 'cn'));
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
        $request->validate([
            'search_produit' => 'required|string|max:255'
        ]);

        $ps = Product::where('deleted_at', null)->latest();
        $cn = 'all';
        if ($cn == 'all') {
            $products = $ps->paginate($this->page);
            $products = Product::where('productName', 'Like', "%{$request['search_produit']}%")
            ->where('deleted_at', null)
            ->where('avatar', '!=', '')
            ->OrWhere('id', 'Like', "%{$request['search_produit']}%")
            ->OrWhere('mtt2', 'Like', "%{$request['search_produit']}%")->paginate($this->page);
            $categories = Categorie::where([
                ['deleted_at', null]
            ])->get();

            return view('admin.listOfProducts', compact('products', 'categories', 'cn'));
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("Hello");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required|string|max:255'
        ]);

        $cn = 'all';
        $products = Product::where('productName', 'Like', "%{$request['search']}%")
        ->where('deleted_at', null)
            ->where('avatar', '!=', '')
            ->OrWhere('id', 'Like', "%{$request['search']}%")
            ->OrWhere('mtt2', 'Like', "%{$request['search']}%")->paginate($this->page);
        $categories = Categorie::where([
            ['deleted_at', null]
        ])->get();

        return view('admin.image', compact('products', 'categories', 'cn'));
    }
}
