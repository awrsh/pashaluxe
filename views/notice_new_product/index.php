<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        font-family: yekan;
        margin: 25px;
    }

    .h3 {
        text-align: right;
        margin-right: 25px;
        font-family: yekan;

    }

</style>

<body>

<h3 class="h3">اولین نفری باشید که از محصول جدید مطلع می شود</h3>

<div class="container">
    <form id="MyForm" action="notice_new_product/set_email_user/" method="post">
        <label for="fname">ایمیل یا شماره همراه:</label>

        <input type="text" id="fname" name="number_email" placeholder="لطفا ایمیل با شماره همراه خود را وارد کنید...">

        <input id="input_add" onclick="add_notice()" type="submit" value="ثبت درخواست">

    </form>
</div>

</body>

<script type="text/javascript">

    function add_notice() {

        var url = "notice_new_product/set_email_user";
        var user_email = $('#fname').val();

        $.ajax({
            type: "POST",
            url: url,
            data: {'email_user': user_email},
            dataType: "JSON",
            cache: false,

        });
    }

</script>