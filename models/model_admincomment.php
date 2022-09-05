<?php

class model_admincomment extends Model
{


    function __construct()
    {
        parent::__construct();

    }

    function productInfo($productId){
        $sql = "select * from tbl_product where id=?";
        $result = $this->doSelect($sql,[$productId],1);
        return $result;

    }



    function getParam($productId){
        $productInfo = $this->productInfo($productId);
        $categoryId = $productInfo['cat'];
        $sql = "select * from tbl_comment_param where idcategory=?";
        $result = $this->doSelect($sql,[$categoryId]);
        return $result;

    }


    function getComment()
    {
        $sql = "select * from tbl_comment order by id desc";
        $result = $this->doSelect($sql);
        return $result;

    }

    function confirm($data)
    {


        foreach ($data['id'] as $id) {

            $sql = "update tbl_comment set title=?,posotive=?,negative=?,matn=? where id=?";
            $params = array($data['title' . $id], $data['posotive' . $id], $data['negative' . $id], $data['matn' . $id], $id);
            $this->doQuery($sql, $params);

        }


        $ids = implode(',', $data['id']);
        $sql = "update tbl_comment set confirm=1 where id IN (" . $ids . ") ";
        $this->doQuery($sql);


    }

    function unconfirm($ids)
    {

        $ids = implode(',', $ids);
        $sql = "update tbl_comment set confirm=0 where id IN (" . $ids . ") ";
        $this->doQuery($sql);


    }

    function delete($ids)
    {

        $ids = implode(',', $ids);
        $sql = "delete from tbl_comment where id IN (" . $ids . ") ";
        $this->doQuery($sql);


    }


}
