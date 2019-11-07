<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var boolean
	 */
	public $timestamps = false;

	/*a tag can be belong to a multiple campaigns
	e.g -> hotline
		-> black-friday-sale
		-> cooperative
		-> for-sale
	*/
		/*campaign_tag table*/
		public function campaigns()
		{
			return $this->belongsToMany(Campaign::class);
		}

		public function users(){
			return $this->belongsToMany(User::class);
		}

}
