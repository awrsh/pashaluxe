<?php

class Register extends Controller
{


    function __construct()
    {
    }

    function index()
    {
        $this->view('register/index');

    }


    function add_user()
    {
        $this->model->add_user($_POST);

        header('location:' . URL . 'login/');
    }


}


