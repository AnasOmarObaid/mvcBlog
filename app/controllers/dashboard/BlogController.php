<?php

namespace mvc\controllers\dashboard;

use mvc\core\controller;
use mvc\core\Helper;

class BlogController extends controller
{

    public function index()
    {

        Helper::dd("Blog for admin");
    } //-- end index
}//-- end of class UserController