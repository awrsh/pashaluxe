<?php

class contact_us extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('contact_us/index');

    }

    function set_request()
    {
        $this->model->set_request($_POST);
        header('location:' . URL . 'contact_us/');

    }

}