<!DOCTYPE html>
<html lang="fa">
<head>
    <base href="<?= URL ?>">

    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="public/assets/img/i.c.png">
    <link rel="icon" type="image/png" href="public/assets/img/i.c.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="description" content="فروشگاه اینترنتی پاشالوکس فروشنده اجناس لوکس ولاکچری">
    <meta name="keywords" content="pashaluxe,luxe,luxury,leather,mode">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>

    <title>
        فروشگاه اینترنتی پاشالوکس
    </title>

    <script src="public/js/jquery-3.0.0.min.js"></script>
    <script src="public/js/jquery.flipTimer.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="public/js/jquery.mask.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="public/css/flipTimer.css" rel="stylesheet">


</head>
<body style="margin: 0;background: #<?= body_color ?>;">

<style>

    @font-face {
        font-family: 'yekan';
        src: url('public/fonts/tanha-font-v0.9/Tanha.ttf') format('truetype'),
        url('public/fonts/yekan.eot?#iefix') format('embedded-opentype');
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
        max-width: 100%;
    }

    div, span, p, a, li, ul {
        text-align: right;
        direction: rtl;

    }

    a {
        text-decoration: none;
    }

    .yekan {
        font-family: yekan;
    }

    .fontsm {
        font-size: 10.3pt;
    }

    .fontmd {
        font-size: 11.3pt;
    }

    .fontlg {
        font-size: 12.3pt;
    }

    .error {
        border: 1px solid red;
        text-align: center;
        font-size: 12pt;
        color: red;
        font-family: yekan;
        padding: 8px;
    }

    .success {
        border: 1px solid green;
        text-align: center;
        font-size: 12pt;
        color: green;
        font-family: yekan;
        padding: 8px;
    }

    .row2 {
        width: 100%;
        float: right;
        margin-bottom: 10px;
    }

    .img_logo_header {
        width: 200px;
        height: 230px;
        margin-top: -86px;
        margin-right: 60px;
    }

</style>

<header style="background-color: #fff;">


    <div id="header" style="width:-moz-fit-content;height: 100px;margin: 0 auto;padding-top: 15px;">
        <div id="header_right" style="width: 720px;float: right;height: 100px;">
            <div id="header_right_top" style="height: 40px;">

                <?php
                Model::sessionInit();
                $userId = Model::sessionGet('userId');
                $model = new Model;
                $basket = $model->getBasket();
                $all = 0;


                foreach ($basket[0] as $row) {
                    $all = $all + $row['tedad'];
                }

                if ($userId == false) {

                    ?>

                    <span
                            style="width: 20px;height: 20px;background: url(public/images/lock.png);display: block;float: right;"></span>
                    <a class="yekan fontsm" href="<?= URL ?>register"
                       style="float: right;margin-right: 10px; color: #686664;">
                        پاشالوکس،وارد شوید
                    </a>
                    <span
                            style="width: 20px;height: 20px;background: url(public/images/signup.png);display: block;float: right;margin-right: 20px;"></span>
                    <a class="yekan fontsm" href="<?= URL ?>register"
                       style="float: right;margin-right: 10px; color: #686664">
                        ثبت نام کنید
                    </a>

                <?php } else { ?>


                    <span
                            style="width: 20px;height: 20px;background: url(public/images/lock.png);display: block;float: right;"></span>
                    <a class="yekan fontsm" style="float: right;margin-right: 10px;">
                        خوش آمدید!
                    </a>
                    <span
                            style="width: 20px;height: 20px;background: url(public/images/signup.png);display: block;float: right;margin-right: 20px;"></span>
                    <a class="yekan fontsm" href="<?= URL ?>panel"
                       style="float: right;margin-right: 10px;color: #686664">

                        مشاهده پنل کاربری
                    </a>

                    <a class="yekan fontsm" href="<?= URL ?>panel/logout"
                       style="float: right;margin-right: 10px;color: #686664">

                        خروج
                    </a>

                <?php } ?>


            </div>
            <div id="header_right_bottom" style="height: 50px;">

                <div id="basket_top" style="width: 190px;height: 40px;float: right;">

                    <div id="basket_top_right"
                         style="border-radius: 3px; width: 54px;height: 100%;background: #43c851 url(public/images/basket.png) no-repeat center;float: right;"></div>

                    <a href="showcart" id="basket_top_left"
                       style="border-radius: 3px; width: 100px;height: 100%;background: #38a844;float: right;padding: 0 15px;line-height: 35px;">

                        <span class="yekan fontsm" style="color: #fff;">سبد خرید</span>

                        <span class="fontsm"
                              style=" font-family: Tahoma; width: 25px;height: 25px;background: #eee;text-align: center;display: block;float: left;margin-top: 7px;border-radius: 100%;line-height: 23px;"
                              id="basketTotal">
                            <?= $all ?></span>

                    </a>


                </div>

                <div id="search_top"
                     style="width: 480px;height:40px;float: right;margin-right: 20px;position: relative; ">
                    <input class="yekan" type="text"
                           style="width: 480px;height:32px;margin-top:2px;border:1px solid #eee;padding-right: 10px;color: #686664;"
                           placeholder="محصول،دسته یا برند مورد نظر خود را سرچ کنید..."/>

                    <span style="width: 42px;height: 35px;background:url(public/images/search.png) no-repeat center #ccc;display: block;position: absolute;left:-12px;top:3px"></span>

                </div>
            </div>


        </div>

        <div id="header_left" style="float: left;width: fit-content">

            <a href="index">

                <img class="img_logo_header" src="public/images/pashaluxe_logo.png" alt="pashaluxe">

            </a>

        </div>

    </div>


</header>


<style>

    nav {
        box-shadow: 1px 3px 4px #ccc;
        -webkit-box-shadow: 1px 3px 4px #ccc;
    }

    ul {
        margin: 0;
    }

    li {
        list-style: none;
    }

    #menu_top > ul {
        position: relative;
        padding: 0;
        z-index: 2;
    }

    #menu_top > ul > li {
        float: right;
        height: 40px;
    }

    #menu_top > ul > li > a {
        padding: 0 10px;
        height: 40px;
        display: block;
        line-height: 36px;
        font-size: 11pt;
    }

    #menu_top > ul > li > ul {
        position: absolute;
        right: 0;
        background-color: #fff;
        width: 1200px;
        padding: 0;
        box-shadow: 0 2px 3px #aaa;
        display: none;
    }

    #menu_top > ul > li > ul > li {
        float: right;
    }

    #menu_top > ul > li > ul > li > a {
        padding: 5px 10px;
        display: block;
    }

    .menu_down_icon {
        background: rgba(0, 0, 0, 0) url(public/images/down.png) repeat scroll 0 0;
        display: block;
        float: left;
        height: 4px;
        margin-right: 5px;
        margin-top: 17px;
        width: 7px;
    }

    .top_menu3_col {

        width: 299px;
        height: 100%;
        float: right;
        border-left: 1px solid #eee;
    }

    .top_menu3_col .active-menu {

        box-shadow: none;

    }

    .top_menu3_col_ul li {

        padding-right: 15px;
        cursor: pointer;

    }

    .top_menu3_col_ul li:hover {

        background: #e9fdd8;

    }

    .top_menu3_col_ul .level3 {

        padding-right: 5px;

    }

    .submenu3 {
        display: none;
        z-index: 3;
    }

    .active-menu {
        background: #fff;
        box-shadow: 0 -1px 3px #eee;
    }

    .active-menu > a {
        color: red;
    }

    #menu_top a {
        cursor: pointer;
    }

    #menu_top_nav {
        width: 100%;
        height: 40px;
        background: #<?= menu_color ?>;
        border-top: 1px solid #ecf3f3;
        box-shadow: 0 2px 3px #aaa;
    }


</style>

<nav id="menu_top_nav">

    <div id="menu_top" style="width: 1200px;height: 40px;margin: auto;">

        <ul><!--level1-->

            <?php
            $model = new Model;

            $Menu = $model->getMenu();


            foreach ($Menu as $level1) {
                ?>

                <li data-time="<?= $level1['id'] ?>">
                    <a style="color: #121312" class="yekan" href="<?= URL ?>search/index/<?= $level1['id']; ?>">

                        <?= $level1['title'] ?>
                        <span class="menu_down_icon"></span>
                    </a>

                    <ul> <!--level2-->

                        <?php
                        @$children1 = $level1['children'];

                        foreach ($children1 as $level2) {

                            ?>

                            <li data-time="<?= $level2['id'] ?>">
                                <a style="color: black;font-family: Tahoma"
                                   href="<?= URL ?>search/index/<?= $level2['id']; ?>">
                                    <?= $level2['title'] ?>
                                </a>

                                <div class="submenu3"
                                     style="width: 1200px;height: 300px;background: #fff;border-top: 1px solid #eee;position: absolute;right: 0;">


                                    <ul style="padding-right: 10px;" class="top_menu3_col top_menu3_col_ul">
                                        <?php
                                        if (isset($level2['children'])){
                                        $children2 = $level2['children'];
                                        $i = 1;
                                        foreach ($children2

                                        as $level3) {

                                        ?>
                                        <?php
                                        if ($i % 10 == 0) {
                                        ?>

                                    </ul>
                                    <ul style="padding-right: 10px;" class="top_menu3_col top_menu3_col_ul">

                                        <?php } ?>

                                        <li class="level3 yekan fontsm"><?= $level3['title']; ?>

                                        </li>

                                        <?php
                                        $i++;

                                        if (isset($level3['children'])){
                                        $children3 = $level3['children'];
                                        foreach ($children3

                                        as $level4) {
                                        ?>
                                        <?php
                                        if ($i % 10 == 0) {
                                        ?>

                                    </ul>
                                    <ul style="padding-right: 10px;" class="top_menu3_col top_menu3_col_ul">

                                        <?php } ?>

                                        <li class="yekan fontsm"><?= $level4['title'] ?></li>
                                        <?php
                                        $i++;
                                        }//level4

                                        ?>

                                        <?php

                                        }//if level3


                                        }// foreach

                                        }
                                        ?>

                                    </ul>

                                </div>
                            </li>

                        <?php } ?>

                    </ul><!--level2-->

                </li>

            <?php } ?>

        </ul><!--level1-->

    </div>

</nav>
