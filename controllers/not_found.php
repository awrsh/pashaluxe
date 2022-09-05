<?php
class not_found extends Controller{


    function __construct()
    {
        parent::__construct();

    }


    function index()
    {
        $this->view('404/index');

    }

}
