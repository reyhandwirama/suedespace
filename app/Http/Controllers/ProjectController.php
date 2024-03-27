<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();
        dd($project);
/*         return view('listProject.index',compact($project));
 */    }
    //
}
