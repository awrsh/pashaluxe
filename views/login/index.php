<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="public/img/apple-icon.png">
    <link rel="icon" type="image/png" href="public/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <title>ورود</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="public/fonts/font-awesome/css/font-awesome.min.css"/>
    <!-- CSS Files -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="public/css/now-ui-kit.css" rel="stylesheet"/>
    <link href="public/css/plugins/owl.carousel.css" rel="stylesheet"/>
    <link href="public/css/plugins/owl.theme.default.min.css" rel="stylesheet"/>
    <link href="public/css/main.css" rel="stylesheet"/>
</head>

<body>
<div class="wrapper default">
    <div class="container">
        <div class="row">
            <div class="main-content col-12 col-md-7 col-lg-5 mx-auto">
                <div class="account-box">
                    <div class="account-box-title text-right">ورود به پاشالوکس</div>
                    <div class="account-box-content">
                        <form onsubmit="return My_Validate();" id="MyForm" class="form-account" action="login/checkuser" method="post">
                            <div class="form-account-title"> کد تایید ارسال شده به <?php echo $_SESSION["phone_number"]?> </div>
                            <div class="form-account-row">

                                <label class="input-label"><i class="now-ui-icons ui-1_check"></i></label>
                                <input name="password" class="input-field" type="tel">
                            </div>
                            <div class="form-account-row form-account-submit">
                                <div class="parent-btn">
                                    <button class="dk-btn dk-btn-info">
                                        ورود به پاشالوکس
                                        <i class="fa fa-sign-in"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-account-agree">
                                <label class="checkbox-form checkbox-primary">
                                    <input type="checkbox" checked="checked" id="agree">
                                    <span class="checkbox-check"></span>
                                </label>

                                <label for="agree">مرا به خاطر داشته باش</label>
                                    <input type="hidden" name="user_device_info" id="total_price">
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>
</body>

</html>

<script>
    function My_Validate() {
        var sms_code = document.forms["MyForm"]["password"].value;

        if (sms_code === "") {
            swal({
                title: "خطا",
                text: "لطفا کد پیامک شده را وارد کنید",
                icon: "error",
                button: "باشه",
            });
            return false;
        }

    }

</script>

<script>
    var device_data = navigator.userAgent;

    $('#total_price').val(device_data);

</script>

