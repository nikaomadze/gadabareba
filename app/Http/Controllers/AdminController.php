<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\input;
use File;
use App\Category;

class AdminController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function create()
    {
    	return view('create');
    }
    public function create_category(){
    	return view('create_category');
    }
    public function save_category(Request $request){
    	Category::create([
    		'category' => $request->input('category')
    	]);
    	return redirect()->back();
    }
    public function save(Request $request){
    	if (Input::file("image")){
            $dp = public_path("images");
            $filename = uniqid().".jpg";
            $img = Input::file("image")->move($dp, $filename);
        }
        Products::create([
        	'title' => $request->input('title'),
        	'price' => $request->input('price'),
        	'image' => $filename,
        	'desc' => $request->input('desc'),
        	'category_id' => $request->input('category_id')
        ]);
        return redirect()->back();
    }
}
