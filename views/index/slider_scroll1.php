<style>

    .sliderscroll {
        height: 500px;
        width: 890px;
        margin-top: 10px;
        background: white;
        border-radius: 4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.19);
        overflow: hidden;
    }

    .sliderscroll h3 {
        background: #ff030a;
        height: 50px;
        width: 100%;
        padding-right: 10px;
        padding-top: 15px;
        font-family: yekan;
        font-size: 17pt;
        margin: 0;
        color: white;
        font-weight: normal;

    }

    .sliderscroll_content {
        height: 100%;

    }

    .sliderscroll_prev {
        width: 55px;
        height: 100%;
        float: right;
        background: white;
    }

    .sliderscroll_next {
        width: 55px;
        height: 100%;
        float: left;
        background: white;

    }

    .sliderscroll_main {
        width: 780px;
        height: 100%;
        float: right;
        overflow: hidden;

    }

    .sliderscroll_prev .prev {
        width: 24px;
        height: 24px;
        background: url(public/images/001-right-arrow.png) no-repeat;
        display: block;
        position: relative;
        top: 250px;
        right: 10px;
        cursor: pointer;
    }

    .sliderscroll_next .next {
        width: 24px;
        height: 24px;
        background: url(public/images/002-left-arrow.png) no-repeat;
        display: block;
        position: relative;
        top: 250px;
        right: 10px;
        cursor: pointer;

    }

    .sliderscroll .sliderscroll_main ul {
        padding: 0;
        height: 100%;
    }

    .sliderscroll .sliderscroll_main ul li {
        padding: 0;
        width: 300px;
        height: 100%;
        float: right;
    }

    .sliderscroll .sliderscroll_main ul li a {
        display: block;
        height: 100%;
        text-align: center;
    }

    .sliderscroll .sliderscroll_main ul li a img {
        width: 300px;
        height: 300px;
    }

    .sliderscroll .price {
        color: red;
        font-size: 18pt;
        font-family: yekan;
        margin-right: 28px;
    }

    .sliderscroll p {

        margin-top: 1px;
        margin-bottom: 1px;
        padding-right: 60px;
    }

    .sliderscroll .title_main {
        font-size: 20pt;
        font-family: yekan;
        margin-right: 22px;
    }


</style>


<div class="sliderscroll">

    <h3>
        پرفروش ترین های ماه پاییز
    </h3>

    <div class="sliderscroll_content">

        <div class="sliderscroll_prev">


            <span class="prev" onclick="sliderscroll('right',this);"></span>

        </div>

        <div class="sliderscroll_main">


            <ul>

                <?php
                $result = $data[3];
                foreach ($result as $row){



                ?>


                <li>
                    <a href="<?= URL ?>product/index/<?= $row['id']; ?>">

                        <img src="public/images/product/<?= $row['id']; ?>/leather.jpg">

                        <p class="title_main">

                            <?= $row['title']; ?>

                        </p>
                        <p class="price">

                            <?= $row['price']; ?>

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


