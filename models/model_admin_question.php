<?php
class model_admin_question extends Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Tehran');
    }

    function productInfo($productId){
        $sql = "select * from tbl_product where id=?";
        $result = $this->doSelect($sql,[$productId],1);
        return $result;

    }


    function getQuestion()
    {
        $sql = "select * from tbl_question order by id desc";
        $result = $this->doSelect($sql);
        return $result;

    }

    function answer_question($data)
    {
        $id_question = $data['id_question'];
        $answer = $data['answer'];
        $question = $data['question'];
        $id_product = $data['id_product'];
        $user_id = "مدیریت";
        $date_question = self::jaliliDate('Y/m/d');
        $time_question = date("h:i:sA");

        $sql = "INSERT INTO tbl_question (text_question,answer_question,date_question,time_question,userid,parent,idproduct) VALUES (?,?,?,?,?,?,?)";
        $value = [$question,$answer,$date_question,$time_question,$user_id,$id_question,$id_product];
        $this->doQuery($sql, $value);


    }

}