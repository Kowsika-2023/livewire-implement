<?php

use App\Http\Livewire\About;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Post;
use App\Http\Livewire\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Index;
use App\Http\Livewire\Membership;
use App\Http\Livewire\Service;
use App\Http\Livewire\Servicedetail;

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

Route::get('/producthome',function(){
    return view('producthome');
 });

Route::get('/post',Post::class)->name('post');
Route::get('/product',Product::class)->name('product');
Route::get('/index',Index::class)->name('index');
Route::get('/contact',Contact::class);
Route::get('/service',Service::class);
Route::get('/membership',Membership::class);
Route::get('/about',About::class);
Route::get('servicedetail',Servicedetail::class);


Route::get('/',function(){
    return view('home');
 });

