<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProducts()
    {
        $products =  Product::all();
        return view('listProducts', [
            'products' => $products
        ]);
    }

    public function store(Request  $request)
    {
        var_dump($request->except(['_token']));

        $product = new Product();
        $product->description = strtoupper($request->description);
        $product->hall = strtoupper($request->hall);
        $product->shelf = strtoupper($request->shelf);
        $product->side = strtoupper($request->side);
        $product->save();

        return redirect()->route('products.listAll');
    }

    public function editProduct(Product $product,Request $request)
    {
        $product->description = strtoupper($request->description);
        $product->hall = strtoupper($request->hall);
        $product->shelf = strtoupper($request->shelf);
        $product->side = strtoupper($request->side);
        $product->save();
        return redirect()->route('products.listAll');
    }

    public function viewEdit(Product $product)
    {
        return view('editProduct', [
            'product' => $product
        ]);
    }

    public function destroyProduct(Product $product)
    {
        $product->delete();
        return redirect()->route('products.listAll');
    }
}
