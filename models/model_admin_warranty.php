<?php
class model_admin_warranty extends Model{

    function __construct()
    {
        parent::__construct();

    }

    function add_warranty($data = [])
    {

        $name_warranty = $data['name_warranty'];

        $sql = "INSERT INTO tbl_garantee (title) VALUES (?)";
        $params = array($name_warranty);
        $this->doQuery($sql,$params);

    }

}