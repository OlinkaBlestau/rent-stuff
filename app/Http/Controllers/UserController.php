<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Services\UserService;

class UserController extends Controller
{
    public function signIn(Request $request): void
    {
        UserService::signIn($request);
    }

    public function signUp(SignUpRequest $request): void
    {
        UserService::signUp($request);
    }

    public function logOut(): void
    {
        UserService::logOut();

    }

    public function profile($id): void
    {
        UserService::profile($id);
    }

    public function editUser(Request $request): void
    {
        UserService::editUser($request);
    }
}
