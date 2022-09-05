<?php

$activeMenu = 'question_and_answer';

require('views/admin/layout.php');

$question = $data['question'];


?>
<style>
    .w400 {
        width: 700px;
    }

    .selectTag {
        float: left;
        margin-left: 10px;
        font-family: yekan;
        font-size: 10pt;
        padding: 1px;
    }
</style>

<div class="left">

    <p class="title">
        <a>
            مدیریت پرسش و پاسخ
        </a>


    </p>


    <a style="margin: 10px" class="btn_red_small" onclick="submitFormMulti();">
        اجرای عملیات
    </a>

    <select style="margin: 10px" class="selectTag" name="action">
        <option value="1">
            تایید
        </option>
        <option value="2">
            عدم تایید
        </option>
        <option value="3">
            حذف
        </option>
    </select>

    <script>
        function submitFormMulti() {

            var actionSelected = $('.selectTag option:selected').val();
            var action = '';
            if (actionSelected == 1) {
                action = 'admincomment/confirm';
            }
            if (actionSelected == 2) {
                action = 'admincomment/unconfirm';
            }
            if (actionSelected == 3) {
                action = 'admincomment/delete';
            }

            var form = $('form');
            form.attr('action', action);
            form.submit();

        }
    </script>




        <table style="font-family: yekan; text-align: center;" class="list" cellspacing="0">

            <tr>
                <td>
                    ردیف
                </td>
                <td>
                    شناسه پرسش
                </td>
                <td>
                    تاریخ و ساعت
                </td>

                <td style="width: 350px;">
                    پرسش
                </td>
                <td>
                    پاسخ
                </td>
                <td>
                    کاربر
                </td>
                <td>
                    محصول
                </td>
                <td>
                    انتخاب
                </td>
            </tr>



            <?php
            $i = 1;
            foreach ($question as $row) {

                ?>
                <tr>
                    <td>
                        <?= $i ?>
                    </td>

                    <td>
                        Q <?= $row['id']; ?>
                       <p style="color: red;text-align: center"><?php
                          if ($row['parent'] == 0){
                              echo "!!!!";
                          }else{
                              echo "ok";
                          }
                          ?></p>
                    </td>
                    <td>
                        <?= $row['date_question']; ?>
                        <?= $row['time_question']; ?>
                    </td>
                    <td>

                        <textarea style="font-family: yekan; text-align: right"><?= $row['text_question']; ?>
                        </textarea>

                    </td>
                    <td>
                        <span><?= $row['answer_question']; ?></span>
                    </td>
                    <td>
                        <span><?= $row['userid']; ?></span>


                    </td>
                    <td>
                        <span><?= $row['idproduct']; ?></span>

                    </td>

                    <td>
                        <?php
                        if ($row['parent'] == 1) {
                            echo 'تایید شده';
                        } else {
                            echo 'تایید نشده';
                        }
                        ?>


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




<div class="left_bottom">

    <p class="title">
        <a>
           *اول شناسه پرسش را وارد کنید سپس پاسخ پرسش را بنویسید.
        </a>
    </p>


    <a style="margin: 10px" class="btn_red_small" onclick="submitForm();">
        اجرای عملیات
    </a>


    <table style="font-family: yekan; text-align: center;" class="list" cellspacing="0">

        <tr>
            <td>
                شناسه پرسش
            </td>
            <td>
                پاسخ
            </td>
            <td>
                انتخاب
            </td>
        </tr>

        <form action="admin_question/answer_question/" method="post">

            <input type="hidden" style="font-family: yekan" name="question">
            <input type="hidden" style="font-family: yekan" name="id_product">


                <tr>
                    <td>
                        <input style="font-family: yekan" name="id_question">

                    </td>
                    <td>
                        <input style="font-family: yekan" name="answer">

                    </td>

                    <td>
                        <input type="checkbox" name="id[]">
                    </td>
                </tr>

    </table>

    </form>

</div>



<script>
    function submitForm() {

        $('form').submit();
    }

</script>