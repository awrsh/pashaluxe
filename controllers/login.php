<?php

class Login extends Controller
{


    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('login/index');

    }

    function checkuser()
    {

        $form = $_POST;
        $this->model->checkUser($form);

        Model::sessionInit();
        $check=Model::sessionGet('userId');

        if($check==false){

            header('location:'.URL.'login');

        }else{
            header('location:'.URL.'showcart');
        }

    }

}
