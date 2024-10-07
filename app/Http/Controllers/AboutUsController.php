<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //Er kan maar 1 route naar 1 functie in 1 controller
    public function index(): string {
        return 'Test met een string';
    }

}
