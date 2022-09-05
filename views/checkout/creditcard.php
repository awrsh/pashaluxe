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
        display: inline-block;
        font-family: yekan;
        font-size: 11pt;
        height: 37px;
        line-height: 34px;
        text-align: center;
        width: 170px;
        border-radius: 4px;
        cursor: pointer;
    }

    .head .btn_green {
        float: left;
        margin-left: 5px;
        margin-top: 8px;
    }

    .row2 {

        width: 100%;
        float: right;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 10.5pt;
    }

    .row2 .title {
        display: block;
        float: right;
        margin-left: 10px;
        margin-right: 10px;

    }

    .row2 select {
        float: right;
        margin-right: 6px;
        font-family: yekan;
        font-size: 10pt;
        min-width: 100px;
    }

    h3 {
        font-size: 13pt;
        border-bottom: 1px solid #ccc;
    }

    .row2 input[type=text] {
        width: 200px;
        border: 1px solid #eee;
        float: right;
        height: 20px;
        padding: 4px;
        font-family: yekan;
        margin-right: 10px;
    }

    .w120 {
        width: 120px;
    }

    .row2 input {
        border: 1px solid #eee;
        height: 28px;
        position: relative;
        top: 3px;
        width: 260px;

    }

</style>

<?php

$orderInfo = $data['orderInfo'];

?>

<div id="main" style="width: 1200px;margin:10px auto;background: #fff;padding: 10px;">

    <form id="form_validate" action="checkout/creditcard/<?= $orderInfo['id'] ?>" method="post">

        <div class="row2">
            <h3>
                ثبت اطلاعات واریز به حساب
            </h3>
        </div>

        <div class="row2">

        <span class="title w120">
            تاریخ واریز:
        </span>

            <span class="title">
روز:
        </span>
            <select name="day">
                <?php
                for ($i = 1; $i < 32; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                <?php } ?>
            </select>
            <span class="title">
ماه:
        </span>
            <select name="month">
                <?php
                for ($i = 1; $i < 13; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                <?php } ?>
            </select>
            <span class="title">
سال:
        </span>
            <select name="year">

                <option value="1401">
                    1401
                </option>


            </select>

        </div>

        <div class="row2">

        <span class="title w120">
شماره کارت واریزکننده:
        </span>

            <input style="text-align: left" class="credit_cart" maxlength="16" id="cart_number" name="creditcard" pattern="[0-9]{16}" type="tel">

        </div>


        <div class="row2">

        <span class="title w120">
نام بانک واریزکننده:
        </span>

            <input id="name_bank" name="bank" type="text">

        </div>


        <div class="row2">

        <span class="title w120">
شماره تراکنش:
        </span>

            <input style="text-align: left" id="Transaction_number" name="transaction_number" type="tel">

        </div>


        <div class="row2">

        <span class="title w120">
            زمان واریز:
        </span>

            <span class="title">
ساعت:
          </span>
            <select name="hour">
                <?php
                for ($i = 0; $i < 24; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?php
                        if ($i == 0) {
                            echo '00';
                        } else {
                            echo $i;
                        }

                        ?>
                    </option>
                <?php } ?>
            </select>
            <span class="title">
دقیقه:
        </span>
            <select name="minute">
                <?php
                for ($i = 1; $i < 60; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                <?php } ?>
            </select>

        </div>

        <div class="row2">
            <a class="btn_green" onclick="submitForm()">
                ثبت اطلاعات
            </a>
        </div>

    </form>


</div>

<script>
    function submitForm() {

        var cart_number_validate = document.getElementById("cart_number").value;
        var name_bank_validate = document.getElementById("name_bank").value;
        var Transaction_number_validate = document.getElementById("Transaction_number").value;

        if (cart_number_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا شماره کارت یا حساب واریزکننده را وارد کنید",
                icon: "warning",
                button: "باشه",

            });

            return false;
        }

        if (cart_number_validate.length < 16) {
            swal({
                title: "خطا",
                text: "شماره کارت نباید کمتر از ۱۶ رقم باشد",
                icon: "warning",
                button: "باشه",

            });
            return false;
        }


        if (name_bank_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا نام بانک واریز کننده را وارد کنید",
                icon: "warning",
                button: "باشه",

            });
            return false;
        }

        if (Transaction_number_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا شماره تراکنش رسید را وارد کنید",
                icon: "warning",
                button: "باشه",

            });
            return false;
        }


        $('form').submit();

    }

</script>

<script>
    $('.credit_cart').mask('0000,0000,0000,0000', {reverse: false});
</script>








