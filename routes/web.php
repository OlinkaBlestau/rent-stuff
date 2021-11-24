<?php

use Illuminate\Support\Facades\Route;

use App\Models\Thing;
use App\Models\Category;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ThingController;

use App\Services\UserService;
use App\Services\ThingService;
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


/*
|--------------------------------------------------------------------------
| Get Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('main', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
    ]);
});

Route::get('/signUp', function () {
    return view('signUp', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
    ]);
});

Route::get('/landLord', function () {
    return view('landLord', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
    ]);
});

Route::get('/Tenant', function () { //компонент
    return view('tenant', [  //blade
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
    ]);
});

Route::get('/CreateAd', function () { //компонент
    return view('createAd', [  //blade
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
    ]);
});

Route::get('/ViewProfileLandlord', function () { //компонент
    return view('viewProfilelandlord', [  //blade
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
        'user' => UserService::getUserBySession(),
    ]);
});

Route::get('/EditProfileLandlord', function () { //компонент
    return view('editProfileLandlord', [  //blade
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
        'user' => UserService::getUserBySession()
    ]);
});

Route::get('/signIn', function () {
    return view('signIn', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
    ]);
});

Route::get('/Support', function () {
    return view('support', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
    ]);
});

Route::get('/ViewAd', function () {
    return view('viewAd', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
        'things' => ThingService::getThingsForUser(),
        'category' => Category::all()
    ]);
});

Route::get('/editThing/{id}', function ($id) {
    return view('EditAd', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
        'thing' => Thing::find($id),
    ]);
});

Route::get('/deleteThing/{id}',
    [ThingController::class, 'deleteThing']
);

/*Route::get('/Profile', fn() => view('viewProfilelandlord', [
    'user' => UserService::getUserBySession()
]));*/

/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
*/

Route::post(
    '/createAdService',
    [ThingController::class, 'createThing']
)->name('createAd');

Route::post(
    '/signInService',
    [UserController::class, 'signIn']
)->name('signIn');

Route::post(
    '/editProfileService',
    [UserController::class, 'editUser']
)->name('editUser');

Route::post(
    '/editThingService/{id}',
    [ThingService::class, 'editThing']
)->name('editThing');
/*
|--------------------------------------------------------------------------
| Get Match
|--------------------------------------------------------------------------
*/



Route::match(
    ['get', 'post'],
    '/signUpService',
    [UserController::class, 'signUp']
)->name('signUp');

Route::match(
    ['get', 'post'],
    '/logOut',
    [UserController::class, 'logOut']
)->name('logOut');
