<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function upload($title): array
    {
        $count = $this->productService->uploadProduct($title);
        return ['count' => $count];
    }

    public function store(ProductStoreRequest $request): array
    {
        $data = $request->validated();
        $result = $this->productService->sentProduct($data);
        return ['result' => $result];
    }
}
