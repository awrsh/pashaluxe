<script src="public/ckeditor/ckeditor.js"></script>
<script src="public/jscolor/jscolor.js"></script>

<?php
require('views/admin/layout.php');
?>
<div class="left">

    <p class="title">

        اضافه کردن سایز به ویژگی محصولات

        <style>
            .row {
                width: 100%;
                float: right;
                margin-top: 5px;
            }

            .span_title {
                display: inline-block;
                width: 150px;
                font-size: 10pt;
            }

            input {
                width: 200px;
                height: 24px;
                border: 1px solid #eee;
            }

            select {
                font-family: yekan;
                height: 32px;
                line-height: 30px;
                padding: 2px;

            }

            option {
                padding: 2px;
                font-family: yekan;
                font-size: 10pt;
            }

            textarea {
                width: 500px;
                border: 1px solid #ccc;
                height: 250px;
                vertical-align: top;
            }


        </style>

        <style>
            .btn_green2 {
                background: #36be2b none repeat scroll 0 0;
                border-radius: 4px;
                box-shadow: 1px 1px 3px #ccc;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                font-family: yekan;
                font-size: 9pt;
                height: 27px;
                line-height: 27px;
                text-align: center;
                width: 42px;
            }
        </style>


    <form action="admin_warranty/add_warranty" method="post">

        <div class="row">

        <span class="span_title">
سایز مورد نظر:
        </span>



            <input type="text" name="name_warranty">


        </div>



    </form>

    <a class="btn_green_small" onclick="submitFormColor();" style="cursor: pointer;">
        اجرای عملیات
    </a>

</div>
<script>
    function submitFormColor() {

        $('form').submit();
    }
</script>

</div>

