<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// starting with this..


class SocialAccount extends Model
{
    protected $fillable = ['user_id','provider_user_id','provider'];

    /**
     * Social Account belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	// belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
    	return $this->belongsTo(User::class);
    }

}
