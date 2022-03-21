<?php

namespace mvc\controllers\dashboard;

use mvc\core\controller;
use mvc\core\Helper;
use mvc\models\Category;
use Rakit\Validation\ErrorBag;
use Rakit\Validation\Validator;

class CategoryController extends controller
{

    public function index()
    {
        $categories = Category::all();
        return $this->view('dashboard.category.index', ['categories' => $categories]);
    } //-- end index


    // create category functionality
    public function create()
    {

        return $this->view("dashboard.category.create");
    } //-- end create

    // store category functionality
    public function store()
    {
        $validator = new Validator;
        // make it
        $validation = $validator->make($this->request(), [
            'name'   => 'required|min:3',
        ]);

        // then validate
        $validation->validate();

        $cate = Category::findColumn("name", $this->request('name'));

        if ($cate)
            ErrorBag::add('category', '', 'this category is already exist');


        if (!$validation->fails()) {
            Category::create($this->request());
            Helper::redirect('\dashboard/category/create');
        }


        return $this->view('dashboard.category.create', ['errors' => $validation->errors()->firstOfAll()]);
    } //-- end store


    // create edit function
    public function edit($id)
    {
        $category =  Category::find($id);
        return $category ? $this->view('dashboard.category.edit', ['category' => $category]) : Helper::redirect('\dashboard\category');
    } //-- end edit function

    // update method
    public function update($id)
    {
        $category = Category::find($id);
        $validator = new Validator;
        $validation = $validator->make($this->request(), [
            'name' => 'required|min:3',

        ]);
        $validation->validate();

        $cat = Category::getIgnoredId('name', $this->request('name'), $id);
        if ($cat)
            ErrorBag::add('name', '', 'this category is already exists');


        // check error
        if ($validation->fails()) {
            return $this->view('dashboard.category.edit', ['category' => $category, 'errors' => $validation->errors()->firstOfAll()]);
        }

        Category::updated($this->request(), $id);
        //Session::flash('Update blog successfully');
        Helper::redirect('\dashboard\category\edit\\' . $id);
    } //-- end update


    public function destroy($id)
    {
        Category::destroy($id);
        Helper::redirect('\dashboard\category\\');
    }
}//-- end of class UserController