<?php

namespace App\Http\Controllers;

use App\Model\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller
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
        $categories = categorie::where([
            ['deleted_at', null]
        ])->get();
        return view('admin.listOfCategories', compact('categories'));
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
            'categorieName' => 'required|min:3|unique:categories'
        ]);
        $categorie = Categorie::where('categorieName', $request['categorieName'])
            ->where('deleted_at', null)
            ->get();
        if ($categorie->count() == 0) {
            Categorie::firstOrcreate([
                'categorieName' => $request['categorieName'],
                'user_id' => Auth::user()->id
            ]);
        }
        //
        return redirect()->intended('home')->with(['message' => 'Category ' . $request['categorieName'] . ' created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
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
        $this->validate($request, [
            'categorieName' => 'required|min:3'
        ]);
        $categorie = Categorie::where('id', $id)->get()->first();
        if (!$categorie) {
            return redirect()->back();
        }
        $cat = $categorie->categorieName;
        $categorie->categorieName = $request['categorieName'];
        $categorie->update();
        return redirect()->route('categories.index')->with(['message' => $cat . ' To ' . $request['categorieName']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $categorie = Categorie::where('id', $id)->get()->first();
       if (!$categorie) {
            return redirect()->back();
        }
       $categorie->deleted_at = Date('Y-m-d H:i:s');
       $categorie->update();

        return redirect()->route('categories.index')->with(['message' => $categorie->categorieName . ' deleted!']);
    }
}
