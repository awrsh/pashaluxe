<?php
class model_notice_new_product extends Model
{
    function __construct()
    {
        parent::__construct();
        session_start();
        date_default_timezone_set('Asia/Tehran');
    }


    function set_email_user($data)
    {

        $email_user = $data['number_email'];
        $time_email = date("h:i:sA");
        $date_email = self::jaliliDate('Y/m/d');


        $sql = "INSERT INTO tbl_email_user (email_user,date_email,time_email,status) VALUES (?,?,?,?)";
        $value = [$email_user, $date_email, $time_email,0];
        $this->doQuery($sql, $value);
    }




}