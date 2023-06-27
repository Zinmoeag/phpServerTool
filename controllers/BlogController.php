<?php

class BlogController {
	
	public function index(){

		return view("blog",[
			"blogs" => Blog::all(),
		]);

	}
}