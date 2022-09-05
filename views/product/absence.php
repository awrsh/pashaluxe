<style>
    #details .left {
        width: 700px;
        float: left;
        padding: 20px 0;
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
        width: 50%;
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
        background: #eee;
        font-size: 9pt;
        font-family: yekan;
        padding-right: 32px;
        position: relative;
        cursor: pointer;

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

    .right_absence {
        width: 640px;
        height: 260px;
        float: right;
        border-right: grey 1px solid;
        margin-top: 80px;
        padding: 10px;

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

                 <?= $productInfo['viewd']; ?> تعداد بازدید

                </span>

        </div>


    </div>
    <div class="right_absence">

                       <span style="color: #5e5e55; cursor: pointer">

          شناسه محصول:   <?= $productInfo['code_product']; ?>
            </span>

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
                background: url(public/images/slices.png) no-repeat -138px -79px;
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


        </style>



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
                width: 50px;
                height: 100%;
                float: right;
                display: block;
                background: red;
                color: #fff;
                text-align: center;
                border-radius: 4px;
                cursor: pointer;
            }

            .discount_left {
                width: 85px;
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
            }

            .input_notice {
                width: 280px;
                height: 32px;
                margin-top: 2px;
                border: 1px solid #eee;
                padding-right: 10px;
                color: #686664;
                font-family: Tahoma;
                margin-bottom: 5px;
            }

        </style>


        <?php ?>


        <div id="price">

                    <span style="font-size: 9pt; font-family: IRANSans">
                    </span>
            <span style="font-size:11pt;text-decoration: line-through; font-family: IRANSans">
                    </span>
            <span style="font-size: 9pt; font-family: IRANSans">

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

            .addtocart_btn {
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
                box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
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
                display: block;
                margin-right: 7px;
                font-size: 14.4pt;
                color: #fff;
                overflow: hidden;
                text-align: center;
                box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
                cursor: pointer;
            }

        </style>


        <div id="priceforyou">


            <span style="font-size: 14.5pt;color: #a9052a; font-family: IRANSans">محصول مورد نظر موجود نیست</span>
            <br>
            <a style="font-size: 10.5pt;color: #a9052a; font-family: IRANSans">اگه موجود شد بهم اطلاع بده</a>


        </div>

        <form action="product/add_Follow_up/<?= $productInfo['code_product']; ?>/<?= $productInfo['latin_title']; ?>"
              method="post">


            <input name="add_follow" class="input_notice" placeholder="شماره تلفن یا ایمیل:">


            <span onclick="submitForm()" class="add_notice_btn">ثبت</span>





        </form>

    </div>


    <script>

        var garantee_selected = '';

        function addToBasket(productId) {

            var color = $('.colors').find('.circle.active').attr('data-id');
            console.log(garantee_selected);
            var url = '<?= URL ?>product/addtobasket/<?= $productInfo['id'] ?>/' + color + '/' + garantee_selected;
            var data = {};

            $.post(url, data, function (msg) {

                alert('با موفقیت افزوده شد');
                $('#basketTotal').html(msg);
            });

        }
    </script>

    <script>
        function submitForm() {

            $('form').submit();
        }
    </script>


</div>