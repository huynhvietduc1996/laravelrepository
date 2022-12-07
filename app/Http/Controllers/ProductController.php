<?php

namespace App\Http\Controllers;

use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->getAll();

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);

        return view('products.detail', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $product = $this->productRepository->create($data);

        return view('products.index');
    }

    public function update($id, Request $request)
    {
        $data = $request->all();

        $product = $this->productRepository->update($id, $data);

        return view('products.index');
    }

    public function destroy($id)
    {
        $this->productRepository->delete($id);

        return view('products.index');
    }
}

