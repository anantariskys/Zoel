<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Work;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $works = Product::all();
        return view('index', compact('works'));
    }
}
