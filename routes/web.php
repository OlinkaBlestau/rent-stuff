<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
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
| Documents Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('main', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
    ]);
});



/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
*/

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

Route::match(
    ['get', 'post'],
    '/signUpService',
    [UserController::class, 'signUp']
)->name('signUp');

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

Route::get('/ViewProfileTenant', function () {
    return view('viewProfileTenant', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
    ]);
});

Route::get('/ViewAd', function () {
    return view('viewAd', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
        'things' => ThingService::getThingsForUser()
    ]);
});
Route::get('/EditAd', function () {
    return view('EditAd', [
        'UserId' => session()->get('UserId'),
        'Role' => session()->get('Role'),
    ]);
});

Route::get('/deleteThing/{id}',
    [ThingController::class, 'deleteThing']
);


/*Route::get('/Profile', fn() => view('viewProfilelandlord', [
    'user' => UserService::getUserBySession()
]));*/

Route::post(
    '/signInService',
    [UserController::class, 'signIn']
)->name('signIn');

Route::match(
    ['get', 'post'],
    '/logOut',
    [UserController::class, 'logOut']
)->name('logOut');
