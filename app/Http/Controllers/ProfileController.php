<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'name' => 'Artisan Shoes',
            'desc' => 'Artisan Shoes merupakan sebuah toko sepatu terbaik No.1 di Indonesia yang sudah berdiri sejak tahun 2005'
        ]);
    }
}
