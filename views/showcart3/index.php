<style>

    #main::after {
        content: " ";
        clear: both;
        display: block;
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

    .content table {
        width: 100%;
        font-family: yekan;
        font-size: 11pt;
        float: right;
        margin-top: 10px;
    }

    .content table td {
        border-left: 1px solid #eee;
        border-bottom: 1px solid #eee;
        padding: 3px;
    }

    .content table tr td:not(:first-child) {
        text-align: center;
    }

    .content table tr td:first-child {
        border-right: 1px solid #eee;
    }

    .content table tr:first-child {
        background: #f7f9fa;
    }

    .content table tr:first-child td {
        text-align: center;
        padding: 10px;
        border-top: 1px solid #eee;
    }

    .content table .right {
        float: right;
    }

    .content table .left {
        float: right;
        margin-right: 8px;
        border-right: #928d8d 1px solid;
        padding: 10px;
    }

    .content table .left p {
        margin: 2px 0;
    }

    .content table .right img {
        max-width: 135px;
        max-height: 135px;
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

        .span_review_basket {
            background: url(public/images/slices.png);
            display: inline-block;
            height: 30px;
            width: 39px;
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
???????? ???? ????????????????
                                    </span></li>
            <li><span class="circle"></span><span class="line"></span><span class="title">
?????????????? ?????????? ??????????
            </span></li>
            <li class="active"><span class="circle"></span><span class="line"></span><span class="title">
?????????????? ??????????
            </span></li>
            <li><span class="circle"></span><span class="line"></span><span class="title">
?????????????? ????????????
            </span></li>


        </ul>
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>


    <div class="head">
        <h4>
            ?????????????? ?????? ???????? ?????? ???? ????????????????
            <span class="span_review_basket" style="background-position:-894px -620px;"></span>
        </h4>
        <a href="showcart4" class="btn_green">
            ?????????? ????????
        </a>
    </div>


    <style>
        .selectlist {
            width: 100px;
            height: 37px;
            border: 1px solid #ccc;
            background: #eee;
            position: relative;
            text-align: center;
            cursor: pointer;
            margin: auto;
        }

        .selectlist::after {
            content: " ";
            width: 22px;
            height: 17px;
            display: block;
            position: absolute;
            left: 3px;
            top: 13px;
            background: url(public/images/slices.png) no-repeat -31px -461px;
        }

        .selectlist span {
            font-size: 9.7pt;
            line-height: 36px;
        }

        .selectlist ul {
            padding: 0;
            box-shadow: 0 2px 2px #cacaca;
            display: none;
            background: #fff;

        }

        .selectlist ul li {
            font-family: yekan;
            font-size: 10pt;
            padding: 2px 5px;

        }

        .selectlist ul li:hover {
            background: #f9f9ff;

        }

        .content table .price {
            font-size: 12pt;
        }

        .content table .tuman {
            font-size: 10pt;
        }

        .content table .edit_td {
            background: #c4e5ff;
        }

        .content table .edit_icon {
            width: 18px;
            height: 18px;
            display: block;
            background: url(public/images/slices.png) no-repeat scroll -811px -413px;
            margin: auto;
        }

    </style>

    <div class="content">
        <table cellspacing="0">
            <tr>
                <td>?????? ??????????</td>
                <td>??????????</td>
                <td>???????? ????????</td>
                <td style="border-left: 0;">???????? ????</td>
                <td></td>
            </tr>
            <?php

            $basketInfo = $data['basketInfo'];
            $basket = $basketInfo[0];
            foreach ($basket as $row) {


                ?>

                <tr>
                    <td>
                        <div class="right">
                            <img style="height: 135px;width: 135px"
                                 src="public/images/products/<?= $row['id']; ?>/product_220.jpg"
                                 alt="<?= $row['title']; ?>">
                        </div>
                        <div class="left">

                            <p>
                                <?= $row['title']; ?>
                                <?= $row['latin_title']; ?>
                            </p>

                            <p>
                                ?????? ??????????????:
                                <?= $row['colorTitle']; ?>
                                <span class="product_color" style="background-color: <?= $row['colorHex'] ?>;"></span>

                            </p>

                            <p>
                                ???????? ??????????????:
                                <?= $row['garanteeTitle'] ?>

                            </p>

                            <p>
                                ?????? ???????????? ??????????:
                                <?= $row['weight'] ?>
                                ??????
                            </p>

                            <p style="color: #5e5e55">
                                ?????????? ??????????:PLX-<?= $row['code_product']; ?>
                            </p>


                        </div>
                    </td>
                    <td>

                    <span class="yekan zamanattitle">
<?= $row['tedad']; ?>
                    </span>


                    </td>
                    <td>
                        <span class="price"><?= number_format($row['price']) ?></span>
                        <span class="tuman">??????????</span>
                    </td>
                    <td>
                        <span class="price">
                            <?= number_format($row['tedad'] * $row['price']) ?></span>
                        <span class="tuman">??????????</span>
                        <br>
                        <span style="color:red;"><?= number_format($row['discountTotal']) ?></span>
                        <span class="tuman">?????????? ??????????</span>
                    </td>
                    <td class="edit_td">
                        <a href="showcart">
                            <i class="edit_icon"></i>
                        </a>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>

    <style>

        #final_price {
            width: 600px;
            float: left;
            font-family: yekan;
            margin-top: 50px;
            border: 1px solid #66585b;
            padding: 10px;
            border-radius: 20px;
        }

        #total_price, #send_price, #discount_price {
            border-bottom: 1px solid greenyellow;
            float: right;
            padding: 6px 2px;
            width: 100%;
        }

        .total_price1 {
            float: right;
            color: #66585b;
            font-size: 10pt;
        }

        .total_price2 {
            float: right;
            color: #66585b;
            font-size: 13pt;
            margin-right: 395px;
        }

        .totlal_price3 {

            float: right;
            color: #66585b;
            font-size: 9pt;
            margin-right: 10px;
            margin-top: 3px;
        }

        #pardakht_price {

            float: right;
            padding: 6px 2px;
            width: 100%;

        }

        .product_color {
            display: inline-block;
            height: 12px;
            margin-left: 5px;
            position: relative;
            top: 2px;
            width: 11px;
        }

        .mark_information {
            padding: 5px;
            border-radius: 25px 45px;
            margin-right: 247px;
            margin-bottom: 10px;
            margin-top: 10px;
            background-color: green;
            color: white;
        }

        .mark_information1 {
            padding: 5px;
            border-radius: 25px 45px;
            margin-bottom: 10px;
            margin-top: 10px;
            background-color: green;
            color: white;
        }

    </style>

    <div id="final_price">
        <div id="total_price">
            <span class="total_price1">
                ?????? ???? ???????? ?????? :
            </span>
            <span class="total_price2">
               <?php echo number_format($basketInfo[1]) ?> ??????????
            </span>
        </div>

        <div id="send_price">
            <span class="total_price1">
?????????? ?????????? ?????????? ???????? ?? ????????:
            </span>

            <mark class="mark_information">????????????</mark>


        </div>

        <div id="discount_price">
            <span class="total_price1">
?????? ???? ???????? ??????????:
            </span>
            <span class="total_price2">
                <?php echo number_format($basketInfo[2]) ?> ??????????
            </span>
        </div>

        <div id="pardakht_price">

            <span class="total_price1">
???????? ???????? ????????????:
            </span>
            <span class="total_price2">
                <?php
                $priceTotal = $basketInfo[1] - $basketInfo[2];
                echo number_format($priceTotal); ?> ??????????
            </span>
        </div>


    </div>


    <div class="head">
        <h4>
            ?????????????? ?????????? ??????????:
        </h4>

    </div>

    <style>
        .review_send_info {
            width: 100%;
            float: right;
            margin-top: 30px;
            font-family: yekan;
            font-size: 11pt;
        }

        .review_send_info td {

            border-right: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 5px;
        }

        .review_send_info tr:first-child td {

            border-top: 1px solid #eee;

        }

        .review_send_info tr td:last-child {

            border-left: 1px solid #eee;

        }

        .review_send_info i {
            width: 31px;
            height: 35px;
            background: url(public/images/slices.png) no-repeat;
            display: block;
        }
    </style>

    <table class="review_send_info" cellspacing="0">

        <?php
        $addressInfo = $data['addressInfo'];

        ?>

        <tr>
            <td>
                <i style="background-position: -810px -200px;"></i>
            </td>
            <td>
                ?????? ?????????? ???? ??????/????????:
                <b><?= $addressInfo['family'] ?></b>
                ???? ???????? ????????:
                <u><?= $addressInfo['address'] ?></u>
                ???? ?????????? ????????:
                <b><?= $addressInfo['mobile'] ?></b>
                ?????????? ???????????????.
            </td>
        </tr>

        <tr>
            <td><i style="background-position: -806px -242px;"></i></td>
            <td>
                ?????? ?????????? ???? ???????? ?????? ????????????????
                ???? ????????
                <mark class="mark_information1">????????????</mark>
                ???? ?????? ?????????? ???????? ??????????
                ????.
            </td>
        </tr>


    </table>


    <div style="float: left;width: 100%;margin-top: 50px;">
        <a href="showcart2" class="btn_green" style="float: left;background: #ccc;">
            ???????????? ????????</a>
    </div>

    <div style="float: left;width: 100%;margin-top: 50px;">
        <a href="showcart4" class="btn_green" style="float: left;">
            ?????????? ????????
        </a>
    </div>

</div>


<script>

    $('.selectlist').click(function () {
        var ulTag = $('ul', this);
        ulTag.slideToggle(200);
    });

    $('.selectlist ul li').click(function () {
        var txt = $(this).text();
        $('.selectlist .zamanattitle').text(txt);
    });

</script>
