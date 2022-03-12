<?php

namespace mvc\controllers;

use mvc\core\controller;
use mvc\core\Helper;

class BlogController extends controller
{

    public function index()
    {

       //TODO
    } //-- end index


    public function show(){

        return $this->view('blog.show');
    }//-- end show
}//-- end of class UserController