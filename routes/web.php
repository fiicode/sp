<?php


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UsersController');
    Route::resource('categories', 'CategorieController');
    Route::resource('products', 'ProductController');
    Route::resource('uploadImage', 'ImageController');
});
//Route::get('productimage/{filename}', [
//    'uses' => 'ProductimageController@getImage',
//    'as' => 'product.image'
//]);
Route::get('detail/{productName}', [
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