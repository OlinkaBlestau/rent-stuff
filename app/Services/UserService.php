<?php

namespace App\Services;

use App\Http\Requests\SignUpRequest;
use App\Models\User;
use App\Http\Requests\SignInRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

class UserService
{
    /**
     * Sign in new user
     *
     * @param Request $request
     */
    public static function signIn(Request $request): bool
    {
        DB::table('User')->insert([
            'Name' => $request['name'],
            'Surname' => $request['surname'],
            'Email' => $request['email'],
            'Phone' => $request['phone'],
            'Address' => $request['address'],
            'Password' => $request['password'],
            'Role' => $request['role']
        ]);
        header("Location: /"); // переход на след ст

        return true;
    }

    /**
     * Sign up user
     *
     * @param SignUpRequest $request
     */
    public static function signUp(SignUpRequest $request): bool
    {
        $userData = DB::table('User')
            ->where('Email', '=', $request['email'])
            ->where('Password', '=', $request['password'])
            ->first();
        if (is_object($userData)) {
            session()->put('UserId', $userData->id);
            session()->put('Role', $userData->Role);

            if ($userData->Role === 0) {
                header("location: /Tenant");
            } else {
                header("location: /landLord");
            }

            return true;
        }
        header("Location: /signUp");
        return true;
    }

    /**
     * Return is user authorize or not
     *
     * @return bool
     */
    public static function isAuth(): bool
    {
        if(session()->get('userId') !== null) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Log out user
     */
    public static function logOut(): bool
    {
        session()->pull('UserId');
        session()->pull('Role');
        header("Location: /");
        return true;
    }

    public static function profile($id)
    {
            $user = DB::table("User")
                ->where('id',$id)
                ->first();

            if ($user->Role === 1){
                header("location: /landLord");
            } else {
                header("location: /Tenant");
            }
    }

    /**
     * Return user that authorised now
     *
     * @return mixed
     */
    public static function getUserBySession()
    {
        return json_encode(User::find(session()->get("UserId")));
    }


    public static function editUser(Request $request)
    {
        DB::table('User')
            ->where('id', session()->get('UserId'))
            ->update([
                'Name' => $request['name'],
                'Surname' => $request['surname'],
                'Email' => $request['email'],
                'Phone' => $request['phone'],
                'Address' => $request['address'],
                'Password' => $request['password'],
            ]);
        header('location: /ViewProfileLandlord');

    }

}
