<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ref;
use App\Ref_locations;
use DataTables;

class front extends Controller
{
    public function index(){
    	$ref = new Ref();
    	$properties = $ref->getRandomProperties(10);
    	return view('vendor.rw-real-estate.home_rand', compact('properties'));
    }

    public function property($id){
    	$ref = new Ref();
    	$property = $ref->getProperty($id);
    	return view('vendor.rw-real-estate.property', compact('property'));
    }

    public function properties(Request $request){
    	
    	$ref_locations = new Ref_locations();
    	$locations = $ref_locations->getLocations();

    	if ($request->ajax()) {
    		$ref = new Ref();
    		$properties = $ref->getProperties();
	    	
	        return Datatables::of($properties)

	        ->addColumn('action', function($row){

	               $btn = '<a href="property/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>';

	               return $btn;

	        })

	        ->rawColumns(['action'])

	        ->make(true);
	        
	    }
    	return view('vendor.rw-real-estate.properties_list', compact('locations'));
    }
}
