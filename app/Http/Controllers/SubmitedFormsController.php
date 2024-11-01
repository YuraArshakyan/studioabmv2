<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\submited_forms;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\formSubmited;
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
            if( $request->name == null  || $request->phone == null || $request->message == null){
                return response()->json(['status'=>'error']);
            }
            $create_data = submited_forms::create([
                'Name' => $request->name,
                'Phone' => $request->phone,
                'Message' => $request->message,
                'form' => 'Contacts',
                'status' => 'success',
                'sent_to_reserve_email' => 'no',
            ]);
            $create_data->save();
            Mail::to('yuraarshakyan988@gmail.com')->send(new formSubmited($request->name, $request->phone, $request->message));
            
            
            return response()->json(['status'=>'success']);
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
