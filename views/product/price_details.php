<style>
    #details .left {
        width: 700px;
        float: left;
        padding: 20px 0;
        margin-bottom: 20px;
    }

    #details .left .title {
        font-family: yekan;
        font-size: 15pt;
        background: #eee;
        border-radius: 4px;
        padding: 8px;
    }

    .gray {
        background: rgba(0, 0, 0, 0) url(public/images/stars.png) repeat scroll 0 -9px;
        height: 9px;
        margin: 0 auto;
        position: relative;
        width: 55px;
    }

    .red {
        background: rgba(0, 0, 0, 0) url(public/images/stars.png) repeat scroll 0 0;
        height: 9px;
        left: 0;
        position: absolute;
        top: 0;
        width: 70%;
    }

    .stars {
        float: left;
        margin-left: 15px;
    }

    .rate {
        float: left;
        font-size: 9.5pt;
        font-family: yekan;
        margin-top: 3px;
    }

    #details .left .right {
        width: 415px;
        float: right;
    }

    #details .left .right h4 {
        font-size: 9.8pt;
        font-family: yekan;
    }

    #details .left .left {
        width: 300px;
        float: left;
    }

    #details .colors {
        float: right;
        margin-bottom: 13px;
        padding: 0;
        width: 100%;
    }

    #details .colors li {
        width: 46px;
        height: 28px;
        float: right;
        margin-left: 6px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background: #eee;
        font-size: 9pt;
        font-family: yekan;
        padding-right: 32px;
        position: relative;
        cursor: pointer;
        line-height: 23px;

    }

    #details .colors li .circle {

        border-radius: 50%;
        display: block;
        height: 17px;
        position: absolute;
        right: 6px;
        top: 5px;
        width: 17px;
    }

    #details .colors li .circle.active::after {

        content: " ";
        width: 10px;
        height: 10px;
        position: absolute;
        right: 4px;
        top: 4px;
        display: block;
        background: url(public/images/slices.png) no-repeat -169px -83px;

    }

    .right_price_details {
        width: 540px;
        float: right;
    }

    .category_span {
        color: grey;
    }

</style>

<div class="left">
    <div class="title">

        <?= $productInfo['title']; ?>
        <?= $productInfo['latin_title']; ?>

        <div class="stars textcenter">
            <div class="gray">
                <div class="red"></div>
            </div>

            <span class="rate">

                 <?= $productInfo['viewd']; ?> بازدید

                </span>

        </div>


    </div>
    <div class="right_price_details">

                       <span style="color: #5e5e55; cursor: pointer; border-bottom: 1px silver solid;">

             شناسه محصول: PLX <?= $productInfo['code_product']; ?>
            </span>

        <span style="color: #5e5e55; margin-right: 10px; cursor: pointer;border-bottom: 1px silver solid;">

          فروشنده:   <?= $productInfo['seller']; ?>

            </span>

        <span style="color: #5e5e55; margin-right: 10px; cursor: pointer; border-bottom: 1px silver solid;">
محل کالا:
           <?php if (@$productInfo['Product_location'] == 1) {
               echo 'انبارپاشالوکس';
           } elseif (@$productInfo['Product_location'] == 2) {
               echo 'انبارفروشنده';
           } ?>

            </span>

        <br>


        <span>
            دسته بندی:
        </span>

        <?php
        $all_category_main = $productInfo['all_category_main'];
        $all_category_sub = $productInfo['all_category_sub'];

        echo @$all_category_main['title'];
        echo '<span class="category_span"> -> </span>';
        echo @$all_category_sub['title'];


        ?>


        <h4>انتخاب رنگ:</h4>


        <ul class="colors">


            <?php

            $all_colors = $productInfo['all_colors'];

            foreach ($all_colors as $color) {

                ?>
                <li>
                    <span data-id="<?= $color['id']; ?>" class="circle"
                          style="background: <?= $color['hex']; ?>;"></span>
                    <?= $color['title']; ?>
                </li>
            <?php }
            ?>


        </ul>

        <style>
            #selectlist {
                width: 390px;
                height: 37px;
                border: 1px solid #ccc;
                background: #eee;
                position: relative;
                text-align: center;
                cursor: pointer;
            }

            #selectlist::before {
                content: " ";
                width: 23px;
                height: 23px;
                display: block;
                position: absolute;
                right: 3px;
                top: 9px;
                background: url(public/images/slices.png) no-repeat -417px -270px;
            }

            #selectlist::after {
                content: " ";
                width: 22px;
                height: 17px;
                display: block;
                position: absolute;
                left: 3px;
                top: 13px;
                background: url(public/images/slices.png) no-repeat -31px -461px;
            }

            #selectlist span {
                font-size: 9.7pt;
                line-height: 36px;
            }

            #selectlist ul {
                padding: 0;
                box-shadow: 0 2px 2px #cacaca;
                display: none;
                background: #fff;

            }

            #selectlist ul li {
                font-family: yekan;
                font-size: 10pt;
                padding: 2px 5px;

            }

            #selectlist ul li:hover {
                background: #f9f9ff;

            }

            .span_info_wight {
                background: url(public/images/slices.png) no-repeat -988px -536px;
                display: inline-block;
                width: 24px;
                height: 24px;
                cursor: pointer;

            }

        </style>

        <h4>انتخاب سایز:
            <span title="راهنمای سایز" class="span_info_wight"></span>

        </h4>


        <div id="selectlist">

                    <span class="yekan zamanattitle">
انتخاب کنید
                    </span>

            <ul>
                <?php


                $all_garantee = $productInfo['all_garantee'];

                foreach ($all_garantee as $garantee) {
                    ?>
                    <li data-id="<?= $garantee['id']; ?>"><?= $garantee['title']; ?></li>
                <?php } ?>

            </ul>

        </div>

        <style>
            #price {
                float: right;
                width: 100%;
                margin-top: 40px;
            }

            #price .discount {
                display: block;
                float: left;
                font-family: yekan;
                font-size: 9pt;
                height: 22px;
                margin-left: 100px;
                margin-top: 5px;
                width: 135px;
            }

            .discount_right {
                width: 90px;
                height: 100%;
                float: right;
                display: block;
                background: red;
                color: #fff;
                text-align: center;
                border-radius: 4px;
                cursor: pointer;
                margin-bottom: 1px;
                font-size: 11pt;
                border-radius: 25px 45px 10px 80px;
            }

            .discount_left {
                width: 100%;
                height: 100%;
                float: right;
                display: block;
                background: #ff5484;
                color: #fff;
                line-height: 20px;
                text-align: center;
                border-radius: 5px;
                cursor: pointer;
                font-family: Tahoma;
                font-size: 13pt;
                border-radius: 25px 45px 10px 80px;
            }

            .span_weight {
                width: 28px;
                height: 28px;
                display: block;
                float: left;
                background: url(public/images/slices.png);
                margin-right: 4px;
            }

            .a_weight {
                float: left;
                color: grey;
                cursor: pointer;
                line-height: 2;
            }


        </style>
        <a class="a_weight">
            <?= $productInfo['weight'] ?>گرم
        </a>
        <span style="background-position:-462px -304px;" class="span_weight">
                           </span>

        <div id="price">

                    <span style="font-size: 9pt; font-family: IRANSans">
                        قیمت اصلی:
                    </span>
            <span style="font-size:11pt;text-decoration: line-through; font-family: IRANSans">
<?= number_format($productInfo['price']) ?>
                    </span>
            <span style="font-size: 9pt; font-family: IRANSans">
تومان
                     </span>

            <span class="discount">
                    <span class="discount_right">
                        تخفیف
                        ٪<?= number_format($productInfo['discount']) ?>

                    </span>

                    <span class="discount_left">

                        <?= number_format($productInfo['price_discount']) ?>
                        تومان


                    </span>

                    </span>

        </div>


        <style>
            #priceforyou {
                float: right;
                width: 100%;
                margin-top: 30px;

            }

            #compare {
                float: right;
                width: 100%;
                margin-top: 30px;
            }

            .compare_btn {
                width: 155px;
                height: 40px;
                background: #ccc;
                border-radius: 4px;
                float: right;
                display: block;
                font-size: 12.4pt;
                color: #fff;
                text-align: center;
                box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
            }

            .add_too_cart_btn {
                width: 210px;
                height: 40px;
                background: green;
                border-radius: 4px;
                float: right;
                display: block;
                margin-right: 7px;
                font-size: 12.4pt;
                color: #fff;
                overflow: hidden;
                text-align: center;
                cursor: pointer;
                box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
                font-family: yekan;
            }

            .added_too_cart_btn {
                width: 210px;
                height: 40px;
                border-radius: 4px;
                float: right;
                padding-right: 5px;
                display: inline-block;
                margin-right: 7px;
                font-size: 12.4pt;
                color: #fff;
                overflow: hidden;
                background: #43c851 url(public/images/basket.png) no-repeat center;
                text-align: -moz-right;
                cursor: pointer;
                box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
                font-family: yekan;
            }

            .addtocart_btn i {
                background: #2ed017 url("public/images/slices.png") no-repeat scroll -153px -412px;
                display: block;
                float: right;
                height: 100%;
                width: 40px;
            }


            .add_notice_btn {
                width: 200px;
                height: 40px;
                background: green;
                border-radius: 4px;
                float: right;
                display: block;
                margin-right: 7px;
                font-size: 14.4pt;
                color: #fff;
                overflow: hidden;
                text-align: center;
                box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
                cursor: pointer;
            }

            .available_basket {
                background: url(public/images/slices.png);
                width: 50px;
                height: 60px;
                display: block;
                margin-right: 200px;
                float: none;
                cursor: pointer;
            }

        </style>


        <div id="priceforyou">


            <span style="font-size: 14.5pt; font-family: IRANSans">قیمت برای شما:</span>
            <span style="font-size: 15.5pt;color:#454545; font-family: IRANSans"><?= number_format($productInfo['price_total']) ?></span>
            <span style="font-size: 9pt;font-family: IRANSans">تومان</span>

        </div>


        <div id="compare">


            <span class="add_too_cart_btn" onclick="addToBasket(<?= $productInfo['id'] ?>)"> افزودن به سبد خرید </span>


            <div style="width: 190px;height: 40px;float: right;">

                <a id="added_too_basket" href="showcart"
                   style="border-radius: 8px; visibility: hidden; cursor: pointer; width: 59px;margin-right: 5px; height: 100%;background: #43c851 url(public/images/basket.png) no-repeat center;float: right;">
                </a>


                <?php

                $basket_cookie = $data['basket_cookie'];
                $productInfo = $data['productInfo'];


                foreach ($basket_cookie as $row) {
                    if ($row['idproduct'] == $productInfo['id']) {

                        echo '<span title="این محصول در سبد خرید شما موجود است" style="background-position:-1102px -123px;" class="available_basket"></span>';

                    }

                }

                ?>
            </div>


        </div>


        <script>

            var garantee_selected = '';

            function addToBasket(productId) {

                var color = $('.colors').find('.circle.active').attr('data-id');
                console.log(garantee_selected);
                var url = '<?= URL ?>product/addtobasket/<?= $productInfo['id'] ?>/' + color + '/' + garantee_selected;
                var data = {};

                if (color == null) {

                    swal("انتخاب رنگ!", "لطفا رنگ محصول خود را انتخاب کنید.");
                } else if (garantee_selected == '') {

                    swal("انتخاب سایز!", "لطفا سایز محصول خود را انتخاب کنید.");

                } else {
                    $.post(url, data, function (msg) {

                        swal({
                            title: "افزوده شد",
                            text: "سبد خرید شما به روز شد",
                            icon: "success",
                            button: "باشه",

                        });

                        $('#added_too_basket').css('visibility', 'visible');

                        $('#basketTotal').html(msg);


                    });
                }


            }
        </script>

        <script>
            function submitForm() {

                $('form').submit();
            }
        </script>

    </div>