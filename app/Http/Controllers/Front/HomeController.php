<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'meta_title' => "Eye Hospital",
            'meta_description' => "Eye Hospital",
        ];
        
        return view('front.home', $data);
    }
}
