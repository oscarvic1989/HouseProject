<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\House;
use Illuminate\Support\Facades\Auth;

class Build extends Controller
{
    //
	public function selectType(Request $request){
		
		$house = new House;
		$user = Auth::user();
		$house->user_id = $user->id;

 	    if ($house->save())
 			return view('selectHouseType')->with('house', $house);
//
	}
	
	public function HouseselectType(Request $request){
		
		$house = House::find($request->house_id);
		$user = Auth::user();
		switch ($request->selected_image)
		{
		case 1:
		  $house->plan = 1;
		  break;
		case 2:
		  $house->plan = 2;
		  break;
		case 3:
		  $house->plan = 3;
		  break;
  		case 4:
  		  $house->plan = 4;
  		  break;
  		case 5:
  		  $house->plan = 5;
  		  break;
  		case 6:
  		  $house->plan = 6;
  		  break;
		}
 	    if ($house->save())
 			return view('BuildMyHouse')->with('house', $house);
	}
}
