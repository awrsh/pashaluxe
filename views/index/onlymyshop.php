<style>
    .sliderscroll {
        height: 335px;
        width: 890px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.19);
        margin-top: 10px;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
    }

    .sliderscroll h3 {
        background: #f7f9fa;
        height: 35px;
        padding-right: 10px;
        padding-top: 7px;
        font-family: yekan;
        font-size: 10.5pt;
        margin: 0;
        font-weight: normal;
    }

    .sliderscroll_content {
        height: 268px;
    }

    .sliderscroll_prev, .sliderscroll_next {
        width: 55px;
        height: 100%;
        float: right;
    }

    .sliderscroll_main {
        width: 780px;
        height: 100%;
        float: right;
        overflow: hidden;
    }

    .sliderscroll_prev .prev {
        width: 15px;
        right: 15px;
        height: 42px;
        background: url(public/images/slices.png) no-repeat;
        background-position: -852px -677px;
        display: block;
        position: relative;
        top: 100px;
        cursor: pointer;
    }

    .sliderscroll_next .next {
        width: 15px;
        right: 15px;
        height: 42px;
        background: url(public/images/slices.png) no-repeat;
        background-position: -812px -677px;
        display: block;
        position: relative;
        top: 100px;
        cursor: pointer;
    }

    .sliderscroll .sliderscroll_main ul {
        padding: 0;
        height: 100%;

    }

    .sliderscroll .sliderscroll_main ul li {
        padding: 0;
        width: 195px;
        height: 100%;
        float: right;
    }

    .sliderscroll .sliderscroll_main ul li a {
        display: block;
        height: 100%;
        text-align: center;
    }

    .sliderscroll .price {
        color: green;
        font-size: 13pt;
    }

    .sliderscroll p {
        text-align: center;
        margin-top: 1px;
        margin-bottom: 1px;

    }

    .c-new-price__discount {
        font-size: 12px;
        font-size: 0.857rem;
        line-height: 33px;
        font-weight: 635;
        padding: 4px;
        background-color: #e6123d;
        color: #fff;
        margin-right: 4px;
        width: 32px;
        text-align: center;
        border-radius: 25px 45px 10px 80px;
    }

    .slider_scroll_a:hover {
        color: #535353;
    }

    .slider_scroll_a {

        color: #3c3838;
        margin-top: 5px;
    }

    .images_product {
        width: 150px;
        height: 150px;
        background: linear-gradient(
                90deg,
                #eeeeee 0%, #eeeeee 35%,
                #dddddd 45%, #dddddd 55%,
                #eeeeee 65%, #eeeeee 100%
        );
        background-size: 400%;
        animation: loading 1.5s infinite;
    }
    @keyframes loading {
        0% {background-position: 0 0;}
        100% {background-position: 100% 0;}
    }


</style>

<div class="sliderscroll">

    <h3>
        فقط در پاشالوکس
    </h3>

    <div class="sliderscroll_content">

        <div class="sliderscroll_prev">
            <span class="prev" onclick="sliderscroll('right',this);"></span>
        </div>


        <div class="sliderscroll_main">


            <ul>

                <?php
                $result = $data[3];

                foreach ($result as $row) {

                    ?>

                    <li style="height: 400px; border-right: 1px saddlebrown">
                        <a class="slider_scroll_a" href="<?= URL ?>product/index/<?= $row['id']; ?>">

                            <img class="images_product"
                                 src="public/images/products/<?= $row['id']; ?>/product_220.jpg"
                                 alt="<?= $row['title']; ?>/<?= $row['latin_title']; ?>">

                            <p class="yekan fontsm">
                                <?= $row['title']; ?>
                                <?= $row['latin_title']; ?>
                            </p>

                            <p class="yekan fontsm">

                                <?php

                                if ($row['Absence'] == 1) {

                                    echo '<strong style="color: red; line-height: 32px;font-size: 15px;" >محصول مورد نظر متاسفانه موجود نیست.</strong>';


                                } elseif ($row['Absence'] == 0) {

                                    echo '<span style="border-radius: 25px 25px" class="c-new-price__discount">' . $row['discount'] . '%</span>';

                                    $price_discount = ($row['discount'] * $row['price']) / 100;
                                    echo '<strong style="color: grey;text-decoration: line-through">' . number_format($row['price']) . '</strong>';


                                } elseif ($row['Absence'] == 2) {
                                    echo '<strong style="color: red; line-height: 32px; font-size: 15px;" >محصول مورد نظر تولیدش متوقف شده است.</strong>';

                                }

                                ?>

                            </p>

                            <p class="yekan price">
                                <?php

                                if ($row['Absence'] == 0) {

                                    echo number_format($row['price'] - $price_discount), 'تومان';

                                }

                                ?>

                            </p>

                        </a>
                    </li>

                <?php } ?>


            </ul>

        </div>

        <div class="sliderscroll_next">
            <span class="next" onclick="sliderscroll('left',this);"></span>
        </div>

    </div>

</div>
<script>
    function submitForm() {

        $('form').submit();
    }
</script>