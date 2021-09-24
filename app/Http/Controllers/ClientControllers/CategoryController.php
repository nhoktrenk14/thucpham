<?php
namespace App\Http\Controllers\ClientControllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @params Request $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Category $category)
    {
        $product = Product::where('category_id',$category->id)->get();
        return view('client.pages.category.index',compact('product'));
    }
}
