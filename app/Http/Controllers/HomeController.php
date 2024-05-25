<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class HomeController extends Controller
{
    public function index()
    {

        return view('welcome', [
            'tournaments' => Tournament::latest()->take(4)->get(),
        ]);
    }
}
