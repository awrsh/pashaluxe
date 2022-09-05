<?php
$option = Model::getoption();
?>
<style>
    footer {
        height: 300px;
        float: right;
        margin-top: 40px;
        width: 100%;
    }

    #footer_top {
        background: #6d717a none repeat scroll 0 0;
        height: 45px;
    }

    #footer_bottom {
        height: 255px;
        background: #f7f8fa none repeat scroll 0 0;
    }

    footer .main {
        width: 1200px;
        height: 100%;
        margin: auto;
    }

    #footer_top span {
        color: #fff;
    }

    #footer_top i {
        background: url(public/images/slices.png);
        display: inline-block;
        float: left;
        height: 17px;
        margin-right: 14px;
        margin-top: 10px;
        width: 17px;
    }

    #footer_top ul {
        padding: 0;
        float: left;
        height: 100%;
    }

    #footer_top li {
        float: right;
        height: 100%;
        margin-left: 15px;
    }

    #footer_top li a {
        color: #fff;
        line-height: 42px;
    }
</style>

<footer>

    <div id="footer_top">
        <div class="main">

            <span style="line-height: 38px;cursor: pointer;margin-right: 10px" class="yekan fontlg">
                 ۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم.
            </span>

            <ul>
                <li>
                    <a href="tel:09307543589" class="yekan">

                        <?= $option['tel']; ?>

                        - 09307543589

                        <i style="background-position: -397px -420px;"></i>

                    </a>
                </li>

                <li>
                    <a href="mailto:pashaluxe1@gmail.com" class="yekan">
                        <?= $option['email']; ?>
                        <i style="background-position: -321px -420px; cursor: pointer;"></i>

                    </a>
                </li>
            </ul>

        </div>
    </div>

    <style>
        #footer_bottom .right {
            width: max-content;
            height: 100%;
            float: right;
        }

        #footer_bottom .right ul span {

            cursor: pointer;
        }

        #footer_bottom .right ul li a {
            font-size: 11pt;
        }

        #footer_bottom .center {
            width: 230px;
            height: 100%;
            float: right;
            margin: 10px;
            border: black;
        }

        .center ul li a {
            color: #073f85;
        }

        #footer_bottom .left {
            width: 590px;
            height: 100%;
            float: left;
        }

        #footer_bottom ul li {
            font-family: yekan;
            font-size: 11.3pt;
            line-height: 58px;
        }

        #footer_bottom .title2 {
            font-size: 14pt;
        }

        #footer_bottom .email input {
            width: 430px;
            height: 38px;
            border: 1px solid #ccc;
            font-family: yekan;
        }

        #footer_bottom .email .btn {
            background: #208de6 none repeat scroll 0 0;
            display: block;
            float: left;
            height: 36px;
            border-radius: 10px;
            margin-left: 28px;
            margin-top: 2px;
            width: 110px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
            text-align: center;
            color: #fff;
            font-family: yekan;
            line-height: 32px;
            font-size: 10pt;
            cursor: pointer;
        }

        footer .social {
            float: left;
            margin-top: 26px;
            width: 100%;
        }

        footer .social img {
            float: left;
            margin-left: 4px;
        }

        .social_button {
            width: 28px;
            height: 28px;
            display: block;
            float: right;
            background: url(public/images/slices.png);
            margin-right: 4px;
            animation: pulse 3s infinite;
        }

        @keyframes pulse {
            80% {
                box-shadow: #41a4bf 0 0 0 0;
            }
            0% {
                box-shadow: #ff280000 0 0 0 20px
            }

        }


        .info_button {
            width: 41px;
            height: 28px;
            display: block;
            float: right;
            background: url(public/images/slices.png);
            margin-right: 4px;
        }
    </style>

    <div id="footer_bottom">

        <div class="main">

            <div class="right">

                <ul>
                    <li><a>ما را در شبکه های اجتماعی دنبال کنید.</a></li>

                    <a href="https://www.facebook.com/pashaluxe/"><span title="پاشالوکس در فیس بوک"
                                                                        class="social_button"
                                                                        style="background-position:-577px -621px; "></span></a>
                    <a href="https://www.twitter.com/pashaluxe/"> <span title="پاشالوکس در توییتر" class="social_button"
                                                                        style="background-position:-453px -621px; "></span>
                    </a>

                    <a href="https://www.instagram.com/pashaluxe/">
                        <span title="پاشالوکس در اینیستاگرام" class="social_button"
                              style="background-position:-536px -621px; "></span></a>
                    <a href="https://t.me/pashaluxe/">
                    <span title="پاشالوکس در تلگرام" class="social_button"
                          style="background-position:-618px -621px; "></span>
                    </a>


                    <a href="https://www.linkedin.com/pashaluxe/">
                       <span title="پاشالوکس در لینکدین" class="social_button"
                             style="background-position:-411px -621px; ">
                       </span>
                    </a>

                    <a href="https://www.aparat.com/pashaluxe/">
                               <span title="پاشالوکس در آپارات" class="social_button"
                                     style="background-position:-370px -621px; "></span>

                    </a>

                </ul>


            </div>
            <div class="center">
                <ul>
                    <span class="info_button" style="background-position:-971px -373px; "></span>
                    <li><a href="record_order/index">طریقه ثبت سفارش</a></li>
                    <span class="info_button" style="background-position:-312px -470px; "></span>
                    <li><a href="sending_method/index">رویه های ارسال سفارش</a></li>
                    <span class="info_button" style="background-position:-253px -470px; "></span>
                    <li><a href="payment_method/index">شیوه های پرداخت</a></li>

                </ul>
            </div>

            <div class="center">
                <ul>
                    <span class="info_button" style="background-position:-1037px -534px; "></span>
                    <li><a href="notice_new_product/index">اطلاع از محصولات جدید</a></li>
                    <span class="info_button" style="background-position:-256px -304px; "></span>
                    <li><a href="contact_us/index">ارتباط با پاشالوکس</a></li>
                    <span class="info_button" style="background-position:-987px -533px; "></span>
                    <li><a href="about/index">درباره ما</a></li>

                </ul>
            </div>

        </div>

    </div>

</footer>

</body>
</html>

<script>

    var timer = {};

    $('#menu_top li').hover(function () {

        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {

            $(' > ul', tag).fadeIn(0);
            tag.addClass('active-menu');
            $(' > .submenu3', tag).fadeIn(0);

        }, 500);

    }, function () {

        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {

            $(' > ul', tag).fadeOut(0);
            tag.removeClass('active-menu');
            $(' > .submenu3', tag).fadeOut(0);
        }, 600);

    })

</script>


