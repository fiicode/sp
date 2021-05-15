<?php

use App\Model\Categorie;
use App\Model\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

// if (!function_exists('get_image')) {
// 	function get_image($filename) {
// 		$file = Storage::disk('local')->get($filename);
// 		return new Response($file, 200);
// 	}


function isMobile () {
    $agent = new Agent();
    if ($agent->isMobile()) {
        return true;
    }
    return false;
}

if (!function_exists('isAdmin')) {
    function isAdmin() {
        $user = Auth::user();
        if (!$user) {
            return redirect('/');
        }
        if ($user->deleted_at) {
            Auth::logout();
            return redirect('/');
        }
        return $user->user_social_auth == false &&
            $user->provider == NULL ? true : false;

    }
}

if (!function_exists('getProducts')) {
	function getProducts($id)
	{
		$products = DB::table('products')->where('categorie_id', $id)->get();
		if (!$products) {
			return '';
		}
		return count($products) > 0 ? count($products) : '';
	}
}
if (!function_exists('set_active_route')) {
	function set_active_route($page, $id) {
		return $page == $id ? 'active' : '';
	}
}
function get_categorie()
{
    return Categorie::select('categorieName')->where('deleted_at', null)->get();
}
function quelques_produits()
{
    return Product::select('id', 'productName','slug', 'mtt1', 'mtt2', 'avatar')->limit(8)
        ->where('deleted_at', null)
        ->where('avatar', '!=', '')
        ->inRandomOrder()
        ->get();
}
function get_instagram() {
    return Product::select('avatar')->limit(4)
        ->where('deleted_at', null)
        ->where('avatar', '!=', '')
        ->inRandomOrder()
        ->get();
}
function get_promo() {
    $avatar = Product::select('avatar')->limit(1)
        ->where('deleted_at', null)
        ->where('avatar', '!=', '')
        ->inRandomOrder()
        ->get();
    return $avatar ? ($avatar->first())->avatar : null;
}
function get_categorie_famille($categorie_id)
{
    $produits = Product::select('productName')->where('categorie_id', $categorie_id)->where('deleted_at', null)->get();
    $famille = [];
    foreach ($produits as $produit) {
        $famille[] = strtoupper(explode(' ', $produit->productName)[0]);
    }
    $familles = collect($famille)->unique();

    return $familles->values();
}
function get_event_phone($id) {
    $jouer = \App\Model\Event::select('numero')->where('user_id', $id)->get()->last();
    return $jouer ? $jouer->numero : null ;
}

function get_event_profe($id) {
    $jouer = \App\Model\Event::select('profession')->where('user_id', $id)->get()->last();
    return $jouer ? $jouer->profession : null ;
}
function get_event_equip($id) {
    $jouer = \App\Model\Event::select('equipe')->where('user_id', $id)->get()->last();
    return $jouer ? $jouer->equipe : null ;
}
function get_event_age($id) {
    $jouer = \App\Model\Event::select('age')->where('user_id', $id)->get()->last();
    return $jouer ? $jouer->age : null ;
}
function get_event_quar($id) {
    $jouer = \App\Model\Event::select('quartier')->where('user_id', $id)->get()->last();
    return $jouer ? $jouer->quartier : null ;
}
function get_user($id) {
    $user = \App\User::where('id', $id)->get()->first();
    return $user ? $user : null;
}