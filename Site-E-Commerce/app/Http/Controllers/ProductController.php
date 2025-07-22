<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(int $id): View
    {
            return view('product-details', ['id' => $id]);
    }
    public function index(){
        return view('product-list');
    }
}
