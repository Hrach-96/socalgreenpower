<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	protected $layoutFolder = "pages";
	public function main(){
        return view("{$this->layoutFolder}.home");
	}
	public function contact_us(Request $request){
        if($request->isMethod('post')){
        	dd(111);
		}
        return view("{$this->layoutFolder}.contact_us");
	}
	public function about_us(){
        return view("{$this->layoutFolder}.about_us");
	}
	public function testimonials(){
        return view("{$this->layoutFolder}.testimonials");
	}
	public function services(){
        return view("{$this->layoutFolder}.services");
	}
	public function gallery(){
        return view("{$this->layoutFolder}.gallery");
	}
}
