<?php
require('views/admin/layout.php');
?>
<style>
    .w400 {
        width: 600px;
    }

    .span_title {
        width: 200px;
    }

    input[type=text] {
        width: 200px;
        height: 23px;
    }
    .row{
        margin-bottom: 7px;
    }

</style>

<div class="left">

    <p class="title">
        <a>
            مدیریت بنر
        </a>

    </p>

    <form id="addPicture" action="admin_sideBar_right/index" enctype="multipart/form-data" method="post"
          style="margin-bottom: 20px;font-size: 10pt;float: right;width: 100%;">

        <div class="row">
            <span class="span_title" style="float: right;">
                عنوان:
                </span>

            <input type="text" name="title">


        </div>

        <div class="row">
            <span class="span_title" style="float: right;">
آدرس لینک:
            </span>

            <input type="text" name="link">

        </div>

        <div class="row">
            <span class="span_title" style="float: right;">
                انتخاب تصویر:
            </span>
            <input type="file" name="image" style="float: right;">

            <a class="btn_green_small" onclick="submitForm2()" style="float: right;">
                افزودن
            </a>
        </div>

    </form>


    <script>
        function submitForm2() {
            $('#addPicture').submit();
        }
        function submitForm3() {
            $('#pictureList').submit();
        }
    </script>

    <a class="btn_red_small" onclick="submitForm3();">
        حذف
    </a>


    <form id="pictureList" action="admin_sideBar_right/delete" method="post">

        <table class="list" cellspacing="0">

            <tr>
                <td>
                    ردیف
                </td>

                <td>
                    عنوان
                </td>

                <td>
                    تصویر
                </td>
                <td>
                    انتخاب
                </td>
            </tr>

            <?php
            $i = 1;
            $picture = $data['picture'];

            foreach ($picture as $row) {

                ?>
                <tr>
                    <td>
                        <?= $i; ?>
                    </td>
                    <td>
                        <?= $row['name_alt']; ?>
                    </td>
                    <td>
                        <img style="width: 300px" src="<?= $row['name_alt'] ?>">
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


</div>

