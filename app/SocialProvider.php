<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider_id', 'provider',
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
