<?php

class UserProfile extends Eloquent
{
    protected $fillable = ['user_id', 'name'];

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}
