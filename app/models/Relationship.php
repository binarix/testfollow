<?php

class Relationship extends Eloquent
{
    protected $fillable = ['follower_id', 'followed_id'];

    public function follower()
    {
        return $this->belongsTo('User', 'follower_id');
    }

    public function followed()
    {
        return $this->belongsTo('User', 'followed_id');
    }
}
