<?php

namespace App\Http\Controllers;

use App\Model\Categorie;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProduitsViewController extends Controller
{
    private $page = 18;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    public function index($categorie)
    {
        $categories = Categorie::where([
            ['deleted_at', null]
        ])->limit(10)->get();
        
        $ps = Product::where('deleted_at', null)->latest();
        $cn = 'all';
        if ($categorie == $cn) {
            $products = $ps->paginate(9);
        } else {
            $categorie = Categorie::where([
                ['deleted_at', null],
                ['categorieName', $categorie]
            ])->get()->last();
            if (!$categorie) {
                return redirect()->back();
            }
            $products = $ps->where('categorie_id', $categorie->id)->paginate(9);
            $cn = $categorie->categorieName;
        }

        return view('admin.listOfProducts', compact('products', 'categories', 'cn'));

    }
    /**
     * @param string $categorie
     * @return Response
     */
    public function getCategorie($categorie)
    {
        $active = $categorie;
        //$products = Product::where('deleted_at', null)->get();
        $categories = Categorie::where('deleted_at', null)->orderBy('categorieName', 'asc')->get();
        $categorieName = Categorie::select('id', 'categorieName')->where('deleted_at', null)->where('categorieName', $categorie)->get()->first();
        $produits = Product::select('id', 'productName', 'mtt1', 'mtt2', 'avatar', 'avatar2', 'avatar3', 'description', 'categorie_id')
            ->where('deleted_at', null)
            ->where('avatar', '!=', '')
            //->orderBy('productName', 'asc')
            ->inRandomOrder()
            ->paginate($this->page);

        if (!$categorieName) {
            return view('produits', compact('categories', 'produits', 'active'));
        }
        $produits = Product::select('id', 'productName', 'mtt1', 'mtt2', 'avatar', 'avatar2', 'avatar3', 'description', 'categorie_id')
            ->where('deleted_at', null)
            ->where('avatar', '!=', '')
            ->where('categorie_id', $categorieName->id)
            ->orderBy('productName', 'asc')
            ->paginate($this->page);

        return view('produits', compact('categories', 'produits', 'active'));
    }
    public function getFamille($famille)
    {
        $produits = Product::select('id', 'productName', 'mtt1', 'mtt2', 'avatar', 'avatar2', 'avatar3', 'description', 'categorie_id')
            ->where('productName', 'like', "%{$famille}%")
            ->where('deleted_at', null)
            ->where('avatar', '!=', '')
            ->orderBy('productName', 'asc')->paginate($this->page);
        $active = ($produits->first())->categorie['categorieName'];
        return redirect()->route('sp', ['categorie' => strtolower($active)])->with('produits', $produits);
    }
    
    public function recherche(Request $request) {
        $produits = Product::select('id', 'productName', 'mtt1', 'mtt2', 'avatar', 'avatar2', 'avatar3', 'description', 'categorie_id')
            ->where('description', 'like', "%{$request['recherche']}%")
            ->where('deleted_at', null)
            ->where('avatar', '!=', '')
            ->orderBy('productName', 'asc')->paginate($this->page);
        if (count($produits) > 0) {
            $active = ($produits->first())->categorie['categorieName'];
            return redirect()->route('sp', ['categorie' => strtolower($active)])->with('produits', $produits);
        }
        return redirect()->route('sp', ['categorie' => 'Tous'])->with('error', $request['recherche']);
    }

    public function about() {
        return view('terms', ['about' => 'about']);
    }
    public function legal() {
        return view('terms', ['legal' => 'legal']);
    }
}