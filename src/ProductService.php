<?php

namespace Davit37\PhpUnit;

class ProductService
{
    public function __construct(private ProductRepository $repository){}

    public function register(Product $product): Product
    {
        if($this->repository->findByID($product->getId()) != null) {
            throw new \Exception("Product is already exist");
        }
        return $this->repository->save($product); 
    }
}