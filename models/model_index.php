<?php

class model_index extends Model
{

    function __construct()
    {
        parent::__construct();
    }


    function getSlider1()
    {

        $sql = "select * from tbl_slider1";
        $result = $this->doSelect($sql);
        return $result;

    }

    function direct_access()
    {
        $sql = "select * from tbl_picture";
        $result = $this->doSelect($sql);
        return $result;
    }

    function direct_access1()
    {
        $sql = "select * from tbl_screenshots";
        $result = $this->doSelect($sql);
        return $result;
    }

    function banner()
    {
        $sql = "select * from tbl_banner";
        $result = $this->doSelect($sql);
        return $result;
    }

    function sidebar_R()
    {
        $sql = "select * from tbl_sidebar";
        $result = $this->doSelect($sql);
        return $result;
    }


    function getSlider2()
    {

        $sql = "select * from tbl_product WHERE special=?";
        $values = array(1);
        $result = $this->doSelect($sql, $values);

        foreach ($result as $key => $row) {
            $price_total = $this->calculateDiscount($row['price'], $row['discount']);
            $price_total = $price_total[1];
            $result[$key]['price_total'] = $price_total;
        }

        @$first_row = $result[0];
        @$time_special = $first_row['time_special'];


        $date = $time_end = $time_special;

        // date_default_timezone_set('Asia/Tehran');
        // $date = date('F d,Y H:i:s', $time_end);

        return array($result, $date);
    }


    function onlyclicksite()
    {
        $sql = "select * from tbl_product where only_myshop =1";

        $result = $this->doSelect($sql);
        return $result;
    }



    function mostviewd()
    {

        $sql = "select * from tbl_option where setting='limit_slider' ";
        $result = $this->doSelect($sql, array(), 1);
        $limit = $result['value'];

        $sql = 'select * from tbl_product order by viewd desc limit ' . $limit . ' ';
        $result = $this->doSelect($sql);
        return $result;
    }

    function lastproduct()
    {

        $option = self::getoption();
        $limit = $option['limit_slider'];

        $sql = 'select * from tbl_product order by id desc limit ' . $limit . ' ';
        $result = $this->doSelect($sql);
        return $result;
    }

    function add_View($data = [])
    {
        $number = $data['oneView'];

        $sql = "INSERT INTO tbl_product (viewd) VALUES (?)";
        $value = [$number];
        $this->doQuery($sql, $value);

    }


    function add_email_user($data = [])
    {
        $email_user = $data['email_user'];
        $date = self::jaliliDate('Y/m/d');


        $sql = "INSERT INTO tbl_email_user (email_user,date_email,status) VALUES (?,?,?)";
        $value = [$email_user, $date, 0];
        $this->doQuery($sql, $value);

    }

}

