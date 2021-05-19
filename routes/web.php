<?php

use App\Model\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;

Route::get('/', function () {
    $agent = new Agent();
    if ($agent->isMobile()) {
        $items = Product::select('id', 'productName', 'slug', 'mtt1', 'mtt2', 'avatar')
            ->where('deleted_at', null)
            ->where('avatar', '!=', '');
        $produits = $items->inRandomOrder()->paginate(4);
        $menu = $items->inRandomOrder()->paginate(4);
        $favo = $items->inRandomOrder()->paginate(8);
        
        return view('mobile.welcome', compact('produits', 'menu', 'favo'));
    }
    return view('welcome');
});

Route::group(['namespace' => 'Auth'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', 'LoginController@logout')->name('logout');
    });

    Route::get('redirect/{service}', 'SocialAuthController@redirect');
    Route::get('callback/{service}', 'SocialAuthController@callback');
});

Auth::routes();

Route::get('terms/about', 'ProduitsViewController@about')->name('about');
Route::get('terms/legal', 'ProduitsViewController@legal')->name('legal');

Route::get('/insert/debug/slug', 'FixSlug\FixSlugController@slug');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/home/event/member/fifa19', 'AuthSocialController@index')->name('user_auth_social');
    Route::post('/home/event/member/fifa19', 'AuthSocialController@newMemberFifa')->name('new_member_fifa');

    Route::group(['middleware' => 'admin'], function () {
        Route::get('status/user', 'StatusController@statusconfirm')->name('statusconfirm');
        Route::resource('users', 'UsersController');
        Route::resource('categories', 'CategorieController');
        Route::resource('products', 'ProductController');
        Route::resource('uploadImage', 'ImageController');
        Route::post('/image/all', 'ImageCategorieController@search')->name('search');
        Route::get('/image/{categorie}', 'ImageCategorieController@index')->name('image');
        Route::post('/produits/all', 'ImageCategorieController@store')->name('search_produit.store');
        Route::get('/produits/{filter}', 'ProduitsViewController@index')->name('filter_produit');
    });
});
//Route::get('productimage/{filename}', [
//    'uses' => 'ProductimageController@getImage',
//    'as' => 'product.image'
//]);
Route::get('sign/event/fifa19', 'EventController@loginpage')->name('login.event');

Route::get('detail/{slug}', [
    'uses' => 'ProduitsController@show',
    'as' => 'dp'
]);
Route::get('{categorie}', [
    'uses' => 'ProduitsViewController@getCategorie',
    'as' => 'sp'
]);
Route::get('famille/{famille}', [
    'uses' => 'ProduitsViewController@getFamille',
    'as' => 'famille'
]);
Route::post('recherche', [
    'uses' => 'ProduitsViewController@recherche',
    'as' => 'recherche'
]);
