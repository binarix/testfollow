<?php

class Userprofile extends Eloquent
{
    protected $fillable = ['user_id', 'name'];

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}
