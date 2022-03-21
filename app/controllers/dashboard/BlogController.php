<?php

namespace mvc\controllers\dashboard;

use mvc\core\controller;
use mvc\core\Helper;

class BlogController extends controller
{

    public function index()
    {

        return $this->view('dashboard.blog.index');
    } //-- end index


    // create blog functionality
    public function create()
    {

        return $this->view("dashboard.blog.create");
    } //-- end create
}//-- end of class UserController