<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallary;
use App\Models\Product;
use Illuminate\Http\Request;

class Front extends Controller
{
    public function index()
    {
        $category = Category::all();
        $product = Product::take(4)->get();
        $gallary = Gallary::take(6)->get();
        return view('front.index')
            ->with('category', $category)
            ->with('product', $product)
            ->with('gallary', $gallary);
    }
    public function about()
    {
        $category = Category::all();
        return view('front.about')->with('category', $category);
    }
    public function products($categoryid = null)
    {
        if ($categoryid) {
            $product = Product::where('category_id', $categoryid)->get();
        } else {
            $product = Product::all();
        }
        $category = Category::all();
        return view('front.products')
            ->with('product', $product)
            ->with('category', $category)
            ->with('categoryid', $categoryid);
    }
    public function productdetail($productid)
    {
        $product = Product::where('id', $productid)->first();
        return view('front.productdetail')->with('product', $product);
    }
    public function gallary()
    {
        $gallary = Gallary::all();
        return view('front.gallary')->with('gallary', $gallary);
    }
    public function gallarydetail($gallaryid)
    {
        $gallary = Gallary::where('id', $gallaryid)->first();
        // dd($gallary);
        return view('front.gallarydetail')->with('gallary', $gallary);
    }
    public function contactus()
    {
        return view('front.contact');
    }
}
