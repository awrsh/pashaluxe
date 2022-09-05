<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport' />
    <title>PashaLuxe</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css" rel="stylesheet" />
    <link href="assets/css/plugins/owl.carousel.css" rel="stylesheet" />
    <link href="assets/css/plugins/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body>

<?php

$orderInfo=$data['orderInfo'];
?>

<div class="wrapper default shopping-page">

    <!-- main-shopping -->
    <main class="cart-page default">
        <div class="container">
            <div class="row">
                <div class="cart-page-content col-12 order-1">
                    <section class="page-content default">
                        <div class="success-checkout text-center default">
                            <div class="icon-success">
                                <i class="fa fa-check"></i>
                            </div>
                            <h1>سفارش <a href="#">PLO-<?=$orderInfo['order_code']; ?></a>با موفقیت در سیستم ثبت شد.</h1>
                        </div>

                        <div class="order-info default">
                            <h3>کد سفارش: <span>PLO-<?=$orderInfo['order_code']; ?></span></h3>
                            <p>سفارش شما با موفقیت در سیستم ثبت شد و هم اکنون <span
                                    class="badge badge-success">تکمیل شده</span> است.جزئیات این سفارش را می توانید
                                با کلیک بر روی دکمه <a href="panel/" class="btn-link-border">پیگیری سفارش</a>مشاهده نمایید.</p>
                            <div class="table-responsive default mt-3 mb-3">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">نام تحویل گیرنده : <?=$orderInfo['family']; ?></th>
                                        <th scope="col">شماره تماس : <?=$orderInfo['mobile']; ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">تاریخ ثبت سفارش : <?=$orderInfo['tarikh']; ?></th>
                                        <td>مبلغ کل : <?= number_format($orderInfo['amount']); ?> تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">وضعیت پرداخت : <?php
                                            if ($orderInfo['pay_type'] == 4)
                                            {
                                                echo "کارت به کارت";
                                            }
                                            if ($orderInfo['pay_type'] == 1)
                                            {
                                                echo "درگاه بانکی";
                                            }
                                            ?>(موفق)</th>
                                        <td>شماره تراکنش: <?=$orderInfo['transaction_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">آدرس : استان: <?=$orderInfo['ostan']; ?> - شهر: <?=$orderInfo['city']; ?> - <?=$orderInfo['address']; ?></th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </section>

                </div>
            </div>
        </div>
    </main>
    <!-- main-shopping -->

</div>

</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Share Library etc -->
<script src="assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js" type="text/javascript"></script>
<!--  CountDown -->
<script src="assets/js/plugins/countdown.min.js" type="text/javascript"></script>
<!--  Plugin for Sliders -->
<script src="assets/js/plugins/owl.carousel.min.js" type="text/javascript"></script>
<!--  Jquery easing -->
<script src="assets/js/plugins/jquery.easing.1.3.min.js" type="text/javascript"></script>
<!-- Main Js -->
<script src="assets/js/main.js" type="text/javascript"></script>

</html>