<?php 

// namespace database\seeds;

use App\Models\Place;
use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
	
	public function run()
	{
		Place::truncate();

		Place::create([
			'name_place'		=> 'BETA FST UNAIR',
			'price_black'		=> 250,
			'price_color'		=> 400,
			]);
		Place::create([
			'name_place'		=> 'FEB UNAIR',
			'price_black'		=> 250,
			'price_color'		=> 400,
			]);
	}
}

