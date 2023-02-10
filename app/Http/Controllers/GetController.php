<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetController extends Controller
{
    /** Not implemented yet Sanctum protected Vue routes */
    public function __invoke()
    {
        return "You are now authorised";
    }
}
