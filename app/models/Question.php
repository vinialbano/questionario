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
        return $this->belongsTo('Question', 'jump_to');
    }

    public function alternative(){
        return $this->belongsTo('Alternative');
    }

    public function getNext(){
        return Question::find($this->id + 1);
    }

    public function getPrevious(){
        return Question::find($this->id - 1);
    }

}
