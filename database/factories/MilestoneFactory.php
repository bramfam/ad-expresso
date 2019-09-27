<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Milestone;
use Faker\Generator as Faker;

$factory->define(Milestone::class, function (Faker $faker) {
	return [
		'milestone_description' => $faker->paragraph, 
		'project_id' => function(){
			DB::table('projects')->get()->random()->id;
		},
	];
});

