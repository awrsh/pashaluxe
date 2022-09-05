<?php
class sending_method extends Controller
{
    function __construct()
    {
        parent::__construct();

    }


    function index()
    {
        $this->view('sending_method/index');

    }
}