<?php

namespace mvc\controllers;

use mvc\core\controller;
use mvc\core\Helper;

class BlogController extends controller
{

    public function index()
    {

        Helper::dd("Blog for user");
    } //-- end index
}//-- end of class UserController