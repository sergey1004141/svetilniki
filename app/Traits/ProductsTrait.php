<?php

namespace App\Traits;

use App\Models\Products;
use Illuminate\Http\Request;

trait ProductsTrait
{
    public function getProducts(Request $request) {

        return Products::getProduct(explode(',', $request->properties))->get()->toArray();
    }
}
