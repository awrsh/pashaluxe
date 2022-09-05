<?php

class Showcart3 extends Controller
{

    function __construct()
    {
        Model::sessionInit();
        $check = Model::sessionGet('userId');
        if ($check != true) {
            header('location:' . URL . 'showcart1');
        }
    }

    function index()
    {

        $basketInfo = $this->model->getBasketReview();

        $postPrice = $this->model->postPrice();
        Model::sessionInit();

        $addressInfo = Model::sessionGet('addressInfo');


        $addressInfo = unserialize($addressInfo);

        if ($addressInfo == null) {
            header('location:' . URL . 'showcart2');

        }

        $postType = Model::sessionGet('postType');

        $data = array('basketInfo' => $basketInfo, 'postPrice' => $postPrice, 'addressInfo' => $addressInfo, 'postType' => $postType);

        $this->view('showcart3/index', $data);

    }

}
