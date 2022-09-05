
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

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

        .h3{
            text-align: right;
            margin-right: 25px;
            font-family: yekan;

        }

    </style>

<body>

<h3 class="h3">ارتباط باما</h3>

<div class="container">
    <form action="contact_us/set_request/" method="post">
        <label for="fname">نام شما:</label>

        <input type="text" id="fname" name="firstname" placeholder="لطفا نام خود را بنویسید...">

        <label for="lname">ایمیل:</label>
        <input type="text" id="lname" name="email" placeholder="لطفا ایمیل خود را بنویسید...">

        <label for="country">لطفا ارتباط با بخش مورد نظر را انتخاب کنید.</label>
        <select id="country" name="communication">
            <option value="فروش">فروش</option>
            <option value="پشتیبانی">پشتیبانی</option>
            <option value="ارسال کالا">ارسال کالا</option>
            <option value="مدیریت">مدیریت</option>
        </select>

        <label for="subject">متن:</label>
        <textarea id="subject" name="subject_communication" placeholder="لطفا درخواست خود را مطرح کنید..." style="height:200px;font-family: yekan"></textarea>

        <input onclick="submitForm()" type="submit" value="ثبت درخواست">
    </form>
</div>

</body>

    <script>
        function submitForm() {

            $('form').submit();
        }
    </script>

