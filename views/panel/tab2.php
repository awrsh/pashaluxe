<style>

    .order-steps {

        padding-left: 10px;
        padding-right: 126px;
        padding-top: 53px;
        height: 100px;
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
        color: #aaa;
        position: absolute;
        right: -24px;
        top: 27px;
        width: 100px;
    }

    .order-steps ul li.active .title {

        color: #2396f3;
    }

    .product_color {
        display: inline-block;
        height: 12px;
        margin-left: 5px;
        position: relative;
        top: 2px;
        width: 11px;
    }

</style>

<section class="myorders">

    <table cellspacing="0">
        <tr>
            <td>ردیف</td>
            <td>کد</td>
            <td>تاریخ</td>
            <td>مبلغ کل</td>
            <td>وضعیت</td>
            <td>عملیات پرداخت</td>
            <td>جزییات</td>
        </tr>

        <?php

        $order = $data['order'];
        $i = 1;
        foreach ($order as $row) {

            $status = $row['status'];
            ?>


            <tr>
                <td><?= $i ?></td>
                <td><?= $row['id'] ?></td>
                <td><?= $row['tarikh'] ?></td>
                <td style="font-family: tahoma;"><?= number_format($row['amount']) ?></td>
                <td><?= $row['title'] ?></td>
                <td>
                    <a href="checkout/index/<?= $row['id'] ?>">
                        <?php
                        if ($row['pay_type'] == 4) {
                            echo "کارت به کارت";
                        } elseif ($row['pay_type'] == 1) {
                            echo "درگاه زرین پال";
                        }
                        ?>
                    </a>
                </td>

                <?php
                $basket = unserialize($row['basket']);


                foreach ($basket as $product_code) {

                    ?>

                <?php } ?>

                <td>
                    <img class="showdetails" onclick="showDetailsTr(this)" style="margin-top: 5px;"
                         src="public/images/orderdetailsopen.png">
                </td>
            </tr>


            <tr class="details">

                <td colspan="8">

                    <div class="subtable">

                        <table cellspacing="0">
                            <tr>
                                <td>نام محصول</td>
                                <td>شناسه</td>
                                <td>تعداد</td>
                                <td>رنگ</td>
                                <td>قیمت واحد</td>
                                <td>قیمت کل</td>
                                <td>تخفیف کل</td>
                                <td>مبلغ کل</td>
                            </tr>
                            <?php
                            $basket = unserialize($row['basket']);
                            foreach ($basket as $row2) {

                                $price = $row2['price'];
                                $tedad = $row2['tedad'];
                                $discount = $row2['discount'];
                                $price_all = $price * $tedad;
                                $discount_amount = ($discount * $price_all) / 100;
                                $price_total = $price_all - $discount_amount;


                                ?>
                                <tr>
                                    <td><?= $row2['title'] ?></td>
                                    <td><?= $row2['code_product'] ?></td>
                                    <td><?= $row2['tedad'] ?></td>
                                    <td><?= $row2['colorTitle'] ?>
                                        <span class="product_color" style="background-color: <?= $row2['colorHex'] ?>;"></span>

                                    </td>
                                    <td><?= number_format($row2['price']) ?>تومان</td>
                                    <td><?= number_format($price_all) ?>تومان</td>
                                    <td><?= number_format($discount_amount) ?>تومان</td>
                                    <td><?= number_format($price_total) ?>تومان</td>
                                </tr>
                            <?php } ?>
                        </table>

                        <h4 class="title">
                            رهگیری سفارش:
                        </h4>

                        <div class="order-steps">
                            <div class="dashed">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <ul>
                                <li class="<?php if ($status >= 2) {
                                    echo 'active';
                                } ?>"><span class="circle"></span><span class="line"></span><span
                                            class="title">
                                      تایید سفارش

                                </span></li>
                                <li class="<?php if ($status >= 4) {
                                    echo 'active';
                                } ?>"><span class="circle"></span><span class="line"></span><span class="title">
پرداخت
                                </span></li>
                                <li class="<?php if ($status >= 5) {
                                    echo 'active';
                                } ?>"><span class="circle"></span><span class="line"></span><span class="title">
پردازش انبار
                                </span></li>
                                <li class="<?php if ($status >= 6) {
                                    echo 'active';
                                } ?>"><span class="circle"></span><span class="line"></span><span class="title">
آماده ارسال
                                </span></li>
                                <li class="<?php if ($status >= 7) {
                                    echo 'active';
                                } ?>" style="width: 35px;"><span class="circle"></span><span class="title">
تحویل شده
                                </span></li>

                            </ul>
                            <div class="dashed">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>


                        <div class="more">
                            <table cellspacing="0">
                                <tr>
                                    <td>
                                        روش ارسال:
                                        <?php
                                        if ($row['post_type'] == 0) {
                                            echo 'توسط پاشالوکس';
                                        } else if ($row['post_type'] == 1) {
                                            echo 'پیشتاز';
                                        }

                                        ?>
                                    </td>
                                    <td>

                                        تاریخ و روز:

                                        <?= $row['delivery_day']; ?> -

                                        بازه زمانی:

                                        <?= $row['delivery_time']; ?>

                                    </td>
                                    <td>
                                        کد سفارش مرسوله:
                                        PLX <?= $row['order_code']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        آدرس:
                                        <?= $row['address'] ?>
                                    </td>
                                    <td>
                                        تحویل گیرنده:
                                        <?= $row['family'] ?>
                                    </td>
                                    <td>
                                        شماره تماس:
                                        <?= $row['tel'] ?>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>

                </td>

            </tr>


            <?php
            $i++;
        } ?>

    </table>

</section>
