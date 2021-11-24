<?php

namespace App\Http\Controllers;

use App\Services\ThingService;
use Illuminate\Http\Request;

class ThingController extends Controller
{
    public function createThing(Request $request)
    {
        ThingService::createThing($request);
    }

    public function deleteThing($id)
    {
        ThingService::deleteThing($id);
    }

    public function editThing(Request $request, $id): void
    {
        ThingService::editThing($request, $id);
    }

}
