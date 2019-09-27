<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Campaign;
use Faker\Generator as Faker;

$factory->define(App\Campaign::class, function (Faker $faker) {
    return [
    	'name' => $faker->text(20), 
    	'creator_id' => function(){
    		return User::all()->random()->id ;
    	},
    	'billing_account_id' => $faker->company 
    ];
});
