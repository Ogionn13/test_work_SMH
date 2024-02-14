<?php

namespace App\Services;

use GuzzleHttp\Promise\PromiseInterface;
use http\Client\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class LoadService
{

    const TYPE_ENTITY_PRODUCT = 'product';
    protected function getCollection(string $type_entity, string $title): Collection
    {
        $url = "https://dummyjson.com/$type_entity";
        if (strlen($title)) {
            $url .= "/search?q=$title";
        }
        return Http::get($url)->collect();
    }

    protected function add(string $type_entity, array $data): bool
    {
        $url = "https://dummyjson.com/$type_entity/add";
        $response =  Http::withHeaders(['Content-Type' => 'application/json'])->post($url, $data);
        return $response->ok();
    }

    public function getProductsByTitle(string $title): Collection
    {
        return $this->getCollection(self::TYPE_ENTITY_PRODUCT, $title);
    }

    public function addProduct(array $data):bool
    {
        return $this->add(self::TYPE_ENTITY_PRODUCT, $data);
    }

}
