<script src="public/js/jquery.elevatezoom.js"></script>
<style>
    #details {
        float: right;
        margin-top: 5px;
        width: 100%;
    }

    #details .right {
        width: 450px;
        float: right;
    }

    #details .share {
        float: right;
        width: 100%;
        padding: 20px 0;
    }

    #details .share i {
        background: url(public/images/slices.png) no-repeat;
        width: 20px;
        height: 20px;
        display: block;
        float: left;
        margin-left: 6px;
    }

    #details .gallery {
        float: right;
        width: 100%;
        text-align: center;
    }

    #details .gallery ul {
        float: right;
        width: 100%;
        padding: 0;
        margin-top: 20px;
    }

    #details .gallery ul li {
        border: 1px solid #eee;
        float: right;
        height: 71px;
        margin-right: 6px;
        text-align: center;
        width: 80px;
        cursor: pointer;
        border-radius: 10px;

    }

    .three_dote {
        background: url(public/images/slices.png) no-repeat -562px -28px;
        width: 35px;
        height: 17px;
        display: block;
        margin-top: 21px;
        margin-right: 20px
    }
</style>


<div id="details" style="background: #fff;box-shadow: 0 1px 3px #eee;">
    <div class="right">
        <div class="share">
            <i onclick="navigator.share(shareData)" class="social"
               style="background-position: -213px -187px; cursor: pointer">
            </i>


            <form id="myForm" action="product/add_favorite/" method="post">

                <input type="hidden" value="<?= $productInfo['id'] ?>" name="id_product_fav">

            </form>

            <i onclick="submitFormShare()" class="addtofavorit"
               style="background-position: -160px -187px; cursor: pointer"></i>


        </div>

        <div class="gallery">

            <img style="border-radius: 5px" id="zoomproduct"
                 src="public/images/products/<?= $productInfo['id'] ?>/product_350.jpg"
                 data-zoom-image="public/images/products/<?= $productInfo['id'] ?>/product.jpg"
                 alt="<?= $productInfo['title']; ?>">

            <script>

                $('#zoomproduct').elevateZoom({
                    'zoomWindowOffetx': -800,
                    'scrollZoom': true,
                    'easing': true,
                    'easingDuration': 5000,
                    'zoomWindowWidth': 400,
                    'lensFadeIn': true,
                    'zoomWindowFadeIn': true,
                    'tint': true,
                    'lensShape': 'round',
                    'tintColour': 'yellow'
                });

            </script>


            <ul>

                <li data-main-image="images/products/gallery/main/gallery1.jpg">
                    <span class="three_dote"></span>
                </li>

                <?php
                $gallery = $data['gallery'];
                foreach ($gallery as $row) {
                    if ($row['threed'] == 0) {
                        ?>

                        <li data-main-image="public/images/products/<?= $row['idproduct'] ?>/gallery/large/<?= $row['img']; ?>">
                            <img src="public/images/products/<?= $row['idproduct'] ?>/gallery/small/<?= $row['img']; ?>"
                                 style="width: 82px; height: 83px; margin-bottom: 10px;border-radius: 10px">
                        </li>
                    <?php }
                } ?>


            </ul>

        </div>

    </div>

    <?php

    if ($productInfo['Absence'] == 1) {

        require 'absence.php';


    } elseif ($productInfo['Absence'] == 2) {

        require 'StopProduction.php';

    } elseif ($productInfo['Absence'] == 0) {
        require 'price_details.php';
    }

    ?>


</div>



<script>
    function submitFormShare() {
        $('form').submit();
    }


    var shareData = {
        title: "پاشالوکس|pashaluxe",
        text: "دوست شما این محصول را پیشنهاد کرده است",
        url: "https://www.pashaluxe.com/product/index/<?= $productInfo['id'] ?>",
    }

</script>

<script>

    $('#selectlist').click(function () {
        var ulTag = $('ul', this);
        ulTag.slideToggle(200);
    });

    $('#selectlist ul li').click(function () {

        garantee_selected = $(this).attr('data-id');

        var txt = $(this).text();
        $('#selectlist .zamanattitle').text(txt);
    });


    $('.colors li').click(function () {

        $('.circle').removeClass('active');
        $('.circle', this).addClass('active');

    });
</script>