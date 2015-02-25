<?php

class Question extends Eloquent
{

    protected $fillable = array('text', 'display_text', 'multianswer', 'allow_other', 'other_text', 'scene');

    public function alternatives(){
        return $this->belongsToMany('Alternative')->withTimestamps();
    }

    public function answers(){
        return $this->hasMany('Answer')->withTimestamps();
    }

    public function jumpTo(){
        return $this->hasOne('Question', 'jump_to');
    }

    public function alternative(){
        return $this->hasOne('Alternative');
    }

    public function getNext(){
        $next = Question::where('scene', '=', $this->scene)->where('id', '>', $this->id)->first();
        if($next == null) {
            $next = Question::where('scene', '=', $this->scene + 1)->first();
        }
        return $next;
    }

    public function getPrevious(){
        $previous = Question::where('scene', '=', $this->scene)->where('id', '<', $this->id)->orderBy('id', 'desc')->first();
        if($previous == null) {
            $previous = Question::where('scene', '=', $this->scene - 1)->orderBy('id', 'desc')->first();
        }
        return $previous;
    }

}
