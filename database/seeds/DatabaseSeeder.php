<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	// $this->call(Countries::class);
      $this->seed_countries_data();
      $this->seed_campaigns();
    }


    public function seed_countries_data(){
       // DB::table('countries')->truncate();
     $countries =  require 'countries_data.php';

     collect($countries)->each(function($item, $key){

      DB::table('countries')->insert([
        'id' => $key  , 
        'value' => $item
      ]); 

    });

     factory(App\User::class,10)->create();

   }   

  function seed_campaigns()
  {
   factory(App\Campaign::class,10)->create();
  }


}

