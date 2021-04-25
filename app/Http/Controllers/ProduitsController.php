<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;

class ProduitsController extends Controller
{
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }
    /**
     * Display the specified resource.
     *
     * @param $productName
     * @return Response
     */
    public function show($productName)
    {
        $productNametrim = trim(preg_replace('/\s+/', '', $productName));
        $id = Str::after($productNametrim, 'spmobile');
        if (is_numeric($id)) {
            $produit = Product::select('id', 'productName', 'mtt1', 'mtt2', 'avatar', 'avatar2', 'avatar3', 'description', 'categorie_id')
                ->where('deleted_at', null)
                ->where('avatar', '!=', '')
                ->where('id', $id)->get()->first();
            if ($produit) {
                $categorie = $produit->categorie['categorieName'];
                $brothers = Product::select('id', 'productName', 'mtt1', 'mtt2', 'avatar', 'avatar2', 'avatar3', 'description', 'categorie_id')
                    ->where('deleted_at', null)
                    ->where('avatar', '!=', '')
                    ->where('categorie_id', $produit->categorie_id)->orderBy('id', 'desc')->get();
                $data = compact('produit', 'categorie', 'brothers');
                $agent = new Agent();
                if ($agent->isMobile()) {
                    return view('mobile.components.detail-produit', $data);
                }
                return view('detail-produit', $data);
            }
        }
        return redirect()->route('sp', ['categorie' => 'Tous']);
    }
}
