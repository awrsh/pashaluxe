<?php

$activeMenu = 'order';

require('views/admin/layout.php');

$users = $data['users'];
$clientele = $data['clientele'];


?>
<style>
    .w400 {
        width: 600px;
    }

    .selectTag {
        float: left;
        margin-left: 10px;
        font-family: yekan;
        font-size: 10 . pt;
        padding: 1px;
    }
</style>

<div class="left">

    <p class="title">
        <a>
لیست کارمندان
        </a>


    </p>


    <a style="margin: 10px" class="btn_red_small" onclick="submitFormMulti();">
        اجرای عملیات
    </a>

    <select style="margin: 10px" class="selectTag" name="action">
        <option value="1">
            تغییر به مدیر
        </option>
        <option value="2">
            تغییر به کارمند
        </option>
        <option value="3">
            تغییر به کارآموز
        </option>
        <option value="4">
            حذف
        </option>
    </select>

    <script>
        function submitFormMulti() {

            var actionSelected = $('.selectTag option:selected').val();
            var action = '';
            if (actionSelected == 1) {
                action = 'adminuser/changelevel1';
            }
            if (actionSelected == 2) {
                action = 'adminuser/changelevel2';
            }
            if (actionSelected == 3) {
                action = 'adminuser/changelevel3';
            }
            if (actionSelected == 4) {
                action = 'adminuser/delete';
            }

            var form = $('form');
            form.attr('action', action);
            form.submit();

        }
    </script>


    <form action="" method="post">

        <table style="text-align: center" class="list" cellspacing="0">

            <tr>
                <td>
                    ردیف
                </td>
                <td>
                    تاریخ عضویت

                </td>
                <td>
                    نام
                </td>
                <td>
                    نام خانوادگی
                </td>

                <td>
                    موبایل
                </td>
                <td>
                    سطح دسترسی
                </td>

                <td>
                    *
                </td>
            </tr>

            <?php
            $i = 1;
            foreach ($users as $row) {

                ?>
                <tr>
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        <?= $row['date_register']; ?>
                    </td>

                    <td>
                        <?= $row['first_name']; ?>
                    </td>
                    <td>
                        <?= $row['last_name']; ?>
                    </td>
                    <td>
                        <?= $row['mobile']; ?>

                    </td>

                    <td>
                        <?= $row['levelTitle'] ?>

                    </td>

                    <td>

                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>


                <?php
                $i++;
            } ?>

        </table>

    </form>

</div>




<div class="left">

    <p class="title">
        <a>
             لیست مشتریان
        </a>


    </p>


    <a style="margin: 10px" class="btn_red_small">
        اجرای عملیات
    </a>

    <select style="margin: 10px" class="selectTag" name="action">

        <option style="font-family: Tahoma" value="4">
            حذف
        </option>

        <option style="font-family: Tahoma" value="5">
            غیرفعال
        </option>

    </select>

    <script>
        function submitFormMulti() {

            var actionSelected = $('.selectTag option:selected').val();
            var action = '';
            if (actionSelected == 1) {
                action = 'adminuser/changelevel1';
            }
            if (actionSelected == 2) {
                action = 'adminuser/changelevel2';
            }
            if (actionSelected == 3) {
                action = 'adminuser/changelevel3';
            }
            if (actionSelected == 4) {
                action = 'adminuser/delete';
            }

            var form = $('form');
            form.attr('action', action);
            form.submit();

        }
    </script>




        <table style="text-align: center" class="list" cellspacing="0">

            <tr>
                <td>
                    ردیف
                </td>
                <td>
                    همراه

                </td>
                <td>
                    رمز عبور
                </td>
                <td>
                    نام و نام خانوادگی
                </td>

                <td>
                    کدملی
                </td>
                <td>
                    تلفن منزل
                </td>

                <td>
                    موبایل
                </td>
                <td>
                    تاریخ تولد
                </td>

                <td>
                     شناسه مشتری
                </td>
                <td>
                     تاریخ ثبت نام
                </td>
                <td>
                     *
                </td>
            </tr>

            <?php
            $i = 1;
            foreach ($clientele as $row) {

                ?>
                <tr>
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        <?= $row['email']; ?>
                    </td>

                    <td>
                        <?= $row['password']; ?>
                    </td>
                    <td>
                        <?= $row['family']; ?>
                    </td>
                    <td>
                        <?= $row['code_meli']; ?>

                    </td>
                    <td>
                        <?= $row['tel']; ?>

                    </td>
                    <td>
                        <?= $row['mobile']; ?>

                    </td>              <td>
                        <?= $row['tavalod']; ?>

                    </td>              <td>
                        <?= $row['user_id']; ?>

                    </td>              <td>
                        <?= $row['date_register']; ?>


                    </td>

                    <td>

                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                    </td>


                </tr>


                <?php
                $i++;
            } ?>

        </table>

</div>


</div>











