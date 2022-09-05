<form action="showcart4/saveorder" method="post">

    <style>

        #main::after {
            content: " ";
            clear: both;
            display: block;
        }

        #main {
            font-family: yekan;
        }

        .head {
            float: right;
            margin-top: 36px;
            width: 100%;
        }

        .head h4 {
            font-size: 12.5pt;
            font-family: yekan;
            margin-top: 5px;
            padding-right: 10px;
            float: right;
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
        }

        .head .btn_green {
            float: left;
            margin-left: 5px;
            margin-top: 8px;
        }

    </style>

    <div id="main" style="width: 1200px;margin:10px auto;padding: 5px;background: #fff;">


        <style>

            .order-steps {

                padding-left: 10px;
                padding-right: 200px;
                padding-top: 53px;
                height: 100px;
                font-family: yekan;
            }

            .order-steps .dashed {

                float: right;
                margin-top: 12px;
                margin-left: 4px;
            }

            .order-steps .dashed span {
                width: 11px;
                height: 3px;
                background: blue;
                display: block;
                float: right;
                margin-left: 3px;
            }

            .order-steps ul {

            }

            .order-steps ul li {

                display: block;
                float: right;
                height: 1px;
                position: relative;
                width: 180px;

            }

            .order-steps ul li .circle {

                width: 19px;
                height: 19px;
                display: block;
                border: 3px solid #ccc;
                border-radius: 100%;
                position: absolute;
            }

            .order-steps ul li.active .circle {

                border: 3px solid #2396f3;
                background: #2396f3 url(public/images/slices.png) no-repeat -810px -476px;
                border-radius: 100%;
                position: absolute;
            }

            .order-steps ul li .line {

                width: 128px;
                height: 2px;
                display: block;
                background: #ccc;
                position: absolute;
                right: 36px;
                top: 15px;

            }

            .order-steps ul li.active .line {

                background: #2396f3;

            }

            .order-steps ul li .title {

                font-size: 11.7pt;
                position: absolute;
                right: -41px;
                top: 27px;
                width: 146px;
            }

            .order-steps ul li.active .title {

                color: #2396f3;
            }

        </style>

        <div class="order-steps">
            <div class="dashed">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li><span class="circle"></span><span class="line"></span><span class="title">
ورود به پاشالوکس
                                    </span></li>
                <li><span class="circle"></span><span class="line"></span><span class="title">
اطلاعات ارسال سفارش
            </span></li>
                <li><span class="circle"></span><span class="line"></span><span class="title">
بازبینی سفارش
            </span></li>
                <li class="active"><span class="circle"></span><span class="line"></span><span class="title">
اطلاعات پرداخت
            </span></li>


            </ul>
            <div class="dashed">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>


        <?php
        $Status = $data['Status'];

        if ($Status != '') {
            ?>

            <style>
                #ErrorPayment {
                    border: 1px solid red;
                    text-align: center;
                    padding: 10px;
                    font-size: 13pt;
                    color: red;
                    font-family: yekan;
                }
            </style>

            <div id="ErrorPayment">

                خطا!
                <?php

                $ErrorArray = unserialize(zarinpalErrors);
                $Error = $ErrorArray[$Status];
                echo $Error;



                ?>

            </div>

        <?php } ?>


        <div class="head">
            <h4>
                ثبت کد تخفیف:
            </h4>

        </div>

        <style>
            .discount_code {
                width: 100%;
                float: right;
                margin-top: 20px;
                font-size: 10.7pt;
                border: 1px solid #eee;
            }
            .delivery_table{
                width: 100%;
                float: right;
                margin-top: 20px;
                font-size: 10.7pt;
                border: 1px solid #eee;

            }

            .discount_code input {
                width: 180px;
                height: 27px;
                border: 1px solid #eee;
            }

            .discount_code td {
                padding: 8px;
            }

            .btn_blue {
                background: #6c59f3 none repeat scroll 0 0;
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
                margin: auto;
            }

            .delivery_style {
                width: 400px;
                height: 32px;
                margin-top: 2px;
                border: 1px solid #eee;
                padding-right: 10px;
                color: #686664;
            }


        </style>

        <table cellspacing="0" class="discount_code">
            <tr>
                <td>


                    کد تخفیف از فروشگاه پاشالوکس دارید؟

                    اگر مایل هستید از کد تخفیف فروشگاه ما استفاده کنید، کافیست کد آن را وارد کرده و با انتخاب دکمه ثبت
                    مبلغ
                    آن از هزینه قابل پرداخت شما کسر می‌شود.
                </td>
                <td>
                    <input type="text" id="code" name="code">
                </td>
                <td>
                <span style="cursor: pointer;" class="btn_blue" onclick="checkCode();">
ثبت کد
                </span>

                </td>
            </tr>
        </table>

        <div class="head">
            <h4>
                بازه زمانی ارسال محصول را مشخص کنید:
            </h4>

        </div>


        <form action="saveOrder" method="post">

            <table class="delivery_table">

                <tr>

            <td>
                <select style="width: 150px; height: 30px; margin: 10px" class="form-select form-select-lg" type="text" id="delivery_time" name="delivery_time" aria-label="Default select example">
                    <option value="0" selected>ساعت ارسال محصول</option>
                    <option value="بین ۹ الی ۱۲">بین ۹ الی ۱۲</option>
                    <option value="بین ۱۲ الی ۱۵">بین ۱۲ الی ۱۵</option>
                    <option value="بین ۱۵ الی ۱۸">بین ۱۵ الی ۱۸</option>
                    <option value="بین ۱۸ الی ۲۱">بین ۱۸ الی ۲۱</option>
                </select>

            </td>
                    <td>


                        <select style="width: 124px; height: 30px; margin: 10px" class="form-select form-select-lg" type="text" id="delivery_day" name="delivery_day" aria-label="Default select example">
                            <option value="0" selected>روز تحویل کالا</option>
                            <option value="شنبه">شنبه</option>
                            <option value="یکشنبه">یکشنبه</option>
                            <option value="دوشنبه">دوشنبه</option>
                            <option value="سه شنبه">سه شنبه</option>
                            <option value="چهارشنبه">چهارشنبه</option>
                            <option value="پنج شنبه">پنج شنبه</option>
                            <option value="جمعه">جمعه</option>
                        </select>

                    </td>

                    <td>

                       <input placeholder="توضیحی درباره ی ارسال محصول دارید؟" class="delivery_style" type="text" id="code" name="more_details">


                    </td>

                </tr>

            </table>


        </form>


        <table cellspacing="0" class="discount_code">
            <tr style="background: #ddfed8;">
                <td style="width: 1000px;">

                    مبلغ کل قابل پرداخت:

                </td>

                <td>
               <span style="font-size: large;" id="total_price">

               </span>
                    تومان
                </td>

            </tr>
        </table>


        <div class="head">
            <h4>
                انتخاب شیوه پرداخت:
            </h4>

        </div>


        <style>
            .payment_type {
                float: right;
                width: 100%;
                margin-top: 20px;

            }

            .payment_type tr:first-child td {
                border-top: 1px solid #eee;
            }

            .payment_type tr:first-child td:first-child {
                border-right: 1px solid #eee;
            }

            .payment_type td {
                border-left: 1px solid #eee;
                border-bottom: 1px solid #eee;
                padding: 5px;
            }

            .payment_type .circle {
                width: 15px;
                height: 15px;
                border: 1px solid #ccc;
                border-radius: 100%;
                position: relative;
                display: block;
                margin-left: 6px;
                margin-top: 4px;
                cursor: pointer;
            }

            .circle.active {
                background: #515ff8;
                border: none;
                position: relative;
            }

            .circle.active tr:first-child td:first-child {
                background: #f7fff7;
            }

            .circle.active::after {
                background: #fff none repeat scroll 0 0;
                border-radius: 100%;
                content: " ";
                display: block;
                width: 5px;
                height: 5px;
                position: absolute;
                right: 5px;
                top: 5px;
            }

            .circle.active {
                background: #515ff8;
                border: none;
                position: relative;
            }

            .circle.active::after {
                background: #fff none repeat scroll 0 0;
                border-radius: 100%;
                content: " ";
                display: block;
                width: 5px;
                height: 5px;
                position: absolute;
                right: 5px;
                top: 5px;
            }

            .circle_container {
                float: right;
            }

            .circle_container input[type=radio] {
                display: none;
            }

        </style>


        <table cellspacing="0" class="active payment_type">
            <tr>
                <td style="width: 60px;position: relative;" rowspan="3">
                    <div class="circle_container">
                        <input type="radio" name="paytype" value="1">
                        <span class="active circle"></span>
                    </div>
                </td>
                <td class="girande" colspan="3">


                     <mark style="padding: 5px;border-radius: 25px 45px">درگاه بانکی زرین پال</mark> -

                   بعد از انتخاب این گزینه شما به درگاه بانکی متصل میشوید.


                </td>

            </tr>


        </table>


        <table cellspacing="0" class="active payment_type">
            <tr>
                <td style="width: 60px;position: relative;" rowspan="3">
                    <div class="circle_container">
                        <input type="radio" name="paytype" value="4">
                        <span class="circle"></span>
                    </div>
                </td>
                <td class="girande" colspan="3">


                    <mark style="padding: 5px;border-radius: 25px 45px">کارت به کارت</mark> -

                    شما می توانید وجه سفارش خود را بصورت انتقال وجه کارت به کارت پرداخت نموده و حداکثر تا 24 ساعت پس از
                    سفارش اطلاعات آن را ثبت نمایید.


                </td>

            </tr>


        </table>


        <table cellspacing="0" class="active payment_type">
            <tr>
                <td style="width: 60px;position: relative;" rowspan="3">
                    <div class="circle_container">
                        <input type="radio" name="paytype" value="5">
                        <span class="circle"></span>
                    </div>
                </td>
                <td class="girande" colspan="3">

                    <mark style="padding: 5px;border-radius: 25px 45px">واریز به حساب</mark> -

                    شما می توانید وجه سفارش خود را از طریق مراجعه به شعب بانک به حساب واریز کرده و تا حداکثر
                    24 ساعت پس از سفارش اطلاعات آن را ثبت نمایید

                </td>


            </tr>


        </table>


        <div style="float: left;width: 100%;margin-top: 50px;">
        <span class="btn_green" onclick="submitForm()" style="float: left;cursor: pointer;">
پرداخت
        </span>
        </div>

    </div>


</form>


<script>
    function submitForm() {

        var time_delivery_validate = document.getElementById("delivery_time").value;
        var day_delivery_validate = document.getElementById("delivery_day").value;

        if (time_delivery_validate === "0") {
            swal({
                title: "خطا",
                text: "لطفا ساعت دریافت محصول را مشخص کنید.",
                icon: "warning",
                button: "باشه",

            });

            return false;
        }

        if (day_delivery_validate === "0") {
            swal({
                title: "خطا",
                text: "لطفا روز دریافت محصول را مشخص کنید.",
                icon: "warning",
                button: "باشه",

            });

            return false;
        }



        $('form').submit();
    }
</script>


<style>
    .red {

        box-shadow: 1px 1px 3px red;
    }

    .green {

        box-shadow: 1px 1px 3px green;

    }
</style>

<script>


    $('.circle').click(function () {

        var parentDiv = $(this).parent('div');
        $('input[name=paytype]').attr('checked', false);
        parentDiv.find('input[name=paytype]').attr('checked', true);

    });

    function calculateTotalPrice() {

        var url = 'showcart4/calculatetotalprice';
        var code = $('#code').val();
        var data = {'code': code};
        $.post(url, data, function (msg) {

            if (msg === '0')
            {
                swal({
                    title: "خطا",
                    text: "به دلیل تعلل در پرداخت محصول ازسبد خرید شما حذف شده است.",
                    icon: "warning",
                    button: "باشه",

                });

            }else
            {
                $('#total_price').text(msg);

            }

        })
    }

    calculateTotalPrice();

    function checkCode() {
        var code = $('#code').val();
        var url = 'showcart4/checkcode/' + code;
        var data = {};
        $.post(url, data, function (msg) {
            console.log(msg);


            if (msg[0] != 0) {
                $('#code').addClass('green').removeClass('red');
                swal({
                    title: "ثبت شد",
                    text: "کد تخفیف اعمال شد.",
                    icon: "success",
                    button: "باشه",

                });
            } else {
                $('#code').addClass('red').removeClass('green');

                swal({
                    title: "خطا",
                    text: "کد تخفیف نامعتبراست!",
                    icon: "warning",
                    button: "باشه",

                });
            }
            $('#totalprice').text(msg[1]);

        }, 'json')
    }

    $('.selectlist').click(function () {
        var ulTag = $('ul', this);
        ulTag.slideToggle(200);
    });

    $('.selectlist ul li').click(function () {
        var txt = $(this).text();
        $('.selectlist .zamanattitle').text(txt);
    });


    $('.circle').click(function () {

        $('.circle').removeClass('active');
        $(this).addClass('active');
    });

</script>

