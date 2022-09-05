<?php

class admin_screenShots extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if (isset($_POST['title'])) {
            $this->model->addPicture($_POST, $_FILES);
        }


        $result = $this->model->getPicture();
        $data = ['picture' => $result];

        $this->view('admin/picture/screenshot', $data);

    }

    function delete()
    {
        $this->model->delete_picture($_POST);
        header('location:' . URL . 'admin_ScreenShots/index');
    }


}
