<?php
namespace App\Http\Controllers\ClientControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @params Request $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('client.pages.index');
    }
    public function product_detail(Request $request, Product $product)
    {
        $product = Product::find($product);
        dd($product);
    }
}
