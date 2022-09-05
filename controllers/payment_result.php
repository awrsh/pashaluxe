<?php
class payment_result extends Controller
{
    function __construct()
    {
        parent::__construct();
       unset($_COOKIE["basket"]);
    }

    function index($orderId)
    {
        $orderInfo = $this->model->getOrderInfo($orderId);
        $data = array('orderInfo' => $orderInfo);
        $this->view('checkout/payment_result',$data);
    }

}