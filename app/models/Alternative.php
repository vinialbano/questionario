<?php

class Alternative extends Eloquent
{

    public function question(){
        return $this->belongsToMany('Question')->withTimestamps();
    }

}
