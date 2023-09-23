<?php
use App\Http\Controllers\GoogleDocController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/create-doc', [GoogleDocController::class, 'createDoc']);

Route::post("form-submit", "FormSubmitController@formSubmit")->name("form.submit");
