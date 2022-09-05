<?php

class model_product extends Model
{

    function __construct()
    {
        parent::__construct();
        session_start();
        date_default_timezone_set('Asia/Tehran');

    }

    function productInfo($id)
    {

        $sql = "select * from tbl_product where id=?";
        $result = $this->doSelect($sql, array($id), 1);
        $price = $result['price'];
        $discount = $result['discount'];
        $price_calculate = $this->calculateDiscount($price, $discount);
        $result['price_discount'] = $price_calculate[0];
        $result['price_total'] = $price_calculate[1];
        $view_count_product = $result['viewd'];

        $id_category_main = $result['idcategory'];
        $id_category_sub = $result['cat'];

        $sql = "UPDATE tbl_product SET viewd=? WHERE id=?";
        $value = [$view_count_product + 1, $id];
        $this->doQuery($sql, $value);


        $colors = $result['colors'];
        $colors = explode(',', $colors);
        $colors = array_filter($colors);
        $all_colors = array();
        foreach ($colors as $color) {
            $colorInfo = $this->colorInfo($color);
            array_push($all_colors, $colorInfo);

        }
        $result['all_colors'] = $all_colors;


        $garantee = $result['garantee'];
        $garantee = explode(',', $garantee);
        $garantee = array_filter($garantee);
        $all_garantee = array();
        foreach ($garantee as $id) {
            $garanteeInfo = $this->garanteeInfo($id);
            array_push($all_garantee, $garanteeInfo);

        }
        $result['all_garantee'] = $all_garantee;


        $categoryInfo = $this->categoryInfo_main($id_category_main);
        $result['all_category_main'] = $categoryInfo;

        $categoryInfo1 = $this->categoryInfo_sub($id_category_sub);
        $result['all_category_sub'] = $categoryInfo1;


//        $first_row = $result;
        //$time_special = $first_row['time_special'];

        $options = self::getoption();
        // $duration_special = $options['special_time'];
        //$date = $time_end = $time_special;
        // date_default_timezone_set('Asia/Tehran');
        //$date = date('F d,Y H:i:s', $time_end);
        //  $result['date_special'] = $date;


        return $result;

    }

    function colorInfo($id)
    {
        $sql = "select * from tbl_color where id=?";
        $result = $this->doSelect($sql, array($id), 1);
        return $result;

    }

    function garanteeInfo($id)
    {
        $sql = "select * from tbl_garantee where id=?";
        $result = $this->doSelect($sql, array($id), 1);
        return $result;

    }

    function categoryInfo_main($id)
    {
        $sql = "select * from tbl_category where id=?";
        $result = $this->doSelect($sql, array($id), 1);
        return $result;

    }

    function categoryInfo_sub($id)
    {
        $sql = "select * from tbl_category where id=?";
        $result = $this->doSelect($sql, array($id), 1);
        return $result;

    }


    function onlyclicksite()
    {
        $sql = "select * from tbl_product where only_myshop=1";
        $result = $this->doSelect($sql);
        return $result;
    }


    function naghd($id)
    {
        $sql = 'select * from tbl_naghd where idproduct=?';
        $result = $this->doSelect($sql, array($id));
        return $result;
    }

    function fanni($idcategory, $idproduct)
    {

        $sql = "select * from tbl_attr where idcategory=? and parent=0";
        $params = array($idcategory);

        $result = $this->doSelect($sql, $params);

        foreach ($result as $key => $row) {
            $sql2 = "select a.title,b.idval,c.val as valTitle
            from tbl_attr a
            LEFT JOIN tbl_product_attr b ON a.id=b.idattr  and b.idproduct=?
            LEFT JOIN tbl_attr_val c ON b.idval=c.id
            WHERE a.parent=? ";
            $params = array($idproduct, $row['id']);
            $result2 = $this->doSelect($sql2, $params);
            $result[$key]['children'] = $result2;

        }

        return $result;

    }


    function comment_param($idcategory, $idproduct)
    {

        $sql = "select * from tbl_comment_param where idcategory=?";
        $x = array($idcategory);
        $result = $this->doSelect($sql, $x);

        $sql = "select * from tbl_comment where idproduct=?";
        $res = $this->doSelect($sql, array($idproduct));
        $scores_total = array();

        foreach ($res as $row) {
            $params_score = $row['param'];
            $params_score = unserialize($params_score);
            foreach ($params_score as $key => $val) {
                $param_id = $key;
                $score = $val;
                if (!isset($scores_total[$param_id])) {
                    $scores_total[$param_id] = 0;
                }
                @$scores_total[$param_id] = $scores_total[$param_id] + $score;

            }


        }

        $total_comments = sizeof($res);

        foreach ($scores_total as $key => $val) {

            $val = $val / $total_comments;
            $scores_total[$key] = $val;

        }


        return array($result, $scores_total);
    }


    function getComment($idproduct)
    {
        $sql = "select * from tbl_comment where idproduct=?";
        $data = array($idproduct);
        $result = $this->doSelect($sql, $data);
        return $result;
    }


    function getQuestions($idproduct)
    {

        $sql = "select * from tbl_question where idproduct=? and parent=0";

        $questions = $this->doSelect($sql, array($idproduct));

        $sql = "select * from tbl_question where parent!=0";
        $all_answers = $this->doSelect($sql);
        $all_answers_new = array();

        foreach ($all_answers as $answer) {
            $parent = $question_id = $answer['parent'];
            $all_answers_new[$question_id] = $answer;
        }


        return array($questions, $all_answers_new);

    }

    function addQuestions($data = [])
    {
        $text_Question = $data['text_question'];
        $date_question = self::jaliliDate('Y/m/d');
        $time_question = date("h:i:sA");

        @$user_id = $_SESSION["userId"];



        if ($user_id == null) {
            $user_id = 'مهمان';
        }

        $idproduct = $data['idProduct'];


        $sql = "insert into tbl_question (text_question,date_question,time_question,userid,parent,idproduct) values (?,?,?,?,?,?)";
        $params = array($text_Question, $date_question, $time_question, $user_id, 0, $idproduct);
        $this->doQuery($sql, $params);

        header('location:' . URL . 'product/index/' . $idproduct);


    }


    function addFavorite($data = [])
    {
        $id_product_fav = $data['id_product_fav'];
        $date_fav = self::jaliliDate('Y/m/d');


        $user_id = $_SESSION["userId"];


        if ($user_id == null) {

            header('location:' . URL . 'register/');

        }

        $sql = "INSERT INTO tbl_favorit (idproduct,userId,parent,title,date_favorite) VALUES (?,?,?,?,?)";
        $params = array($id_product_fav, $user_id, 1, 1, $date_fav);
        $this->doQuery($sql, $params);

        header('location:' . URL . 'product/index/' . $id_product_fav);


    }


    function getGallery($idproduct)
    {
        $sql = "select * from tbl_gallery where idproduct=? order by threed desc";
        $result = $this->doSelect($sql, array($idproduct));
        return $result;
    }



    function get_Cookie_Basket($id_cookie)
    {
        $sql = "select * from tbl_basket where cookie=? order by cookie desc";
        $result = $this->doSelect($sql, array($id_cookie));
        return $result;

    }


    function addToBasket($productId, $color, $garantee)
    {

        $cookie = self::getBasketCookie();
        $date_add = self::jaliliDate('Y/m/d');


        $sql = "select * from tbl_basket where  cookie=? and idproduct=? and color=? and garantee=? ";
        $params = array($cookie, $productId, $color, $garantee);
        $result = $this->doSelect($sql, $params);

        if (isset($result[0])) {
            $sql = "update tbl_basket set tedad=tedad+1 where cookie=? and idproduct=? and color=? and garantee=? ";

        } else {
            $sql = "insert into tbl_basket (cookie,idproduct,tedad,color,garantee,date_add) values (?,?,1,?,?,?)";
        }
        $params = array($cookie, $productId, $color, $garantee,$date_add);
        $this->doQuery($sql, $params);

        $basket = $this->getBasket();
        $all = 0;
        foreach ($basket[0] as $row) {
            $all = $all + $row['tedad'];
        }
        return $all;


    }


    function add_follow($data = [], $code_product, $name_product)
    {

        $date = self::jaliliDate('Y/m/d');
        $add_follow = $data['add_follow'];

        $sql = "insert into tbl_let_me_know (Contacts,Product_Name,Product_ID,Date_of_Registration,Follow_up) values (?,?,?,?,?)";
        $value = [$add_follow, $name_product, $code_product, $date, 0];
        $this->doQuery($sql, $value);

    }


}
