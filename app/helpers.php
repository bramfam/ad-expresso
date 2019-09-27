<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

trait Helpers { 

	public function checkArraysLastValue(){
		$array = [100, 200, 300, 110];

		$last = array_last($array, function ($value, $key) {
			return $value >= 150;
		});
	

	}


	public function checkIfArrayHasEntry(){
		$fruits = array('first' => 'apples',   
			'second' => 'pears',   
			'third'  => 'oranges'
		);


		array_has($fruits, ['first']);
	}

}

