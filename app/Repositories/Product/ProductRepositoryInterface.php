<?php

namespace App\Repositories\Product;

use App\Repositories\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface
{
    // VD: Lấy 4 sản phẩm mới nhất
    public function getProduct();
}
