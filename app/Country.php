<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Country extends Model
{
	public $incrementing = false;
	
	/**
	 * Country has many Users.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function users()
	{
		// hasMany(RelatedModel, foreignKeyOnRelatedModel = country_id, localKey = id)
		return $this->hasMany(User::class);
	}



}
