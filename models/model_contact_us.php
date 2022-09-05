<?php

class model_contact_us extends Model
{
    function __construct()
    {
        parent::__construct();
        session_start();
        date_default_timezone_set('Asia/Tehran');
    }


    function set_request()
    {

        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $communication = $_POST['communication'];
        $subject_communication = $_POST['subject_communication'];
        $time_communication = date("h:i:sA");
        $date_communication = self::jaliliDate('Y/m/d');


        $sql = "INSERT INTO tbl_contact_us (name_communication,email,communication,subject_communication,time_communication,date_communication) VALUES (?,?,?,?,?,?)";
        $value = [$firstname, $email, $communication,$subject_communication, $time_communication, $date_communication];
        $this->doQuery($sql, $value);
    }


}