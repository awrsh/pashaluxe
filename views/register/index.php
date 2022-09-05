<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="public/img/apple-icon.png">
    <link rel="icon" type="image/png" href="public/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <title>ثبت نام| ورود</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="public/fonts/font-awesome/css/font-awesome.min.css"/>
    <!-- CSS Files -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="public/css/now-ui-kit.css" rel="stylesheet"/>
    <link href="public/css/plugins/owl.carousel.css" rel="stylesheet"/>
    <link href="public/css/plugins/owl.theme.default.min.css" rel="stylesheet"/>
    <link href="public/css/main.css" rel="stylesheet"/>
</head>

<div class="wrapper default">
    <div class="container">
        <div class="row">
            <div class="main-content col-12 col-md-7 col-lg-5 mx-auto">
                <div class="account-box">
                    <a href="#" class="logo">
                        <img src="assrts/img/logo.png" alt="">
                    </a>
                    <div class="account-box-title">ثبت‌نام | ورود</div>
                    <div class="message-light">
                        شماره همراه خود را وارد کنید
                    </div>
                    <div class="account-box-content">


                        <form onsubmit="return My_Validate();" id="MyForm" class="form-account"
                              action="register/add_user" method="post"
                              enctype="multipart/form-data">
                            <div class="form-account-title">شماره موبایل</div>
                            <div class="form-account-row">
                                <label class="input-label"><i class="now-ui-icons users_single-02"></i></label>
                                <input id="input_register" maxlength="11" oninput="number_validate()"
                                       class="input-field" pattern="[0-9]{11}" type="tel" name="email">
                            </div>

                            <div class="form-account-agree">
                                <label class="checkbox-form checkbox-primary">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkbox-check"></span>
                                </label>
                                <label for="agree">
                                    <a href="#" class="btn-link-border">حریم خصوصی</a> و <a href="#" class="btn-link-border">شرایط
                                        و قوانین</a> استفاده از سرویس های سایت
                                    فروشگاه را مطالعه نموده و با کلیه موارد آن موافقم.</label>
                            </div>

                            <div class="form-account-row form-account-submit" onclick="submitForm()">
                                <div class="parent-btn">
                                    <button id="btn_register" class="dk-btn dk-btn-info">
                                        ورود به فروشگاه
                                        <i class="now-ui-icons users_circle-08">
                                        </i>


                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function My_Validate() {

        var phone_number = document.forms["MyForm"]["email"].value;

        if (phone_number === "") {
            swal({
                title: "خطا",
                text: "لطفا شماره موبایل خود را وارد کنید",
                icon: "error",
                button: "باشه",
            });
            return false;
        }

    }

</script>

