<?php

namespace App\Http\Controllers;

use App\Models\Hair;
use App\Models\Makeup;
use App\Models\Skincare;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $makeup = Makeup::all()->random(6);
        $skincare = Skincare::all()->random(6);
        $hair = Hair::all()->random(6);
        return view('index',[
            'makeup' => $makeup,
            'skincare' => $skincare,
            'hair' => $hair
        ]);
    }
}
