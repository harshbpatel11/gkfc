<?php

namespace App\Http\Controllers;

use App\DataTables\ProductDataTable;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Http\Request as HttpRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductDataTable $dataTable, HttpRequest $request)
    {
        return $dataTable->render('gkfc.product.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('gkfc.product.add')->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request)
    {
        $request->validate([
            'productdescription' => 'required',
            'category_id' => 'required',
            'name' => 'required|max:255',
            'productimage' => 'image|mimes:png,jpg,jpeg'
        ]);
        if ($request->input('id')) {
            $product = Product::find($request->input('id'));
            $myimage = $product->productimage;
        } else {
            $product = new Product;
            $myimage = '';
        }

        if ($request->file()) {
            $destinationPath = 'uploads';
            $myimage = time() . $request->productimage->getClientOriginalName();
            $request->productimage->move(public_path($destinationPath), $myimage);
        }
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->productdescription = $request->input('productdescription');
        $product->productimage = $myimage;
        $product->save();
        if ($request->input('id')) {
            return redirect('product')->with('success', 'Product Update Successfully!');
        } else {
            return redirect('product')->with('success', 'Product Added Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($productid)
    {
        $category = Category::all();
        $product = Product::where('id', '=', $productid)->get()->first();
        return view('gkfc.product.add')->with('product', $product)->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($productid)
    {
        Product::where('id', $productid)->delete();
        return redirect('product')->with('success', 'Product Deleted Successfully!');
    }
}
