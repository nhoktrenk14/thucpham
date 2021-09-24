<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at','DESC')->seach()->paginate(15);
        return view('admin.pages.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $category = Category::all();
        $Brand = Brand::all();
        return view('admin.pages.product.create',compact('category','Brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'regular_price' => 'required',
            'promotional_price' => 'required',
            'files' => 'required',
        ], [
            'name.required' => 'Không được nhập thiếu tên',
            'files.required' => 'Hãy chọn ảnh',  
            'category_id.required' => 'Không được nhập thiếu danh mục',
            'brand_id.required' => 'Không được nhập nhãn hàng',
            'regular_price.required' => 'Không được nhập thiếu giá tiền',
            'promotional_price.required' => 'Không được nhập thiếu giá tiền khuyến mãi',
        ]);

        if($request->hasFile('files')){

            //Storage::delete('/public/avatars/'.$user->avatar);

            // Get filename with the extension
            $filenameWithExt = $request->file('files')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('files')->getClientOriginalExtension();

            $exceptFiles = ['png', 'png', 'jpeg', 'jpg'];

            if(!in_array($extension, $exceptFiles)){
                die('file khong hop le');
            }
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $request->file('files')->move(public_path('uploads/products'), $fileNameToStore);
        }

        Product::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'regular_price'=>$request->regular_price,
            'promotional_price'=>$request->promotional_price,
            'status'=>$request->status,
            'description'=>$request->description,
            'image' => $fileNameToStore ?? null,
        ]);
        return redirect()->route('product-index')->withSuccess('Thêm mới thành công');
        // return redirect
    }

    /**
     * Display the specified resource.
     *
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {   
        $products = $product;
        $category = Category::all();
        $Brand = Brand::all();
        return view('admin.pages.product.edit',compact('category','Brand','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Product $product)
    {
        if($request->hasFile('files')){

            //Storage::delete('/public/avatars/'.$user->avatar);

            // Get filename with the extension
            $filenameWithExt = $request->file('files')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('files')->getClientOriginalExtension();

            $exceptFiles = ['png', 'png', 'jpeg', 'jpg'];

            if(!in_array($extension, $exceptFiles)){
                die('file khong hop le');
            }
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $request->file('files')->move(public_path('uploads/products'), $fileNameToStore);
        }
        $product->update([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'regular_price'=>$request->regular_price,
            'promotional_price'=>$request->promotional_price,
            'status'=>$request->status,
            'description'=>$request->description,
            'image' => $fileNameToStore ?? null,
        ]);
        return redirect()->route('product-index')->withSuccess('Cập nhật thành công');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product-index')->withSuccess('success','Dữ liệu xóa thành công.');
    }
}
