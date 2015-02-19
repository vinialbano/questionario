<?php

class Alternative extends Eloquent
{
    protected $fillable = array('text');

    public function questions(){
        return $this->belongsToMany('Question')->withTimestamps();
    }

    public function answers(){
        return $this->belongsToMany('Answer')->withTimestamps();
    }

}
