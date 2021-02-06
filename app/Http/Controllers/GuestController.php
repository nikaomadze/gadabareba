<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class GuestController extends Controller
{
   public function index()
    {
    	$posts = Products::withCount(['likes'])->get();
    	return view('welcome', ['posts'=>$posts]);
    } 
    public function show_single_page($id){
    	$post = Products::where('id', $id)->firstOrFail();
    	return view('show', ['post' => $post]);
    }
}