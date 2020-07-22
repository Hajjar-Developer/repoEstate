<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SittingController extends Controller
{
    public function index(Sitting $sitting){
    	
   		$sitting=$sitting->all();
    	return view('admin.sitesetting.index',compact(sitting));
    }
}
