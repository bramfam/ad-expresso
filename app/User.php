<?php

namespace App;
use Carbon\Carbon ;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    protected $fillable = [        
     'provider',
     'provider_id'
 ] ; 

 protected $redirectTo = '/';

    // Total Impressions = (Total Cost or Budget) * (1000/CPM)

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * User has many Campaigns.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function campaigns()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = user_id, localKey = id)
        return $this->hasMany(Campaign::class);
    }


    /**
     * User belongs to a Country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        // belongsTo(RelatedModel, foreignKey = country_id, keyOnRelatedModel = id)
        return $this->belongsTo(Country::class);
    }

    /*returning user's full name*/
    public function full_name(){
        return $this->first_name ." ". $this->last_name ;
    }

/*
    A user can have many campaigns(Campaigns) and each campaign(campaign) have many milestones
skills -> jiujitsu, taekwondo, hand to hand, ardigma
what if we want to get the users milestones
user
    id - integer
    first_name - string
    email - string

campaigns
    id
    creator_id - integer (from users.id)
    group_id - integer
    full_name - string
    
skills
    id - integer
    group_member_id(group_members) - integer
    skill_name - string
*/
public function social_accounts()
{
    return $this->hasMany(SocialAccount::class);
}

}
