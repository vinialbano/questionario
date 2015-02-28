<?php

class CommentsController extends BaseController {

    public function create() {
        if(!Session::has('questions')){
            return Redirect::route('apresentacao');
        }
        if(!Session::has('comment')){
            $title = "Comentarios";
            return View::make('comments.create', compact('title'));
        }
        return Redirect::route('finalizacao');
    }

    public function store() {
        if(!Session::has('comment') && Input::get('comment') != ''){
            $comment = new Comment();
            $comment->comment = Input::get('comment');
            $comment->save();
            Session::put('comment', true);
        }

        if (Entrust::hasRole('aluno')){
            $user = Confide::user();
            Confide::logout();
            $user->delete();
        } else {
            Confide::logout();
        }
        Session::flush();
        return Redirect::route('finalizacao');
    }

}
