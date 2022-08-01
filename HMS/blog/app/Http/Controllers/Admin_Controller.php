<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_Controller extends Controller
{
    public function index()
    {
        return view('produk_listing');
    }
   
    public function detail($slug)
    {
        return view('Detail_1');
    }
} 