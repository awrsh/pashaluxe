<?php
class about extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('about/index');

    }

}