<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\newsitem;
use App\Http\Requests\createpersonrequest;

class HomeController extends Controller
{
    public function overview(){
        return view('news_items.overview');
    }

    public function create(){
        return view('news_items.create');
    }

    public function store(createpersonrequest $request)
    {
        newsitem::create($request->all());
        return view('news_items.overview');
    }
}