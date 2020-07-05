<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Show the welcome page.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome(Request $request)
    {
        return view('welcome');
    }
}
