<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Получение корзины
Route::match(array('GET', 'POST'), '/cart', function()
{
    return json_encode($_SESSION['cart']);
});

use Illuminate\Http\Request;


//Route::post('/cart/add',  function(Request $request) {
//
//    return $request;
//});

Route::match(array('GET', 'POST'), '/cart/add', function(Request $request)
{

    if($request->delite_session == 1){
        $request->session()->forget('cart');
    }

    if($request->item_id){

        $item = array(
            'item_id' => $request->item_id,
            'items_name' => "ITEM_NAME_FROM_DB",
        );

        $request->session()->put('cart.items.' .  $request->item_id  , $item);

        $cart = session('cart');

    }

    return $cart;
});

