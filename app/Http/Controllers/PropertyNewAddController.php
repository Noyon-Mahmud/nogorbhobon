<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyNewAddController extends Controller
{
    public function create()
    {
        return view('property.create');

    }
}
