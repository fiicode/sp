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
//        if (isset($_GET['page'])) {
//            $numPage = $_GET["page"];
//            $totalPages = count($products) > 0 ? count($products) / $this->page : 0;
//            if (is_numeric($numPage)) {
//                $i = 1;
//                while ($i <= $numPage) {
//                    $this->page += $i;
//                    $i++;
//                }
//                dump($_GET['page'], $totalPages, $produits->previousPageUrl(), $this->page);
//            }
//        }

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
            ->where('productName', 'like', "{$famille}%")
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