<?php

class ArtistController {

	public function index(){

		$artists = Artist::where("id",2)->get();
		// $artists = Artist::all();

		return view("artist",[
			"artists" => $artists,
		]);
	}
}