<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    function admin()
    {
        $comics = Comic::all();
        //dd($comics);
        return view('admin.index', compact('comics'));
    }
}
