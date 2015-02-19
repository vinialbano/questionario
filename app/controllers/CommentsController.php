<?php

class CommentsController extends BaseController {

    public function create() {

        if(!Session::has('comment')){
            $title = "Comentarios";
            return View::make('comments.create', compact('title'));
        }
        return Redirect::route('finalizacao');
    }

    public function store() {
        if(!Session::has('comment')){
            $comment = new Comment();
            $comment->comment = Input::get('comment');
            $comment->save();
            Session::put('comment', true);
        }
        return Redirect::route('finalizacao');
    }

}
