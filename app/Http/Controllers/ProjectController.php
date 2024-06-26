<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Illuminate\Validation\Validator as ValidationValidator;
use InterventionImage; // For image manipulation (optional)
use Storage; // Laravel's storage facade

class ProjectController extends Controller
{

    public function listProject(){
        if(Auth::check()){
            $project = Project::where('Type','foto')->get();
            return view('admin.project',compact(['project']));
        }else{
            return redirect('/login');
        }
    }

    public function updateStatus($id){
        if(Auth::check()){
            $statusProject = Project::find($id);
            if($statusProject->status == 1){
                $statusProject->status = 0;
            }else{
                $statusProject ->status =1;
            }
            $statusProject->save();
            if($statusProject->type=='foto'){
                return redirect('/admin/project');
            }else{
                return redirect('/admin/project/video');
            }
            
        }else{
            return redirect('/login');
        }
    }

    public function uploadProject(Request $request){
        if(Auth::check()==false){
            return redirect('/login');
        }
        $project = new Project;
        $project->Project_Name = $request->input('Project_Name');
        $project->Description = $request->input('Description');
        $project->status = 0;
        $inputs=[];
        for($i=0; $i<=(count($request->all())); $i++){
            if($i == 0){
                $inputname = $request->input("judul_desc");
                $inputname1 = $request->input("deskripsi");
            }else{
                if($request->input("judul_desc$i")){
                    $inputname = $request->input("judul_desc$i");
                    $inputname1 = $request->input("deskripsi$i");
                }else{
                    break;
                }   
            }
            $fullinput = $inputname.";".$inputname1;
            $inputs[]=$fullinput;
        }
        $project->Type_Content = implode('%',$inputs);
        $project->Type = 'foto';
        if($request->hasFile('foto')){
            $uploadPath = "uploads/Project/";
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move($uploadPath, $filename);
            $project->filename = $uploadPath.$filename;
        }
        
        $project->save();
        return view('admin.another-image',compact(['request']));
        /* dd($request->hasFile('foto')); */
    }

    public function upload($project_name,Request $request){
        if(Auth::check()==false){
            return redirect('/login');
        }
        $project_id = Project::where('Project_Name',$project_name)->first();
        if($request->hasFile('file')){

            $uploadPath = "uploads/Content/";
    
            $file = $request->file('file');
    
            $extention = $file->getClientOriginalExtension();
            $filename = time().'-'.rand(0,99).'.'.$extention;
            $file->move($uploadPath, $filename);
    
            $finalImageName = $uploadPath.$filename;
            Content::create([
                'Project_Id' => $project_id->Project_id,
                'filename' =>$finalImageName,
            ]);
    
    
            return response()->json(['success' => 'Image Uploaded Successfully']);
        }
        else
        {
            return response()->json(['error' => 'File upload failed.']);
        }
    }

    public function delete($project_id){
        if(Auth::check()==false){
            return redirect('/login');
        }
        $project = Project::find($project_id);
        $content = Content::where('Project_Id',$project_id)->get();
        if(File::exists($project->filename)){
            File::delete($project->filename);
            foreach($content as $data){
                File::delete($data->filename);
            }
        }
            $project->delete();
        if($content){
            foreach($content as $data){
                $data->delete();
            }
        }
       
        

        return redirect('/admin/project');

        dd($content);
    }

    public function projectVideo(){
        if(Auth::check()==false){
            return redirect('/login');
        }
        $project = Project::where('Type','video')->get();
        return view('admin.project-video',compact(['project']));

    }

    public function uploadVideo(){
        if(Auth::check()==false){
            return redirect('/login');
        }
        return view('admin.upload-project-video');
    }

    public function storeVideo(Request $request){
        if(Auth::check()==false){
            return redirect('/login');
        }
        $project = new Project;
        $project->Project_Name = $request->input("Project_Name");
        $project->Description = $request->input("Description");
        $project->status = 0;
        $inputs=[];
        for($i=0; $i<=(count($request->all())); $i++){
            if($i == 0){
                $inputname = $request->input("judul_desc");
                $inputname1 = $request->input("deskripsi");
            }else{
                if($request->input("judul_desc$i")){
                    $inputname = $request->input("judul_desc$i");
                    $inputname1 = $request->input("deskripsi$i");
                }else{
                    break;
                }   
            }
            $fullinput = $inputname.";".$inputname1;
            $inputs[]=$fullinput;
        }
        $project->Type_Content = implode('%',$inputs);
        $project->Type = 'video';
        if($request->hasFile('foto')){
            $uploadPath = "uploads/Project/";
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move($uploadPath, $filename);
            $project->filename = $uploadPath.$filename;
        }
        $project->url = $request->input("Project_Url");
        $project->save();
        return redirect("admin/project/video");
    }

    public function deleteVideo($project_id){
        if(Auth::check()==false){
            return redirect('/login');
        }
        $project = Project::find($project_id);

        if(File::exists($project->filename)){
            File::delete($project->filename);
        }
            $project->delete();

        return redirect('admin/project/video');

    }

    //
}
