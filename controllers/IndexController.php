<?php

// $builder = new QueryBuilder($connection,"blogs");
// $builder->all();
// // dd($builder->where("body","%"."delect"."%","like")->get());
// // dd($builder->where("id",3)->get());





class IndexController
{
	function index(){
		
		return "./views/index.view.php";
	}
}

$page = new IndexController;

require($page->index());