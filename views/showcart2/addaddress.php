<script src="<?= URL ?>public/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/js//frotel/ostan.js"></script>
<script src="<?= URL ?>public/js//frotel/city.js"></script>
<script src="<?= URL ?>public/js/bootstrap-select.js"></script>
<link href="<?= URL ?>public/js/bootstrap-select.css" rel="stylesheet">
<link href="<?= URL ?>public/js/bootstrap.css" rel="stylesheet">
<script src="<?= URL ?>public/js/mahale.js"></script>
<script src="https://files.free-learn.ir/Tryit/javascript/learn/files/sweetalert.js"></script>


<style>
    #add_address {
        width: 1200px;
        height: 700px;
        position: fixed;
        background: #fff;
        right: 0;
        left: 0;
        margin: auto;
        top: 10px;
        z-index: 6;
        display: none;
    }

    #dark {
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgba(0, 0, 0, .3);
        top: 0;
        left: 0;
        z-index: 5;
        display: none;

    }

    #add_address h4 {
        font-family: yekan;
        font-size: 13.5pt;
        padding: 8px;
        background: #eee;
        margin: 0;
        position: relative;
    }

    #add_address h4 .close {
        width: 28px;
        height: 28px;
        background: url(public/images/slices.png) no-repeat -134px -123px;
        position: absolute;
        left: 8px;
        top: 3px;
        border: 1px solid #000000;
        border-radius: 100%;
        cursor: pointer;
    }

    .row {
        float: right;
        font-family: yekan;
        padding: 12px 19px;
        width: 95%;

    }

    .row .right {
        float: right;
        width: 225px;
    }

    .row .right .title {
        font-size: 10.5pt;
    }

    .row .left {
        float: right;
    }

    .row .left input {
        border: 1px solid #eee;
        height: 28px;
        position: relative;
        top: 3px;
        width: 260px;
    }

    .row .left textarea {
        border: 1px solid #eee;
        height: 120px;
        position: relative;
        top: 3px;
        width: 260px;
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
        margin: auto;
    }


</style>

<form style="font-family: yekan" id="addaddress" action="showcart2/addaddress" method="post">

    <div id="add_address">
        <h4>
            افزودن آدرس جدید

            <span class="close">

            </span>
        </h4>

        <div class="row">
            <div class="right">
            <span class="title">
                نام و نام خانوادگی تحویل گیرنده:
            </span>
                <a style="color: red">*</a>

            </div>
            <div class="left">
                <input type="text" name="family">
            </div>
        </div>

        <div class="row">
            <div class="right">
            <span class="title">
شماره همراه:
            </span>
                <a style="color: red">*</a>

            </div>
            <div class="left">
                <input id="mobile" pattern="[0-9]{11}" style="text-align: left" placeholder="09" type="tel" maxlength="11" name="mobile">
            </div>
        </div>

        <div class="row">
            <div class="right">
            <span class="title">
شماره ثابت:
            </span>
            </div>
            <div class="left">
                <input style="text-align: left" name="tel">
            </div>
        </div>

        <div class="row">
            <div class="right">
            <span class="title">
استان/شهر:
            </span>
                <a style="color: red">*</a>

            </div>
            <div class="left">

                <style>
                    .filter-option .pull-left {
                        text-align: right !important;
                    }
                </style>

                <select id="ostan" name="state" class="selectpicker state " data-live-search="true">

                    <option value="">
                        انتخاب استان
                    </option>


                </select>

                <span class="shahr">
                <select id="city" name="city" class="selectpicker city">
                    <option value="">
                        انتخاب شهر
                    </option>
                </select>
            </span>


                <script>
                    loadOstan('ostan');

                    $("#ostan").change(function () {
                        var i = $(this).find('option:selected').val();
                        ldMenu(i, 'city');
                        $('.selectpicker').selectpicker('refresh');
                    })

                </script>


            </div>
        </div>
        <div class="row">
            <div class="right">
            <span class="title">
محله:
            </span>
                <a style="color: red">*</a>

            </div>
            <div class="left">

<span class="mahale">


                <input name="mahale" type="text">

            </span>

            </div>
        </div>

        <div class="row">
            <div class="right">
            <span class="title">
آدرس پستی:
            </span>
                <a style="color: red">*</a>

            </div>
            <div class="left">
                <textarea placeholder="آدرس دقیق محل تحویل کالا را تایپ کنید" name="address"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="right">
            <span class="title">
کد پستی:
            </span>
                <a style="color: red">*</a>

            </div>
            <div class="left">
                <input id="postal_code_validate" placeholder="کد پستی ۱۰ رقمی" name="codeposti" maxlength="10">
            </div>
        </div>



        <div class="row">
            <div class="right">
            <span class="title">
            </span>
            </div>

            <a style="color: red">*</a>

            <a>
                پر کردن فیلد های ستاره دار الزامیست!
            </a>

        </div>


        <div style="text-align: left; margin-left: 20px">
           <span onclick="submitForm();" class="btn_green" style="float: left;cursor: pointer;">
               ذخیره اطلاعات و بازگشت
           </span>
        </div>

    </div>

</form>


<div id="dark">

</div>


<script>

    function submitForm() {

        var family_validate = document.forms["addaddress"]["family"].value;
        var mobile_validate = document.getElementById("mobile").value;
        var state_validate = document.forms["addaddress"]["state"].value;
        var city_validate = document.forms["addaddress"]["city"].value;
        var region_validate = document.forms["addaddress"]["mahale"].value;
        var address_validate = document.forms["addaddress"]["address"].value;
        var postal_code_validate = document.getElementById("postal_code_validate").value;

        if (family_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا نام و نام خانوادگی گیرنده را وارد کنید",
                icon: "warning",
                button: "باشه",

            });
            return false;
        }

        if (mobile_validate.length < 11) {
            swal({
                title: "خطا",
                text: "لطفا شماره موبایل را به درستی وارد کنید",
                icon: "warning",
                button: "باشه",

            });
            return false;
        }

        if (state_validate === "-1") {
            swal({
                title: "خطا",
                text: "لطفا استان خود را انتخاب کنید",
                icon: "warning",
                button: "باشه",

            });
            return false;
        }
        if (city_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا شهر خود را انتخاب کنید",
                icon: "warning",
                button: "باشه",

            });
            return false;
        }
        if (region_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا محله ی خود را وارد کنید",
                icon: "warning",
                button: "باشه",

            });
            return false;
        }
        if (address_validate === "") {
            swal({
                title: "خطا",
                text: "لطفا آدرس خود را وارد کنید",
                icon: "warning",
                button: "باشه",

            });
            return false;
        }
        if (postal_code_validate.length < 10) {
            swal({
                title: "خطا",
                text: "لطفا کد پستی ده رقمی خود را وارد کنید",
                icon: "warning",
                button: "باشه",

            });
            return false;
        }


        var url = 'showcart2/addaddress/' + editAddressId;
        var data = $('#addaddress').serializeArray();
        var ostan_name = $('#ostan option:selected').text();
        var city_name = $('#city option:selected').text();

        data.push({'name': 'ostan_name', 'value': ostan_name});
        data.push({'name': 'city_name', 'value': city_name});

        $.post(url, data, function (msg) {

            window.location = 'showcart2';

        })

    }

    $('.close').click(function () {
        $('#add_address').fadeOut(200);
        $('#dark').fadeOut(200);
    });


    function showWindow() {

        editAddressId = '';
        $('#add_address').fadeIn(200);
        $('#dark').fadeIn(200);
        $('#addaddress').trigger('reset');
        $('.selectpicker').selectpicker('refresh');
    }

    $('.selectpicker').selectpicker();


</script>
