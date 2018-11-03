<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Country;
class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json = Storage::get('data/countries.json');
        $arrJson = json_decode($json,true);

        $arrCountry = [];
        foreach ($arrJson['countries'] as $intKey => $country) 
        {
        	$country['status'] = 0;
        	if($country['name'] == "India")
        	{
        		$country['status'] = 1;
        	}
        	unset($country['id']);
        	$arrCountry[] = $country;
        }
        
        Country::insert($arrCountry);
    }
}
