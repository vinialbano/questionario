<?php

class AlternativesController extends BaseController {

    public function firstOrNew() {
        if (Request::ajax()){
            $alternative = Alternative::firstOrCreate(array('text' => camel_case(Input::get('text'))));
            return Response::json($alternative);
        }
    }

}
