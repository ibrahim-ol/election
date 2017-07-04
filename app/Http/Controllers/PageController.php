<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        $posts =  Post::with('candidates')->get();
        return view('voters.landing')->withPosts($posts);
    }

    public function vote(Request $request){

        foreach( $request->can as $post){
            foreach($post as $p){
                $candidate = Candidate::find($p);
                $candidate->votes +=1;
                $candidate->save();
            }
        }
        return redirect()->to(route('admin.home'));
    }
}
