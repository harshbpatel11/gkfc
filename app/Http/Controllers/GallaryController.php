<?php

namespace App\Http\Controllers;

use App\DataTables\GallaryDataTable;
use App\Models\Gallary;
use App\Http\Requests\StoreGallaryRequest;
use App\Http\Requests\UpdateGallaryRequest;

use Illuminate\Http\Request as HttpRequest;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GallaryDataTable $dataTable, HttpRequest $request)
    {
        return $dataTable->render('gkfc.gallary.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gkfc.gallary.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGallaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request)
    {
        $request->validate([
            'gallarydescription' => 'required',
            'gallaryname' => 'required|max:255',
            'gallaryimage' => 'image|mimes:png,jpg,jpeg'
        ]);
        if ($request->input('id')) {
            $gallary = Gallary::find($request->input('id'));
            $myimage = $gallary->gallaryimage;
        } else {
            $gallary = new Gallary;
            $myimage = '';
        }

        if ($request->file()) {
            $destinationPath = 'uploads';
            $myimage = time() . $request->gallaryimage->getClientOriginalName();
            $request->gallaryimage->move(public_path($destinationPath), $myimage);
        }
        $gallary->gallaryname = $request->input('gallaryname');
        $gallary->gallarydescription = $request->input('gallarydescription');
        $gallary->gallaryimage = $myimage;
        $gallary->save();
        if ($request->input('id')) {
            return redirect('gallary')->with('success', 'Gallary Update Successfully!');
        } else {
            return redirect('gallary')->with('success', 'Gallary Added Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallary  $gallary
     * @return \Illuminate\Http\Response
     */
    public function show($gallaryid)
    {
        $gallary = Gallary::where('id', '=', $gallaryid)->get()->first();
        return view('gkfc.gallary.add')->with('gallary', $gallary);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallary  $gallary
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallary $gallary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGallaryRequest  $request
     * @param  \App\Models\Gallary  $gallary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGallaryRequest $request, Gallary $gallary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallary  $gallary
     * @return \Illuminate\Http\Response
     */
    public function destroy($gallaryid)
    {
        Gallary::where('id', $gallaryid)->delete();
        return redirect('gallary')->with('success', 'Gallary Deleted Successfully!');
    }
}
