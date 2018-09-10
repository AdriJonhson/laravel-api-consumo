<?php

namespace App\Http\Controllers;

use App\Services\API\ProductServiceAPI;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        /*$products = ProductServiceAPI::getProducts();

        dd($products);*/

        return view('welcome');
    }
}
