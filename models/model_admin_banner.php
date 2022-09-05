<?php

class model_admin_banner extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getPicture()
    {
        $sql = "SELECT * FROM tbl_banner";
        $result = $this->doSelect($sql);

        return $result;
    }

    function addPicture($data,$files)
    {

        $title = $data['title'];
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


            $sql = "insert into tbl_banner (img,link,name_alt) VALUES (?,?,?)";
            $params = array($title,$link,$target);
            $this->doQuery($sql, $params);

        }

    }

    function delete_picture($data)
    {
        $ids = $data['id'];
        $ids = implode(',',$ids);
        $sql = "DELETE FROM tbl_banner WHERE id IN (".$ids.")";
        $this->doQuery($sql);
    }



}
