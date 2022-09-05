<?php


class Index extends Controller
{

    function __construct()
    {

    }

    function index()
    {

        $slider1 = $this->model->getSlider1();
        $slider2 = $this->model->getSlider2();
        $direct_access = $this->model->direct_access();
        $direct_access1 = $this->model->direct_access1();
        $banner = $this->model->banner();
        $onlyclicksite = $this->model->onlyclicksite();
        $mostviewd = $this->model->mostviewd();
        $lastproduct = $this->model->lastproduct();
        $sidebar_R = $this->model->sidebar_R();

        $slider2_items = $slider2[0];
        $date_end = $slider2[1];

        $data = array($slider1, $slider2_items, $date_end, $onlyclicksite, $mostviewd, $lastproduct, 'direct' => $direct_access, 'direct1' => $direct_access1,'banner' => $banner,'sidebar' => $sidebar_R);

        $this->view('index/index', $data);

    }


    function addView()
    {
        $this->model->add_View($_POST);
    }



    function add_email_user()
    {
        $this->model->add_email_user($_POST);
        header('location:' . URL . 'index/');

    }

}
