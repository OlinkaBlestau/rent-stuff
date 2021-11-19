<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThingService
{
    public static function createThing(Request $request)
    {
        DB::table('Thing')->insert([
            'Name' => $request['name'],
            'Price' => $request['price'],
            'Description' => $request['description'],
            'id_User' => session()->get('UserId'),
            'id_Category' => $request['category'],
        ]);

        header('location: /ViewAd');
    }

    public static function getThingsForUser(): string
    {
        return json_encode(DB::table('Thing')
            ->where('id_User', session()->get('UserId'))
            ->get());
    }

    public static function deleteThing($id)
    {
        DB::table('Thing')->delete($id);
        header('location: /ViewAd');
    }
}
