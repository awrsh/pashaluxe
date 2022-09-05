<?php
class model_payment_result extends Model
{
    function __construct()
    {
        parent::__construct();

    }


    function getOrderInfo($orderId)
    {
        $sql = "select * from tbl_order where id=?";
        $result = $this->doSelect($sql, array($orderId), 1);
        return $result;
    }

}