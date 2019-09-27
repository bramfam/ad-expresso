<?php

use Illuminate\Database\Seeder;

class WebsiteTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_types')->truncate();

    	DB::table("website_types")->insert([
    		'website_type_name' => 'External Website',
    	]);

    	DB::table('website_types')->insert([
    		'website_type_name' => 'Right Hand Column',
    	]);

    	DB::table('website_types')->insert([
    		'website_type_name' => 'Carousel Ads',
    	]);

    	DB::table('website_types')->insert([
    		'website_type_name' => 'Lead Generation',
    	]);

    	DB::table('website_types')->insert([
    		'website_type_name' => 'Instagram Feed',
    	]);

    	DB::table('website_types')->insert([
    		'website_type_name' => 'Carousel Ads',
    	]);

    	DB::table('website_types')->insert([
    		'website_type_name' => 'Lead Generation',
    	]);


    	DB::table('website_types')->insert([
    		'website_type_name' => 'Instagram Feed',
    	]);

    }
}
