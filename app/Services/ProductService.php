<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{

    protected LoadService $loadService;
    protected ProductRepository $productRepository;

    public function __construct(LoadService $loadService, ProductRepository $productRepository)
    {
        $this->loadService = $loadService;
        $this->productRepository = $productRepository;
    }

    public function uploadProduct(string $title = ""): int
    {
        $productCollection = $this->loadService->getProductsByTitle($title);
        $this->productRepository->addArrayProductWithImages($productCollection);
        return $productCollection['total'];
    }

    public function sentProduct($data): bool
    {
        $this->productRepository->addProductWithImages($data);
        return $this->loadService->addProduct($data);
    }
}
