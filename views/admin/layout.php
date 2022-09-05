<div id="main" style="width: 1200px;margin:10px auto;background: #fff;">

    <style>
        #main::after {
            content: " ";
            clear: both;
            display: block;
        }

        #main {
            padding: 10px;
            font-family: yekan;
            font-size: 12pt;


        }

        .right {
            width: 240px;
            float: right;
            border: 1px solid #ccc;
        }

        .left {
            float: left;
            width: 920px;
            padding: 10px;
            height: 500px;
            overflow-y: scroll;
            box-shadow: 1px 1px 3px #ccc;
        }

        .left_bottom {
            float: left;
            width: 920px;
            padding: 10px;
            height: 500px;
            overflow-y: scroll;
            box-shadow: 1px 1px 3px #b75e5e;
        }

        .right ul {
            padding: 0;
            margin: 0;
        }

        .right ul li a {
            display: block;
            padding: 3px;
            font-size: 11pt;
            border-bottom: 1px dashed #ccc;
            font-family: yekan;
        }

        .right ul li a img {
            display: inline-block;
            float: right;
            margin-left: 10px;
            margin-top: 8px;
            width: 12px;
        }

        .odd {
            background: #fff3e3;

        }

        .right ul li.active a {
            background: #189afc !important;
        }

        .right > ul > li:last-child a {
            border: 0;
        }

        .title {

            border-bottom: 1px solid #ccc;
            margin-top: 0px;
            background: #d5ffd7;
            padding: 4px;
            box-shadow: 0 -2px 3px #ccc;

        }

        table.list {
            width: 100%;
            box-shadow: 0 0 3px #eee;

        }

        table.list td {
            padding: 4px;
            font-size: 11pt;
            border: 1px solid #eee;

        }

        table.list tr:nth-child(even) {
            background: #f4fcff;

        }

        .view {
            width: 20px;

        }

        .btn_green_small {
            background: #4ed133 none repeat scroll 0 0;
            border: 1px solid #eee;
            border-radius: 5px;
            color: #fff;
            float: left;
            font-size: 9pt;
            margin-bottom: 3px;
            padding: 1px 15px;
            text-align: center;
            cursor: pointer;
        }


        .btn_red_small {
            background: red none repeat scroll 0 0;
            border: 1px solid #eee;
            border-radius: 5px;
            color: #fff;
            float: left;
            margin-right: 5px;
            font-size: 9pt;
            margin-bottom: 3px;
            padding: 1px 15px;
            text-align: center;
            cursor: pointer;
        }

    </style>

    <div class="right">

        <?php

        $level = Model::getUserLevel();

        ?>

        <ul>
            <li>
                <a style="text-align: center;font-size: 15pt" class="odd">
                    <img src="public/images/circle.png">
                    میزکار
                </a>
            </li>
            <?php if ($level == 1) { ?>

                <li class="<?php if ($activeMenu == 'category') {
                    echo 'active';
                } ?>">
                    <a style="font-size: 13pt">
                        <img src="public/images/circle.png">
                        دسته ها
                    </a>
                    <ul class="inner">

                        <li>
                            <a href="admincategory/addcategory" style="padding-right: 15px;">
                                <img src="public/images/circle.png">
                                ایجاد دسته جدید
                            </a>
                        </li>
                        <li>
                            <a href="admincategory/index" style="padding-right: 15px;">
                                <img src="public/images/circle.png">
                                مدیریت دسته ها
                            </a>
                        </li>

                    </ul>

                </li>

            <?php } ?>
            <li class="<?php if ($activeMenu == 'product') {
                echo 'active';
            } ?>">
                <a style="font-size: 13pt" class="odd">
                    <img src="public/images/circle.png">
                    مدیریت محصولات
                </a>
                <ul class="inner">

                    <li>
                        <a href="adminproduct/addproduct" style="padding-right: 15px;">
                            <img src="public/images/circle.png">
                            ایجاد محصول جدید
                        </a>
                    </li>
                    <li>
                        <a href="adminproduct/index" style="padding-right: 15px;">
                            <img src="public/images/circle.png">
                            مدیریت محصولات
                        </a>
                    </li>

                </ul>
            </li>
            <li class="<?php if ($activeMenu == 'order') {
                echo 'active';
            } ?>">
                <a style="font-size: 13pt" href="adminorder/index">
                    <img src="public/images/circle.png">
                    مدیریت سفارشات
                </a>
            </li>
            <?php if ($level == 1) { ?>

            <li class="<?php if ($activeMenu == 'stat') {
                echo 'active';
            } ?>">
                <a href="adminstat/index" class="odd">
                    <img src="public/images/circle.png">
                    آمار و گزارشات
                </a>


            </li>

            <?php } ?>

            <li class="<?php if ($activeMenu == 'comment') {
                echo 'active';
            } ?>">
                <a href="admincomment/index">
                    <img src="public/images/circle.png">
                    نظرات
                </a>


            </li>

            <li>
                <a href="admin_question/index">
                    <img src="public/images/circle.png">
                    پرسش و پاسخ
                </a>

            </li>

            <li class="<?php if ($activeMenu == 'setting') {
                echo 'active';
            } ?>">
                <a class="odd" href="adminsetting/index">
                    <img src="public/images/circle.png">
                    تنظیمات سایت
                </a>


            </li>


            <li class="<?php if ($activeMenu == 'slider') {
                echo 'active';
            } ?>">
                <a href="adminslider/index">
                    <img src="public/images/circle.png">
                    مدیریت اسلایدشو
                </a>


            </li>

            <li class="<?php if ($activeMenu == 'picture') {
                echo 'active';
            } ?>">
                <a href="admin_picture/index">
                    <img src="public/images/circle.png">
                    مدیریت تصاویر شماره ۱
                </a>


            </li>

            <li class="<?php if ($activeMenu == 'picture') {
                echo 'active';
            } ?>">
                <a href="admin_screenShots/index">
                    <img src="public/images/circle.png">
                    مدیریت تصاویر شماره ۲
                </a>


            </li>

            </li>

            <li class="<?php if ($activeMenu == 'banner') {
                echo 'active';
            } ?>">
                <a href="admin_banner/index">
                    <img src="public/images/circle.png">
                     مدیریت بنر بالا
                </a>


            </li>

            <li class="<?php if ($activeMenu == 'sidebar') {
                echo 'active';
            } ?>">
                <a href="admin_sideBar_right/index">
                    <img src="public/images/circle.png">
                    مدیریت بنر سمت راست
                </a>


            </li>

            <li class="<?php if ($activeMenu == 'user') {
                echo 'active';
            } ?>">
                <a href="adminuser/index">
                    <img src="public/images/circle.png">
مدیریت مشتریان و کارمندان
                </a>


            </li>
            <li class="<?php if ($activeMenu == 'slider') {
                echo 'active';
            } ?>">
                <a href="admin_color/index">
                    <img src="public/images/circle.png">
                    تنظیمات رنگ
                </a>


            </li>

            <li class="<?php if ($activeMenu == 'slider') {
                echo 'active';
            } ?>">
                <a href="admin_warranty/index">
                    <img src="public/images/circle.png">
                    تنظیمات سایز
                </a>


            </li>


        </ul>
    </div>

    <script>
        function submitForm() {

            $('form').submit();
        }
    </script>

    