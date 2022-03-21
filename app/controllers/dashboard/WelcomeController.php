<?php

namespace mvc\controllers\dashboard;

use mvc\core\controller;
use mvc\core\Helper;

class WelcomeController extends controller
{

    public function index()
    {

       return $this->view('dashboard.welcome'); 
    } //-- end index
}//-- end of class UserController