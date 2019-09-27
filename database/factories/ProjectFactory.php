<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use App\Milestone;
use Carbon\Carbon; 
use Faker\Generator as Faker;


$factory->define(Project::class, function (Faker $faker) {
	// Project::truncate();
    return [
    	'title' => $faker->text(20), 
    	'project_description' => $faker->paragraph, 
    	'deadline_date' => Carbon::now()->addDay()
    ];
});
