<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            'shoes' => ['Nike', 'Adidas', 'Puma', 'New Balance', 'Converse', 'Brodo']
        ]);
    }
}
