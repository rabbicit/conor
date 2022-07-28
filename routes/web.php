<?php

use App\Http\Controllers\PlanController;
use App\Http\Controllers\subscriptionController;
use App\Http\Controllers\SubscriptionTransectionController;
use App\Http\Livewire\AboutPageComponent;
use App\Http\Livewire\Admin\AdminCalendarComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminMembershipComponent;
use App\Http\Livewire\Admin\AdminMusicsComponent;
use App\Http\Livewire\Admin\AdminTransectionsComponent;
use App\Http\Livewire\ContactPageComponent;
use App\Http\Livewire\HomepageComponent;
use App\Http\Livewire\HowitWorksPageComponent;
use App\Http\Livewire\Members\MemberAlbumComponent;
use App\Http\Livewire\Members\MemberCalendarComponent;
use App\Http\Livewire\Members\MemberCreateAlbumComponent;
use App\Http\Livewire\Members\MemberDashboardComponent;
use App\Http\Livewire\Members\MemberEditAlbumComponent;
use App\Http\Livewire\Members\MemberProfileComponent;
use App\Http\Livewire\Members\MemberSetupComponent;
use App\Http\Livewire\Members\MemberSubscriptionComponent;
use App\Http\Livewire\Members\MemberTracksComponent;
use App\Http\Livewire\Members\MemberTrackUploadsComponent;
use App\Http\Livewire\Members\SaveTrackDetailsComponent;
use App\Http\Livewire\TermsOfServicesComponent;
use Illuminate\Http\Request;
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
Route::get('/terms-of-services', TermsOfServicesComponent::class)->name('terms');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboards', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'authmembers'])->group(function(){
    Route::get('/member/start', MemberSetupComponent::class)->name('start');
    Route::get('/member/dashboard', MemberDashboardComponent::class)->name('member.dashboard');
    Route::get('/member/tracks', MemberTracksComponent::class)->name('member.tracks');
    Route::get('/member/profile', MemberProfileComponent::class)->name('member.profile');
    Route::get('/member/tracks/upload', MemberTrackUploadsComponent::class)->name('member.adtrack');
    Route::get('member/tracksave', SaveTrackDetailsComponent::class)->name('member.save');
    Route::get('member/albums', MemberAlbumComponent::class)->name('member.albums');
    Route::get('member/album/create', MemberCreateAlbumComponent::class)->name('member.addalbum');
    Route::get('member/album/{album_id}', MemberEditAlbumComponent::class)->name('member.aledit');
    Route::get('member/calender', MemberCalendarComponent::class)->name('member.calendar');
    Route::get('member/subscription', MemberSubscriptionComponent::class)->name('member.subscription');
    Route::get('/member/history',[ SubscriptionTransectionController::class, 'list_transections'])->name('member.history');


    Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
    Route::get('/plan/{plan}', [PlanController::class, 'show'])->name('plans.show');
    Route::post('/subscription', [subscriptionController::class, 'create'])->name('subscription.create');
    Route::post('/subscriptionupdate', [subscriptionController::class, 'update'])->name('subscription.update'); 
    Route::post('/subscriptioncancel', [subscriptionController::class, 'cancel'])->name('subscription.cancel'); 
});

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/messages', AdminContactComponent::class)->name('admin.message');
    Route::get('/admin/users', AdminMembershipComponent::class)->name('admin.users');
    Route::get('/admin/tracks', AdminMusicsComponent::class)->name('admin.tracks');
    Route::get('/admin/calendar', AdminCalendarComponent::class)->name('admin.calendar');
    Route::get('/admin/transections', AdminTransectionsComponent::class)->name('admin.transections');
    Route::get('/track/{id}/download', [PlanController::class, 'downloadTracks'])->name('track.download');

    //Routes for create Plan
    Route::get('create/plan', [subscriptionController::class, 'createPlan'])->name('create.plan');
    Route::get('admin/plans', [PlanController::class, 'showPlans'])->name('show.plan');
    Route::post('store/plan', [subscriptionController::class, 'storePlan'])->name('store.plan');
});
