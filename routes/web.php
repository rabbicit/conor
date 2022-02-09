<?php

use App\Http\Livewire\AboutPageComponent;
use App\Http\Livewire\ContactPageComponent;
use App\Http\Livewire\HomepageComponent;
use App\Http\Livewire\HowitWorksPageComponent;
use App\Http\Livewire\Members\MemberSetupComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomepageComponent::class)->name('index');
Route::get('/contact', ContactPageComponent::class)->name('contact');
Route::get('/about-us', AboutPageComponent::class)->name('about');
Route::get('/faqs', HowitWorksPageComponent::class)->name('faqs');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/start', MemberSetupComponent::class)->name('start');
});
