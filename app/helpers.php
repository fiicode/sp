<?php

// if (!function_exists('get_image')) {
// 	function get_image($filename) {
// 		$file = Storage::disk('local')->get($filename);
// 		return new Response($file, 200);
// 	}
// }
use App\Model\Categorie;
use App\Model\Product;

if (!function_exists('getProducts')) {
	function getProducts($id)
	{
		$products = \DB::table('products')->where('categorie_id', $id)->get();
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
    return Product::select('id', 'productName', 'mtt1', 'mtt2', 'avatar')->limit(8)
        ->where('deleted_at', null)
        ->inRandomOrder()
        ->get();
}
function get_instagram() {
    return Product::select('avatar')->limit(4)
        ->where('deleted_at', null)
        ->inRandomOrder()
        ->get();
}
function get_promo() {
    $avatar = Product::select('avatar')->limit(1)
        ->where('deleted_at', null)
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