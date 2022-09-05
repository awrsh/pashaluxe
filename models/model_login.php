<?php

class model_login extends Model
{

    function __construct()
    {
        parent::__construct();
        session_start();
        date_default_timezone_set('Asia/Tehran');

    }


    function checkUser($form)
    {

        $phone_number = $_SESSION["phone_number"];
        $password = $form['password'];
        $sms_code = $_SESSION["Sms_Code_Number"];
        $user_id = $_SESSION["user_id"];
        $date = self::jaliliDate('Y/m/d');
        $time_register = date("h:i:sA");
        $user_device_info = $form["user_device_info"];


        if ($password == $sms_code) {

            $sql = "INSERT IGNORE INTO tbl_user (email,password,user_id,date_register,user_device_info) VALUES (?,?,?,?,?)";
            $value = [$phone_number, $sms_code, $user_id, $date,$user_device_info];
            $this->doQuery($sql, $value);

            $sql = "UPDATE tbl_register SET status=? WHERE user_id=?";
            $value = [1, $user_id];
            $this->doQuery($sql, $value);
        }


        $sql = "SELECT * FROM tbl_register WHERE phone_number=? AND sms_code=?";
        $params = array($phone_number, $password);
        $result = $this->doSelect($sql, $params);


        if (sizeof($result) > 0 and !empty($phone_number) and !empty($password)) {
            echo 'correct user pass!';
            Model::sessionInit();
            Model::sessionSet('userId', $result[0]['phone_number']);

        }
    }
}
