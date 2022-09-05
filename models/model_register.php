<?php

class model_register extends Model
{
    function __construct()
    {
        parent::__construct();
        session_start();
        date_default_timezone_set('Asia/Tehran');
    }


    function add_user($data = [])
    {

        $phone_number = $data['email'];


        $user_id = rand(0, 10000);
        $sms_code = rand(1000, 9999);
        $date = self::jaliliDate('Y/m/d');
        $ip_user = self::getIpUser();
        $time_register = date("h:i:sA");

        $_SESSION["phone_number"] = $phone_number;
        $_SESSION["Sms_Code_Number"] = $sms_code;
        $_SESSION["user_id"] = $user_id;


        $username = "9305151532";
        $password = "YEQL$";
        $user_number = $phone_number;
        $number_send = "50004001151532";
        $code_verify = $sms_code;
        $data = array('username' => $username,
            'password' => $password,
            'to' => $user_number,
            'from' => $number_send,
            "text" => "پاشالوکس" . "\n" . "کدتایید: " . $code_verify);

        $post_data = http_build_query($data);
        $handle = curl_init('https://rest.payamak-panel.com/api/SendSMS/SendSMS');
        curl_setopt($handle, CURLOPT_HTTPHEADER, array(
            'content-type' => 'application/x-www-form-urlencoded'
        ));
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        $response = curl_exec($handle);

        $sql = "INSERT INTO tbl_register (user_id,phone_number,sms_code,date_register,time_register,user_ip,status) VALUES (?,?,?,?,?,?,?)";
        $value = [$user_id, $phone_number, $sms_code, $date,$time_register,$ip_user, 0];
        $this->doQuery($sql, $value);

    }

}
