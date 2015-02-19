<?php

class Comment extends Eloquent
{

    protected $fillable = array('comment');

    public function getFormatedDate(){
        setLocale(LC_TIME, 'pt-BR');
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->formatLocalized('%e %b. %Y');
    }

    public function getFormatedTime(){
        setLocale(LC_TIME, 'pt-BR');
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->formatLocalized('%H:%M');
    }

    public function getDate(){
        return $this->updated_at;
    }

    public function getCommentFromDate($date){
        return $this->select('comment')->where('updated_at', '=', $date)->get();
    }

}
