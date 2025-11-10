<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
public function store()
{
    $product = Product::create([
        'name' => 'Lenovo',
        'price' => 5000,
        'category' => 'Sample Category',
    ]);

    return response()->json([
        'message' => 'Sample product inserted successfully',
        'data' => $product
    ]);
}

}
