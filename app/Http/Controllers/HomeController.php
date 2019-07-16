<?php
namespace App\Http\Controllers;

use App\User;
use App\Model\Categorie;
use App\Model\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where([
            ['username', '<>', 'root'],
            ['deleted_at', null]
        ])->get();
        $categorie = Categorie::where([
            ['deleted_at', null]
        ])->get();
        $product = Product::where([
            ['deleted_at', null]
        ])->get();

        return view('home', compact('user', 'categorie', 'product'));
    }
}
