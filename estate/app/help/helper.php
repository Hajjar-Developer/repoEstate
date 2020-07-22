<?php



function test(){
	echo 'test helper for hasan';
}
function getSetting($settingname ='sitename'){
	return \App\SiteSetting::where('namesetting',$settingname)->get()[0]->value;
}
function es_type(){
	$array=['flat','villa','normal',];
	return $array;
}
function es_rent(){
	$array=['مالك','مستأجر','مسترهن',];
	return $array;
}
function status(){
	$array=['active','non active',];
	return $array;
}


function es_room_number(){
	$array=[];
	for ($i=0; $i <=40 ; $i++) { 
		$array[$i]=$i;
	}
	return $array;

}
function search_name_field(){
		
	return[
		'es_price'=>'Price',
		'es_es_place'=>'Place',
		'es_rooms'=>'Number of rooms',
		'es_type'=>'Type',
		'es_rent'=>'Rent',
		'es_sequar'=>'Square',
		'es_price_from'=>'Price from',
		'es_price_to'=>'Price to',
	];
	 
}
function es_place(){
	$array=['allepo','dama','homs','lattakia',];
	return $array;

}
