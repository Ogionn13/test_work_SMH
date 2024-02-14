<?php

namespace App\Repositories;

use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Support\Collection;

class ProductRepository
{

    public function addProductWithImages(array $data): void
    {
        if (isset($data['images']) and is_array($data['images'])) {
            $images = $data['images'];
        } else {
            $images = [];
        }
        $product = Product::create($data);

        foreach ($images as $item) {
            $image = new ImageProduct();
            $image->url = $item;
            $image->product_id = $product->id;
            $image->save();
        }
    }

    public function addArrayProductWithImages(Collection $data): void
    {
        foreach ($data['products'] as $elem) {
            $this->addProductWithImages($elem);
        }
    }

}
