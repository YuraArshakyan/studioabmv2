<?php

namespace App\Http\Controllers;

use App\Models\submited_forms;
use Illuminate\Http\Request;

class SubmitedFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->form_name == "Contacts"){
            return response()->json(['status'=>'Contacts']);
        }
        if($request->form_name == "Updates"){
            return response()->json(['status'=>'NotContacts']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(submited_forms $submited_forms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(submited_forms $submited_forms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, submited_forms $submited_forms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(submited_forms $submited_forms)
    {
        //
    }
}
