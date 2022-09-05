<?php
class admin_warranty extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('admin/warranty/index');


    }

    function add_warranty()
    {
        $this->model->add_warranty($_POST);

    }


}

