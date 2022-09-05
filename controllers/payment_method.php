<?php
class payment_method extends Controller
{

    function __construct()
    {
        parent::__construct();

    }


    function index()
    {
        $this->view('payment_method/index');

    }
}