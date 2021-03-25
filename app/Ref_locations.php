<?php

namespace App;

use Illuminate\Support\Facades\DB;

use RefineriaWeb\RWRealEstate\Models\Location;

class Ref_locations extends Location
{
	public function getLocations(){
		$locations = DB::table($this->table)
			->orderBy('name', 'asc')
			->get();
		return $locations;
	}

}
