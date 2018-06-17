<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function contact(){
    	return view('contact');
    }

    public function submit_contact(Request $request){

    	dd($request);

    	return redirect('index');
    }
}
