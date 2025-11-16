<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();
        $products = []; // Aquí iría la lógica para obtener los productos
        return "Product index";
    }
}
