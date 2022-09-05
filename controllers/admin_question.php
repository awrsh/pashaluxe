<?php
class admin_question extends Controller
{
    function __construct()
    {
        parent::__construct();
        $level=Model::getUserLevel();
        if($level!=1){header('location:'.URL.'adminlogin');}

    }


    function index()
    {
        $question = $this->model->getQuestion();
        $data = array('question' => $question);
        $this->view('admin/question_and_answer/index',$data);

    }

    function answer_question()
    {


        $this->model->answer_question($_POST);
       // header('location:'.URL.'admincomment');
    }


}