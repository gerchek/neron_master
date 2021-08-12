<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\About;

class PagesController extends Controller
{
    //
    public function index()
    {
        $data = Portfolio::paginate(3);
        return view('pages.index',compact('data'));
    }

    public function portfolio()
    {
        $data = Portfolio::all();
        return view('pages.portfolio',compact('data'));
        // dd($data);
    }

    public function services()
    {
        $data = Services::all();
        return view('pages.services',compact('data'));
        // dd($data);
    }

    public function about()
    {
        $data = About::first();
        return view('pages.about',compact('data'));
        // dd($data);
    }
}
