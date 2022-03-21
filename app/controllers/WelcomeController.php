<?php

namespace mvc\controllers;

use mvc\core\controller;

class WelcomeController extends controller
{

    public function index()
    {
       
        $this->view("welcome.index");
    } //-- end of function index

}//-- end of class HomeController
