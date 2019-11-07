<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
	protected $guarded = [];

	/**
	* Campaign belongs to User.
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	public function user()
	{
		return $this->belongsTo(User::class,'user_id','id');
	}



	/*A campaign can have many tag*/
	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}


	/*the Click Through Rate Formula*/
	public function click_through_rates($number_of_clicks, $total_emails_sent)
	{
		return $this->number_of_clicks / ($total_emails_sent - $bounces);
	}



/*
getting a campaign's contributors 
through the milestones it has 

campaigns
id - integer
display_name - string
motto - string

milestones
user_id - integer (user_id)
group_id - integer
full_name - string

skills
id - integer
group_member_id(group_members) - integer
skill_name - string
*/
	public function contributors(){   
		return $this->hasManyThrough(Milestone::class, Contributor::class);
	}


	public static function of_current_user(){
		return static::where('creator_id','=',auth()->user()->id);
	}


	/*that are listed by the logged on user.*/
	public function scopeAvailable(){
		return $this->where('user_id','=',$this->id);
	}
	
}
