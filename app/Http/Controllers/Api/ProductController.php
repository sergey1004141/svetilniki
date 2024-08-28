<?php


namespace App\Http\Controllers\Api;

use App\Traits\ProductsTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Http\Response;

class ProductController extends Controller
{
    use ProductsTrait;

    public function get(Request $request)
    {
        return Response($this->getProducts($request), 200);
    }
}
