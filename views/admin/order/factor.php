<!doctype html>
<html lang="en">
<head>
    <base href="<?= URL ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فاکتور خرید</title>

</head>
<body>


<style>

    .bordered {
        border: 1px solid #000;
    }

    .bordered-bottom {
        border-bottom: 1px solid #000;
    }

    .bordered-top {
        border-top: 1px solid #000;
    }

    .bordered-right {
        border-right: 1px solid #000;
    }

    .bordered-left {
        border-left: 1px solid #000;
    }

    table, td {
        direction: rtl;
        font-family: tahoma;
        font-size: 12px;
    }

    .text-center {
        text-align: center;
    }

    .padding5 {
        padding: 5px;
    }


</style>

<?php
$orderInfo = $data['orderInfo'];
?>

<table class="bordered" width="700px" cellspacing="0" cellpadding="0" align="center">

    <tr>
        <td>
            <table width="100%">
                <tr>
                    <td class="text-center" width="120">
                        <p>
                            <img style="width: 210px; height: 80px" src="public/img/logo/logo_2.jpg" alt="elcamino_logo">
                        </p>
                    </td>

                    <td class="text-center" style="font-size: 13px;font-weight: bold;">
                        فروشگاه اینترنتی پاشالوکس
                    </td>
                    <td class="text-center" width="140">

                        <?php

                        $basket = unserialize($orderInfo['basket']);

                        require('public/barcode/BarcodeGenerator.php');
                        require('public/barcode/BarcodeGeneratorHTML.php');
                        require('public/barcode/BarcodeGeneratorJPG.php');
                        require('public/barcode/BarcodeGeneratorPNG.php');
                        require('public/barcode/BarcodeGeneratorSVG.php');

                        print_r($orderInfo['order_code']);

                        $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
                        $barcode = $generator->getBarcode($orderInfo['order_code'], $generator::TYPE_EAN_8);
                        echo '<img src="data:image/png;base64,' . base64_encode($barcode) . ' " >';
                        ?>

                    </td>
                </tr>
            </table>
        </td>
    </tr>


    <tr>

        <td>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="vertical-align: top;" class="bordered-top bordered-left padding5" width="350">
                        <p>
                            نام گیرنده محصول:
                            <?= $orderInfo['family'] ?>
                        </p>
                        <p>

                        <p>
                            استان:
                            <?= $orderInfo['ostan'] ?>
                        </p>
                        <p>
                            شهر:
                            <?= $orderInfo['city'] ?>
                        </p>

                        <p>
                        </p>

                        آدرس:
                        <?= $orderInfo['address'] ?>

                        </p>

                        <p>

                        </p>

                    </td>

                    <td class="bordered-top padding5">
                        <p>
                            کد پستی:
                            <?= $orderInfo['code_posti'] ?>
                        </p>
                        <p>
                            موبایل:
                            <?= $orderInfo['mobile'] ?>
                        </p>
                        <p>
                            تلفن:
                            <?= $orderInfo['tel'] ?>
                        </p>

                    </td>
                </tr>
            </table>
        </td>

    </tr>


    <tr>
        <td>
            <style>
                #product td {
                    border-left: 1px solid #000;
                    border-bottom: 1px solid #000;
                    padding: 5px;
                }

                #product tr:first-child td {
                    border-top: 1px solid #000;

                }

                #product tr td:last-child {
                    border-left: none;

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

            <table id="product" width="100%" cellpadding="0" cellspacing="0">

                <tr>
                    <td>
                        نام محصول
                    </td>
                    <td>
                        شناسه محصول
                    </td>

                    <td>
                        رنگ
                    </td>
                    <td>
                        سایز
                    </td>

                    <td>
                        تعداد
                    </td>

                    <td>

                        قیمت
                    </td>
                    <td>
                        تخفیف
                    </td>

                </tr>

                <?php
                $basket = unserialize($orderInfo['basket']);
                foreach ($basket as $row) {


                    ?>
                    <tr>

                        <td>
                            <?= $row['title'] ?>

                        </td>
                        <td>
                            <?= $row['code_product'] ?>
                        </td>
                        <td>
                            <?=  $row['colorTitle'] ?>
                            <span class="product_color" style="background-color: <?= $row['colorHex'] ?>;"></span>


                        </td>
                        <td>
                            <?= $row['garanteeTitle'] ?>
                        </td>
                        <td>
                            <?= $row['tedad'] ?>
                        </td>
                        <td>

                            <?= number_format($row['price'] * $row['tedad']) ?>
                            تومان
                        </td>
                        <td>
                            <?= number_format((($row['discount'] * $row['price']) / 100) * $row['tedad']) ?>
                            تومان
                        </td>


                    </tr>

                <?php } ?>


            </table>

        </td>
    </tr>

    <tr>
        <td style="padding-top: 15px;">
            <style>
                #details td {

                    padding: 10px;
                    border-bottom: 1px solid #000;
                }
            </style>

            <table id="details" cellspacing="0" cellpadding="0" width="100%">

                <tr>
                    <td>
                        مبلغ کل پراختی:
                        <?= number_format($orderInfo['amount']); ?>

                        تومان
                    </td>
                    <td>
                        شیوه پرداخت:

                        <?= $orderInfo['payTypeTitle'] ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        شیوه ارسال:

                        <?php
                        if ($orderInfo['post_type'] == 0)
                        {
                            echo "فروشگاه پاشالوکس";
                        }
                        ?>

                    </td>
                    <td>
                        هزینه ارسال:
                        <?= number_format($orderInfo['post_price']); ?>

                    </td>
                </tr>

                <tr>

                    <td>
                        تاربخ ثبت سفارش:
                        <?= $orderInfo['tarikh'] ?>
                    </td>
                    <td>

                        تاربخ و بازه زمانی تحویل سفارش:
                        <p>
                          روز  <?= $orderInfo['delivery_day'] ?>,
                            ساعت:
                            <?= $orderInfo['delivery_time'] ?>
                        </p>
                    </td>

                </tr>


                <tr>
                    <td>
                        ما برای مشتریان بهترین ها را میخواهیم از خرید شما ممنونیم آقای/خانم:
                        <?= $orderInfo['family'] ?>
                    </td>

                </tr>


            </table>

        </td>
    </tr>


    <tr>
        <td style="padding-top: 15px;">
            <style>
                #shopsign td {

                    padding: 10px;
                    border-bottom: 1px solid #000;
                }
            </style>

            <table id="shopsign" cellspacing="0" cellpadding="0" width="100%">

                <tr>
                    <td style="text-align: left; padding: 30px;">

                        مهر فروشگاه

                    </td>

                </tr>


            </table>
        </td>
    </tr>

</table>

</body>
</html>
