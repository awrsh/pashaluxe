<?php

class Adminuser extends Controller
{

    function __construct()
    {
        parent::__construct();
        $level=Model::getUserLevel();
        if($level!=1){header('location:'.URL.'adminlogin');}
    }

    function index()
    {

        $users = $this->model->getUsers();
        $clientele = $this->model->getClientele();
        $data = array('users' => $users, 'clientele' => $clientele);
        $this->view('admin/user/index', $data);

    }

    function changelevel1()
    {
        $ids = $_POST['id'];
        $this->model->changelevel1($ids);
        header('location:' . URL . 'adminuser');
    }
    function changelevel2()
    {
        $ids = $_POST['id'];
        $this->model->changelevel2($ids);
        header('location:' . URL . 'adminuser');
    }


}
