<?php

$activeMenu = 'order';

require('views/admin/layout.php');
$orders = $data['orders'];

?>
<style>
    .w400 {
        width: 600px;
    }
</style>

<div class="left">

    <p class="title">
        <a>
            مدیریت سفارشات مشتریان
        </a>


    </p>


    <a style="margin: 10px" class="btn_red_small" onclick="submitForm();">
        حذف
    </a>

    <form action="adminorder/delete" method="post">

        <table style="text-align: center" class="list" cellspacing="0">

            <tr>
                <td>
                    کد
                </td>
                <td>
                    تاریخ
                </td>

                <td>
                    خریدار محصول
                </td>

                <td style="width: 200px;">
                    تحویل گیرنده
                </td>
                <td>
                    مبلغ کل
                </td>
                <td>
                    شماره تراکنش
                </td>
                <td>
                    استان
                </td>
                <td>
                    شهر
                </td>

                <td>
                    جزییات
                </td>


                <td>
                    انتخاب
                </td>
            </tr>

            <?php
            foreach ($orders as $row) {


                ?>
                <tr>
                    <td>
                        <?= $row['id']; ?>
                    </td>
                    <td>
                        <?= $row['tarikh']; ?>
                    </td>
                    <td>
                        <?= $row['userId']; ?>

                    </td>
                    <td>
                        <?= $row['family']; ?>

                    </td>
                    <td>
                        <?= number_format($row['amount']) ?>
                    </td>
                    <td>
                        <?= $row['afterpay']; ?>
                    </td>
                    <td>
                        <?= $row['ostan']; ?>
                    </td>
                    <td>
                        <?= $row['city']; ?>
                    </td>

                    <td>
                        <a href="adminorder/detail/<?= $row['id']; ?>">
                            <img src="public/images/edit_icon.ico" class="view">
                        </a>
                    </td>

                    <td>

                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>


            <?php } ?>

        </table>

    </form>

</div>


</div>
