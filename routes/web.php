<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\threebeezcontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });




route::get('index',[threebeezcontroller::class,'index']);

route::get('about',[threebeezcontroller::class,'about']);

route::get('feature',[threebeezcontroller::class,'feature']);

route::get('service',[threebeezcontroller::class,'service']);

route::get('testimonial',[threebeezcontroller::class,'testimonial']);

route::get('team',[threebeezcontroller::class,'team']);

route::get('price',[threebeezcontroller::class,'price']);

route::get('detail',[threebeezcontroller::class,'detail']);

route::get('blog',[threebeezcontroller::class,'blogs']);

route::get('contact',[threebeezcontroller::class,'contact']);
route::post('savemsg',[threebeezcontroller::class,'savemsg']);

route::get('quote',[threebeezcontroller::class,'quote']);
