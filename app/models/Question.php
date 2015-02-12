<?php

class Question extends Eloquent
{

    public function alternatives(){
        return $this->belongsToMany('Alternative')->withTimestamps();
    }

    public function next(){
        $next = Question::where('scene', '=', $this->scene)->where('id', '>', $this->id)->first();
        if($next == null) {
            $next = Question::where('scene', '=', $this->scene + 1)->first();
        }
        return $next;
    }

}
