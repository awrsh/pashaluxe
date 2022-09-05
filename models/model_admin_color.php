<?php
class model_admin_color extends Model{

    function __construct()
    {
        parent::__construct();

    }

    function Add_color($data = [])
    {

       $nameColor = $data['name_color'];
       $hexColor = $data['hex_color'];

        $sql = "INSERT INTO tbl_color (title,hex) VALUES (?,?)";
        $params = array($nameColor,$hexColor);
        $this->doQuery($sql,$params);

    }

}