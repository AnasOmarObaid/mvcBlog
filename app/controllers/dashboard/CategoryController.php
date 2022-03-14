<?php

namespace mvc\controllers\dashboard;

use mvc\core\controller;
use mvc\core\Helper;

class CategoryController extends controller
{

    public function index()
    {

        return $this->view('dashboard.category.index');
    } //-- end index


    // create category functionality
    public function create()
    {

        return $this->view("dashboard.category.create");
    } //-- end create

    // store category functionality
    public function store()
    {
    } //-- end store
}//-- end of class UserController