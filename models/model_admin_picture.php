<?php

class model_admin_picture extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getPicture()
    {
        $sql = "SELECT * FROM tbl_picture";
        $result = $this->doSelect($sql);

        return $result;
    }

    function addPicture($data,$files)
    {

        $title = $data['title'];
        $Place_img = $data['place_image'];
        $link = $data['link'];
        $file = $files['image'];

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmp = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $uploadOk = 1;

        $targetMain = 'public/images/picture/';
        $newName = time();

        if ($fileType != 'image/jpg' and $fileType != 'image/jpeg') {
            $uploadOk = 0;
        }

        if ($fileSize > 52428899990) {
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {

            $ext = pathinfo($fileName, PATHINFO_EXTENSION);

            $target = $targetMain . $newName . '.' . $ext;

            move_uploaded_file($fileTmp, $target);


            $sql = "insert into tbl_picture (img,link,name_alt,place_image) VALUES (?,?,?,?)";
            $params = array($title,$link,$target,$Place_img);
            $this->doQuery($sql, $params);

        }

    }

    function delete_picture($data)
    {
        $ids = $data['id'];
        $ids = implode(',',$ids);
        $sql = "DELETE FROM tbl_picture WHERE id IN (".$ids.")";
        $this->doQuery($sql);
    }



}
