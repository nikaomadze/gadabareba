<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Comments;
use App\Likes;
use Auth;

class UserController extends Controller
{
    public function index()
    {
    	$posts = Products::withCount(['likes'])->get();
    	return view('user_home', ['posts' => $posts]);
    }
    public function show_single_page($id){
    	$post = Products::with(['comments'])->where('id', $id)->firstOrFail();
    	return view('user_show', ['post' => $post]);
    }
    public function save_comment(Request $request){
    	Comments::create([
    		'comment' => $request->input('comment'),
    		'post_id' => $request->input('post_id')
    	]);
    	return redirect()->back();
    }
    public function like($id){
    	Likes::create([
    		'like_amount' => 1,
    		'post_id' => $id,
    		'user_id' => Auth::user()->id
    	]);
    	return redirect()->back();
    }
}