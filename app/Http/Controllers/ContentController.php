<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Project;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        $project = Project::where('status',1)->where('type', 'foto')->get();
        return view('welcome',compact(['project']));
    }

    public function detailWork($project_name){
        $project = Project::where('Project_Name',$project_name)->first();
        $content = Content::where('Project_Id',$project->Project_id)->get();
        return view('detail-work',compact(['project'],['content']));



    }
    public function work(){
        $contentlast = Project::all()->last();
        $project = Project::where('type','foto')->get();
        $projectVideo = Project::where('type','video')->where('status',1)->get();
        return view('work',compact(['contentlast'],['project'],['projectVideo']));
    }

    public function detailVideo($project_id){
        $project = Project::find($project_id);
        return view("detail-work-video",compact(['project']));
    }
    /* public function detailVideo(){
        $project = Project::where('status','video')->
    }
 */
}
