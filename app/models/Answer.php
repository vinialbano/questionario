<?php

class Answer extends Eloquent
{

    protected $guarded = array('id');

    public function question() {
        return $this->belongsTo('Question');
    }

    public function alternatives() {
        return $this->belongsToMany('Alternative')->withTimestamps();
    }

}
