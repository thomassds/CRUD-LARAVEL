<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Yahp\Services\ProductService;

class ProductController extends Controller
{
    /**
     * @var ProductService
     */
    private $service;
    /**
     * @var ProductController
     */
    private $productController;

    /**
     * Example Service constructor.
     * @param ProductController $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->service = $productService;
    }

    /**
     * @return mixed
     */
    public function listProducts()
    {
        $products =  $this->service->renderList();
        return view('listProducts', [
            'products' => $products
        ]);
    }

    public function store(Request  $request)
    {
        if(empty($request->description) || empty($request->hall)  || empty($request->shelf) || empty($request->side))
        {

            echo "<script type='text/javascript'>alert('Preencha todos os campos');</script>";

            return redirect()->route('newProduct');
        };

        $data = [
        "description" => strtoupper($request->description),
        "hall" => strtoupper($request->hall),
        "shelf" => strtoupper($request->shelf),
        "side" => strtoupper($request->side),
        ];
        $this->service->buildInsert($data);

        return redirect()->route('products.listAll');
    }

    public function newProduct()
    {
        return view('newProduct');
    }

    public function editProduct(Product $product,Request $request)
    {
        if(empty($request->description) || empty($request->hall)  || empty($request->shelf) || empty($request->side))
        {

            echo "<script type='text/javascript'>alert('Preencha todos os campos');</script>";

            return redirect()->back();
        };

        $data = [
            "description" => strtoupper($request->description),
            "hall" => strtoupper($request->hall),
            "shelf" => strtoupper($request->shelf),
            "side" => strtoupper($request->side),
            ];

        $this->service->buildUpdate(($id = $product->id), $data);

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
        $this->service->buildDelete(($id = $product->id));
        return redirect()->route('products.listAll');
    }
}
