<?php

class model_addcomment extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function productInfo($productId)
    {
        $sql = "select * from tbl_product where id=?";
        $result = $this->doSelect($sql, array($productId), 1);
        return $result;
    }

    function getParam($productId)
    {
        $productInfo = $this->productInfo($productId);
        $categoryId = $productInfo['cat'];
        $sql = "select * from tbl_comment_param where idcategory=?";
        $result = $this->doSelect($sql, array($categoryId));

        return $result;
    }

    function saveComment($data, $productId)
    {


        $comment_params = $this->getParam($productId);


        $param_result = array();



        foreach ($comment_params as $row) {
            $paramId = $row['id'];

            $value = $_POST['param' . $paramId];
            $param_result[$paramId] = $value;
        }

        $title = $_POST['title'];
        $positive = $_POST['positive'];
        $negative = $_POST['negative'];
        $comment = $_POST['comment'];
        $name_question = $_POST['name_question'];

        self::sessionInit();
        $userId = self::sessionGet('userId');



        $sql = "select * from tbl_comment where user_id=? and idproduct=?";
        $data = array($userId, $productId);
        $result = $this->doSelect($sql, $data);

        self::sessionInit();


        $time = time();
        $date = self::jaliliDate('Y/m/d');


        $sql = "insert into tbl_comment (title,matn,tarikh,posotive,negative,idproduct,param,user_id,name_question) VALUES (?,?,?,?,?,?,?,?,?)";
        $array = array($title, $comment, $date, $positive, $negative, $productId, serialize($param_result), $userId, $name_question);
        $this->doQuery($sql, $array);


        header('location:' . URL . 'product/index/' . $productId);


    }

    function save_Like($id_comment, $like,$id_product)
    {

        $sql = "update tbl_comment set likecount=? where id=? ";
        $array = array($like + 1, $id_comment);
        $this->doQuery($sql, $array);
        header('location:' . URL . 'product/index/' . $id_product);

    }


    function save_disLike($id_comment, $dislike,$id_product)
    {

        $sql = "update tbl_comment set dislikecount=? where id=? ";
        $array = array($dislike + 1, $id_comment);
        $this->doQuery($sql, $array);
        header('location:' . URL . 'product/index/' . $id_product);

    }



    function commentInfo($productId)
    {

        self::sessionInit();
        $userId = self::sessionGet('userId');

        $sql = "select * from tbl_comment where idproduct=? and user_id=?";
        $data = array($productId, $userId);
        $result = $this->doSelect($sql, $data, 1);
        return $result;
    }


}
