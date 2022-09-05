<script src="public/slider/jquery-ui.min.js"></script>
<script src="public/slider/slider.js"></script>
<link href="public/slider/style.css" rel="stylesheet">

<style>

    #main::after {
        content: " ";
        clear: both;
        display: block;
    }

    .btn_green {
        background: #36be2b none repeat scroll 0 0;
        box-shadow: 1px 1px 3px #ccc;
        color: #fff;
        display: block;
        font-family: yekan;
        font-size: 11pt;
        height: 37px;
        line-height: 34px;
        text-align: center;
        width: 170px;
        border-radius: 4px;
        cursor: pointer;
    }

    #main > form > .right {
        width: 350px;
        float: right;

    }

    #main > form > .left {
        width: 815px;
        float: left;
    }

    h4 {
        font-size: 13pt;
        color: #6c4042;
        font-family: yekan;
    }

    .left .right {
        width: 350px;
        float: right;
    }

    .left .left {
        width: 350px;
        float: right;
        margin-right: 20px;
    }

    .row2 {
        width: 100%;
        float: right;
        margin-bottom: 40px;
    }

    p {
        font-family: yekan;

    }

    .row2 p {
        font-size: 10.5pt;
    }


</style>

<div id="main" style="width: 1200px;margin:10px auto;padding: 5px;background: #fff;">
    <?php
    $productInfo = $data['productInfo'];

    ?>

    <form id="validate_form" method="post" action="addcomment/savecomment/<?= $productInfo['id'] ?>">

        <div class="right">
            <img style="border-radius: 10px;" src="public/images/products/<?= $productInfo['id'] ?>/product_350.jpg">
        </div>

        <div class="left">
            <p style="color: #080808;">
                امتیاز شما به >   <?= $productInfo['title'] ?>
            </p>
            <p style="color: #6c6c6c;">
                شناسه محصول >   PLX-<?= $productInfo['code_product'] ?>
            </p>

            <?php

            $commentInfo = $data['commentInfo'];
            //$comment_result = unserialize($commentInfo['param']);


            $params = $data['params'];

            $number = sizeof($params);
            $right = ceil($number / 2);
            $left = $number - $right;
            $params_right = array_slice($params, 0, $right);
            $params_left = array_slice($params, $right, $left);


            ?>

            <div class="right">

                <?php
                foreach ($params_right as $row) {
                    ?>
                    <div class="row2">
                        <p>
                            <?= $row['title'] ?>

                        </p>
                        <input data-val="<?= @$comment_result[$row['id']] ?>" name="param<?= $row['id'] ?>"
                               value="<?= $comment_result[$row['id']] ?>" type="hidden" class="flat-slider">
                    </div>


                <?php } ?>


            </div>

            <div class="left">

                <?php
                foreach ($params_left as $row) {

                    ?>
                    <div class="row2">
                        <p>
                            <?= @$row['title'] ?>

                        </p>
                        <input data-val="<?= @$comment_result[$row['id']] ?>" name="param<?= $row['id'] ?>"
                               value="<?= $comment_result[$row['id']] ?>" type="hidden" class="flat-slider">
                    </div>


                <?php } ?>


            </div>

        </div>

        <style>

            input {
                width: 300px;
                height: 23px;
                border: 1px solid #ccc;
                font-family: yekan;
                font-size: 10.5pt;
            }

            .comment {
                float: right;
                width: 100%;
                padding: 0 20px;
            }

            .comment .row2 {
                margin-top: 15px;
            }

            .comment textarea {
                width: 400px;
                height: 200px;
                border: 1px solid #ccc;
            }
            .row2 input {
                border: 1px solid #eee;
                height: 28px;
                position: relative;
                top: 3px;
                width: 260px;

            }

        </style>

        <div class="comment">

            <h4>
                دیگران را با نوشتن نقد، بررسی و نظرات خود، برای انتخاب این محصول راهنمایی کنید.
            </h4>
            <div class="row2">
                <input name="name_question"  placeholder="نام نظر دهنده">
            </div>
            <div class="row2">
                <input name="title"  placeholder="عنوان نقد و بررسی">
            </div>
            <div class="row2">
                <input name="positive"  placeholder="نقاط قوت">
            </div>
            <div class="row2">
                <input name="negative"  placeholder="نقاط ضعف">
            </div>

            <div class="row2">
                <textarea name="comment"></textarea>
            </div>
            <div class="row2">
            <span class="btn_green" onclick="submitFormAddComment()">
                ثبت نظر
            </span>
            </div>

        </div>

    </form>

</div>

<script>


    function submitFormAddComment() {

        var name_validate = document.forms["validate_form"]["name_question"].value;
        var title_validate = document.forms["validate_form"]["title"].value;
        var positive_validate = document.forms["validate_form"]["positive"].value;
        var negative_validate = document.forms["validate_form"]["negative"].value;
        var comment_validate = document.forms["validate_form"]["comment"].value;

        if (name_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا نام خود را بنویسید",
                icon: "warning",
                button: "باشه",
            });

            return false;
        }
        if (title_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا عنوان نقد و بررسی خود را بنویسید",
                icon: "warning",
                button: "باشه",
            });

            return false;

        }

        if (positive_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا نقاط قوت محصول را بنویسید",
                icon: "warning",
                button: "باشه",
            });

            return false;

        }
        if (negative_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا نقاط ضعف محصول را بنویسید",
                icon: "warning",
                button: "باشه",
            });

            return false;

        }
        if (comment_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا توضیحات خود را بنویسید",
                icon: "warning",
                button: "باشه",
            });

            return false;


        }

        $('form').submit();


    }


    $('.flat-slider').flatslider({
        min: 1,
        max: 3,
        step: 1,
        value: 3,
        range: 'min'
    });


</script>
