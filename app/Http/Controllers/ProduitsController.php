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
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {   
        // dd($productName);
        // $productNametrim = trim(preg_replace('/\s+/', '', $slug));
        // $slug = Str::after($productNametrim, 'spmobile');
        if (is_string($slug)) {
            $produit = Product::select('id', 'productName', 'slug', 'mtt1', 'mtt2', 'avatar', 'avatar2', 'avatar3', 'description', 'categorie_id')
            ->where('deleted_at', null)
            ->where('avatar', '!=', '')
            ->where('slug', $slug)->get()->first();
            if ($produit) {
                $categorie = $produit->categorie['categorieName'];
                $brothers = Product::select('id', 'productName', 'slug', 'mtt1', 'mtt2', 'avatar', 'avatar2', 'avatar3', 'description', 'categorie_id')
                ->where('deleted_at', null)
                ->where('avatar', '!=', '')
                ->where('categorie_id', $produit->categorie_id)->orderBy('id', 'desc')->get();
                // dd($produit->categorie);
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
