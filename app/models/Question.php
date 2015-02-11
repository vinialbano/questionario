<?php

class Question extends Eloquent
{

    public function alternatives(){
        return $this->belongsToMany('Alternative')->withTimestamps();
    }

    public function flow(){
        return $this->hasOne('Flow');
    }

}
