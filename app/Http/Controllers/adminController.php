<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\config;
use App\Models\submited_forms;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FormsExport;
use Illuminate\Support\Facades\File;




class adminController extends Controller
{
    function index(){
        return view('admin/admin_login');
    }
    function login(Request $request){
        if($request->email == null || $request->password == null){
            return redirect()->back();
        }

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            
            return redirect()->route('adminController.admin_dash');
        }else{
            // notify()->error('error');
            return redirect()->back();
        }
    }

    function admin_index_dash(){
        $forms = submited_forms::all()->sortByDesc("created_at");
        $today = date('Y-m-d');
        $today_forms = count(submited_forms::whereDate('created_at', $today)->get());
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $yesterday_forms = count(submited_forms::whereDate('created_at', $yesterday)->get());
        $forms_count = 0;
        if($forms != null){
            $forms_count = count($forms);
        }
        return view('admin/admin_index')->with(compact('forms', 'forms_count', 'today_forms', 'yesterday_forms'));
    }

    function admin_config(){
        $email = config::where('key', 'email')->get();
        $reserveEmail = config::where('key', 'reserveEmail')->get();
        $title = config::where('key', 'title')->get();
        $favicon = config::where('key', 'favicon')->get();
        $FrontEmail = config::where('key', 'FrontEmail')->get();
        $FrontPhone = config::where('key', 'FrontPhone')->get();
        $FacebookLink = config::where('key', 'FacebookLink')->get();
        $InstagramLink = config::where('key', 'InstagramLink')->get();
        $workingHoursFront = config::where('key', 'workingHoursFront')->get();
        $Address = config::where('key', 'Address')->get();

        return view('admin/admin_config')->with(compact('email', 'title', 'favicon', 'FrontEmail', 'FrontPhone', 'FacebookLink', 'InstagramLink', 'workingHoursFront', 'Address', 'reserveEmail'));   
    }

    function admin_settings(){

        return view('admin/admin_settings');   
    }

    function exportForms(){
        $name = 'form_Contacts_' . date('m-d-y') .'.xlsx';
        return Excel::download(new FormsExport(), $name);
    }
    public function changeConfigFront(Request $request){

        $get_val= config::where('key', 'FrontEmail')->get();
        if($get_val[0]->value != $request->emailFront){
            $get_val[0]->value = $request->emailFront;
            $get_val[0]->save();
        }

        $get_val= config::where('key', 'FrontPhone')->get();
        if($get_val[0]->value != $request->phoneFront){
            $get_val[0]->value = $request->phoneFront;
            $get_val[0]->save();
        }

        $get_val= config::where('key', 'FacebookLink')->get();
        if($get_val[0]->value != $request->facebookLink){
            $get_val[0]->value = $request->facebookLink;
            $get_val[0]->save();
        }

        $get_val= config::where('key', 'InstagramLink')->get();
        if($get_val[0]->value != $request->instagramLink){
            $get_val[0]->value = $request->instagramLink;
            $get_val[0]->save();
        }

        $get_val= config::where('key', 'workingHoursFront')->get();
        if($get_val[0]->value != $request->workingHoursFront){
            $get_val[0]->value = $request->workingHoursFront;
            $get_val[0]->save();
        }

        $get_val= config::where('key', 'Address')->get();
        if($get_val[0]->value != $request->summernote_address_input){
            $get_val[0]->value = $request->summernote_address_input;
            $get_val[0]->save();
        }


        return redirect()->back();
    }

    function logOut(){
        Auth::logout();

        session()->flush();

        return redirect('/');
    }
}
