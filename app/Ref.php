<?php

namespace App;

use Illuminate\Support\Facades\DB;

use RefineriaWeb\RWRealEstate\Models\Property;

class Ref extends Property
{
	public function getProperties(){
		$properties = DB::table($this->table)
			->join('properties_features', $this->table.'.id', '=', 'properties_features.property_id')
			->join('locations', $this->table.'.location_id', '=', 'locations.id')
			->select( $this->table.'.id', $this->table.'.name', $this->table.'.description', 'locations.name AS location_name', 'properties_features.price', 'properties_features.reference')
			->orderBy('locations.name', 'asc')
			->get();
		return $properties;
	}

	public function getRandomProperties($num = 10){
		$properties = DB::table($this->table)
			->join('properties_features', $this->table.'.id', '=', 'properties_features.property_id')
			->join('locations', $this->table.'.location_id', '=', 'locations.id')
			->inRandomOrder()
			->take($num)
			->select($this->table.'.name', $this->table.'.description', 'locations.name AS location_name', 'properties_features.bathrooms', 'properties_features.bedrooms', 'properties_features.price', 'properties_features.built_area')
			->get();
		return $properties;
	}

	public function getProperty($id){
		$property = DB::table($this->table)
			->join('properties_features', $this->table.'.id', '=', 'properties_features.property_id')
			->join('locations', $this->table.'.location_id', '=', 'locations.id')
			->join('agents', $this->table.'.agent_id', '=', 'agents.id')
			->join('properties_types', $this->table.'.properties_type_id', '=', 'properties_types.id')
			->select($this->table.'.id', $this->table.'.name', $this->table.'.description', 'locations.name AS location_name', 'properties_types.type AS property_type',
			'agents.name AS agent_name', 'properties_features.bathrooms', 'properties_features.bedrooms', 'properties_features.reference', 'properties_features.price', 'properties_features.built_area', 'properties_features.land_area', 'properties_features.private_pool', 'properties_features.community_pool', 'properties_features.garden', 'properties_features.garaje')
			->where($this->table.'.id', '=', $id)
			->first();
		return $property;
	}
}
