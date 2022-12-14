<?php

class Showcart2 extends Controller
{


    function __construct()
    {
        Model::sessionInit();
        $check=Model::sessionGet('userId');

        if($check!=true){
            header('location:'.URL.'showcart1');
        }
    }

    function index()
    {
        $address = $this->model->getAddress();
        $postType = $this->model->getPostType();
        $data = ['address' => $address, 'postType' => $postType];
        $this->view('showcart2/index', $data);
    }

    function addaddress($editAddressId = 0)
    {

        $this->model->addAddress($_POST, $editAddressId);


    }

    function editaddress($addressId)
    {

        $addressInfo = $this->model->getAddressInfo($addressId);
        echo json_encode($addressInfo);

    }


    function getpostprice()
    {

        $data = $_POST;
        $this->model->getPostPrice($data);
    }

    function sessionposttype()
    {

        $data = $_POST;
        $this->model->sessionPostType($data);
    }

    function deleteaddress($id)
    {
        $this->model->deleteAddress($id);
    }


}

