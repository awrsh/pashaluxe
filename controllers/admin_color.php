<?php
class admin_color extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('admin/color/index');


    }

    function add_color()
    {
        $this->model->Add_color($_POST);

    }


}

