<?php
class notice_new_product extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('notice_new_product/index');

    }

    function set_email_user()
    {
        $data = $_POST;
        $result = $this->model->set_email_user($data);

        if ($result) {
            http_response_code(200);
            echo json_encode(['success' => true]);
        } else {
            http_response_code(400);
            header('location:' . URL . 'notice_new_product/');

        }
    }


}