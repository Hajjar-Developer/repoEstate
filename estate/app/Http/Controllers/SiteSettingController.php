<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use DB;
use RealRashid\SweetAlert\Facades\Alert;


class SiteSettingController extends Controller
{
   public function index(SiteSetting $sitesettings){
    	 
   		$sitesetting= $sitesettings->all();
    //  dd($sitesetting);
    	return view('admin.sitesetting.index',compact('sitesetting'));
    }
    public function store(Request $request ,SiteSetting $sitesetting ){
     // $input=   Arr::except($request->toArray, ['_token','submit']);


      $input = $request->only(['nameseting', 'value']);
        dd($input);
    	foreach ( $input as $key=> $req) {
		  $sitesettingUpdate=$sitesetting->where('namesetting', $key)->get()[0];
    	$sitesettingUpdate->fill(['value'=>$req])->save();
      
    	}
              alert()->success('succesfull Add settings','will disappear after few seconds.');
    	return Redirect::back()->withFlashMessage("sucssfull into edite settings");

    }
}
