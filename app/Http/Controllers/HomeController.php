<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class HomeController extends Controller
{
    public function index(){
        $data['projects'] = Project::all();

    	return view('index', $data);
    }

    public function contact(){
    	return view('contact');
    }

    public function submit_contact(Request $request){

    	dd($request);

    	return redirect('index');
    }

    public function project_form(){
        return view('projects');
    }

    public function project_submit(Request $request){
        $project = new Project;

        $project->name = $request->name;
        $project->description = $request->description;
        $project->link = $request->link;
        $project->narrow_img = $request->narrow_img;
        $project->wide_img = $request->wide_img;
        $project->button = $request->button;
        $project->save();


        return back();
    }
}
