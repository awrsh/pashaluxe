<?php

class Product extends Controller
{

    function __construct()
    {

    }

    function index($id, $activeTab = 'naghd')
    {

        $productInfo = $this->model->productInfo($id);
        $onlyclicksite = $this->model->onlyclicksite();
        $gallery = $this->model->getGallery($id);
        $basket_cookie = $this->model->get_Cookie_Basket($_COOKIE['basket']);


        $data = array('productInfo' => $productInfo, 'onlyclicksite' => $onlyclicksite, 'gallery' => $gallery, 'activeTab' => $activeTab, 'basket_cookie' => $basket_cookie);
        $this->view('product/index', $data);
    }

    function tab($id, $idcategory)
    {

        $number = $_POST['number'];

        if ($number == 0) {
            $naghd = $this->model->naghd($id);
            $data = array($naghd);
            $this->view('product/tab1', $data, 1, 1);
        }
        if ($number == 1) {

            $fanni = $this->model->fanni($idcategory, $id);
            $data = array($fanni);
            $this->view('product/tab2', $data, 1, 1);
        }


        if ($number == 2) {
            $comment_param = $this->model->comment_param($idcategory, $id);

            $comment_param_names = $comment_param[0];
            $comment_param_scores = $comment_param[1];

            $comments = $this->model->getComment($id);


            /*  $like_count = 0;
              $dis_like_count = 0;

              foreach ($comments as $row)

              {
                  $like_count = $row['likecount'];
                  $dis_like_count = $row['dislikecount'];

              }

              $arr = array(
                  'like_count' => $like_count,
                  'dis_like_count' => $dis_like_count,
              );

              echo json_encode($arr);*/


            $data = array($comment_param_names, $comments, $comment_param_scores, $id);

            $this->view('product/tab3', $data, 1, 1);
        }


        if ($number == 3) {
            $getQuestions = $this->model->getQuestions($id);
            $productInfo = $this->model->productInfo($id);
            $questions = $getQuestions[0];
            $answers = $getQuestions[1];
            $data = array($questions, $answers, 'productInfo' => $productInfo, $id);
            $this->view('product/tab4', $data, 1, 1);
        }
    }


    function add_Question()
    {
        $this->model->addQuestions($_POST);

    }

    function add_Favorite()
    {
        $this->model->addFavorite($_POST);

    }

    function addtobasket($productId, $color = '', $garantee = '')
    {

        echo $all = $this->model->addToBasket($productId, $color, $garantee);


    }


    function add_Follow_up($code_product, $name_product)
    {

        $this->model->add_follow($_POST, $code_product, $name_product);
        header('location:' . URL . 'index/');


    }

    function add_email_user()
    {
        $this->model->add_email_user($_POST);
    }

}










