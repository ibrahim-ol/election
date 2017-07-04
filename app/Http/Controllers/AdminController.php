<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function home(){
        $candidates = Candidate::with('post')->get();

        return view('admin.index')->withPosts(Post::all())->withCandidates($candidates);
    }

    public function addPost(Request $request){
        $validator = Validator::make($request->all(),['name'=>'required']);
        if($validator->passes()){
            $post = new Post();
            $post->title = $request->name;
            $post->save();

            Session::flash('message','Post saved successfully');

            return back();
        }else{
            return back()->withErrors($validator->errors()->all());
        }
    }

    public function addCandidate(Request $request){
        $validator = Validator::make($request->all(), ['name'=>'required', 'matric_no'=>'required|unique:candidates', 'post'=>'required']);
        if ($validator->passes()){
            $candidate = new Candidate();
            $candidate->name = $request->name;
            $candidate->matric_no = $request->matric_no;
            $candidate->post_id = $request->post;
            $candidate->save();

            Session::flash('message', 'Candidate saved succesfully');

            return back();
        }else{
            return back()->withErrors($validator->errors()->all());
        }
    }

    public function candidateDelete($id){
        Candidate::destroy($id);
        Session::flash('message', 'candidate delete successful');
        return back();
    }
}
