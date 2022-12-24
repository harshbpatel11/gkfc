<?php

namespace App\Http\Controllers;

use App\DataTables\CategoryDataTable;
use App\Models\Category;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request as HttpRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryDataTable $dataTable, HttpRequest $request)
    {
        return $dataTable->render('gkfc.category.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gkfc.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request)
    {
        $request->validate([
            'categoriesdescription' => 'required',
            'categoriesname' => 'required|max:255',
            'categoriesimage' => 'image|mimes:png,jpg,jpeg'
        ]);
        if ($request->input('id')) {
            $category = Category::find($request->input('id'));
            $myimage = $category->categoriesimage;
        } else {
            $category = new Category;
            $myimage = '';
        }

        if ($request->file()) {
            $destinationPath = 'uploads';
            $myimage = time() . $request->categoriesimage->getClientOriginalName();
            $request->categoriesimage->move(public_path($destinationPath), $myimage);
        }
        $category->categoriesname = $request->input('categoriesname');
        $category->categoriesdescription = $request->input('categoriesdescription');
        $category->categoriesimage = $myimage;
        $category->save();
        if ($request->input('id')) {
            return redirect('category')->with('success', 'Category Update Successfully!');
        } else {
            return redirect('category')->with('success', 'Category Added Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($categoryid)
    {
        $category = Category::where('id', '=', $categoryid)->get()->first();
        return view('gkfc.category.add')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($categoryid, HttpRequest $request)
    {
        // dd($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryid)
    {
        Category::where('id', $categoryid)->delete();
        return redirect('category')->with('success', 'Category Deleted Successfully!');
    }
}
