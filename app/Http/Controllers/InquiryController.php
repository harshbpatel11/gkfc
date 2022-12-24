<?php

namespace App\Http\Controllers;

use App\DataTables\InquiryDataTable;
use App\Models\Inquiry;
use App\Http\Requests\StoreInquiryRequest;
use App\Http\Requests\UpdateInquiryRequest;

use Illuminate\Http\Request as HttpRequest;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InquiryDataTable $dataTable, HttpRequest $request)
    {
        return $dataTable->render('gkfc.inquiry.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gkfc.inquiry.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInquiryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|max:255',
            'message' => 'required',
            'phone' => 'required|max:12',
            'subject' => 'required'
        ]);
        if ($request->input('id')) {
            $inquiry = Inquiry::find($request->input('id'));
        } else {
            $inquiry = new Inquiry;
        }

        $inquiry->fullname = $request->input('fullname');
        $inquiry->email = $request->input('email');
        $inquiry->message = $request->input('message');
        $inquiry->phone = $request->input('phone');
        $inquiry->subject = $request->input('subject');
        $inquiry->save();
        if ($request->input('id')) {
            return redirect('inquiry')->with('success', 'Inquiry Update Successfully!');
        } else {
            return redirect('inquiry')->with('success', 'Inquiry Added Successfully!');
        }
    }

    public function storeDirect(HttpRequest $request)
    {

        $request->validate([
            // 'fullname' => 'required',
            'EMAIL' => 'required_if:email,null|email|max:255',
            'email' => 'required_if:EMAIL,null|email|max:255',
            // 'message' => 'required',
            // 'phone' => 'required|max:12',
            // 'subject' => 'required'
        ]);
        if ($request->input('id')) {
            $inquiry = Inquiry::find($request->input('id'));
        } else {
            $inquiry = new Inquiry;
        }

        $inquiry->fullname = $request->input('fullname');
        if ($request->input('EMAIL')) {
            $inquiry->email = $request->input('EMAIL');
        } else {
            $inquiry->email = $request->input('email');
        }
        $inquiry->message = $request->input('message');
        $inquiry->phone = $request->input('phone');
        $inquiry->subject = $request->input('subject');
        $inquiry->save();
        return redirect('contactus')->with('success', 'Inquiry Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show($inquiryid)
    {
        $inquiry = Inquiry::where('id', '=', $inquiryid)->get()->first();
        return view('gkfc.inquiry.add')->with('inquiry', $inquiry);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInquiryRequest  $request
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInquiryRequest $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy($inquiryid)
    {
        Inquiry::where('id', $inquiryid)->delete();
        return redirect('inquiry')->with('success', 'Category Deleted Successfully!');
    }
}
