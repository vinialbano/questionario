<?php namespace Admin;

use BaseController;
use View;

class DashboardController extends BaseController {

    public function index(){
        return View::make('dashboard/index');
    }


}
