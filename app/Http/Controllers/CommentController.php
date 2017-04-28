<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	
        return view('blog.show');
    }

    public function show(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newcomment = Comment::create($request->all());
        $comments = Comment::get();
        return redirect('/blog/ ');
    }



     public function show_comments()

    {   
        
       $comy = Comment::get();
       $post = Post::get();
        return view('blog.comments',compact('comy','post'));
    }


    
    public function destroy($id)
    {
    
    Comment::destroy($id);
    return redirect('/blog/admin/comment/ ');
 
    }


    
}
