<?php

class Showcart4 extends Controller
{

    function __construct()
    {
        Model::sessionInit();
        $check = Model::sessionGet('userId');

        if ($check != true) {
            header('location:' . URL . 'showcart1');
        }

    }

    function index($Status = '')
    {

        $data = ['Status' => $Status];
        $this->view('showcart4/index', $data);

    }


    function checkcode($code)
    {

        $result = $this->model->checkCode($code);
        $totalPrice = $this->model->calcuateTotalPrice($code);

        $array = array($result, $totalPrice);
        echo json_encode($array);

    }

    function calculatetotalprice()
    {
        echo $totalPrice = $this->model->calcuateTotalPrice($_POST['code']);

    }

    function saveorder()
    {

        $this->model->saveOrder($_POST);

    }

}
