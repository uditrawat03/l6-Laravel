<?php

namespace App\Http\Controllers;

use Illuminate\Routing\RouteUrlGenerator;

class AppController extends Controller
{
    public function __construct()
    { }


    public function index($any)
    {
        $url =  url('api/' . $any);
        $route = app('router')->getRoutes()->match(app('request')->create('api/' . $any));
        $router = app('router');

        return $router->dispatch(app('request')->create('api/' . $any));

        // return view("home");
    }
}
