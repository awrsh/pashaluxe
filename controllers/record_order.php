<?php
class record_order extends Controller
{
    function __construct()
    {
        parent::__construct();

    }


    function index()
    {
        $this->view('record_order/index');

    }
}