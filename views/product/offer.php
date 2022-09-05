<style>
    #offer {
        height: 60px;
        background: #fff5f5 url("public/images/amazing-offer.png") no-repeat scroll 97% center;
        position: relative;
        border-radius: 5px;

    }

    .flipTimer {
        position: absolute;
        top: -19px;
        left: -161px;
        transform: scale(.3);
    }

    .flipTimer, .flipTimer div {
        direction: ltr !important;
    }

    #offer .discount {
        display: block;
        height: 48px;
        left: 200px;
        position: absolute;
        top: 16px;
        width: 280px;
        border-radius: 3px;
        overflow: hidden;
    }

    .price_info_old::after {
        content: " ";
        position: absolute;
        left: -11px;
        top: 8px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 8px 12px 8px 0;
        border-color: transparent #cccccc transparent transparent;
        z-index: 2;

    }

    #offer .discount .right {
        width: 131px;
        height: 100%;
        background: red;
        float: right;
        display: block;
        border-radius: 25px 45px 10px 80px;
    }

    #offer .discount .left {
        width: 75px;
        height: 100%;
        background: #e54949;
        float: right;
        display: block;
        border-radius: 25px 45px 10px 80px;
    }

    #offer .discount .right .number {
        color: #fff;
        font-size: 16pt;
        line-height: 25px;
        font-family: Tahoma;
        border-radius: 25px 45px 10px 80px;
        padding: 5px;
    }

    #offer .discount .right .price {
        color: #fff;
        display: inline-block;
        font-size: 9pt;
        height: 14px;
        line-height: 9px;
        margin-right: 7px;
        position: relative;
        top: -3px;
        width: 40px;

    }

    #offer .left span {
        color: #fff;
        font-size: 10pt;
        left: -5px;
        padding-right: 11px;
        position: relative;
        top: -1px;

    }


    #offer span mark {
        padding: 5px;
        border-radius: 25px 45px;
        margin-bottom: 10px;
        margin-top: 10px;
        background-color: green;
        color: white;
    }


    .span_pasha_bon {
        margin-right: 7px;
    }

    #span_pasha_bon_image {
        background: url(public/images/slices.png) no-repeat -800px -540px;
        display: inline-block;
        height: 41px;
        width: 48px;

    }
    #span_brand_image {
        background: url(public/images/slices.png) no-repeat -94px -540px;
        display: inline-block;
        height: 41px;
        width: 48px;
        text-align: -moz-center;
        color: #FFFFFF;
    }

</style>

<div id="offer">

    <span id="span_pasha_bon_image"></span>

    <span class="span_pasha_bon">
        باخرید این محصول <?= $productInfo['score_bon']; ?> امتیاز <mark>پاشابن</mark> دریافت کنید.
    </span>

    <span class="discount">


<span id="span_brand_image">برند</span>
    <span class="price">

   <u><?= $productInfo['brand']; ?> </u>



            </span>
              </span>



    <div class="flipTimer">

        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>

</div>

<script>
    $('.flipTimer').flipTimer({

        direction: 'down',
        date: '<?= $productInfo['time_special']; ?>',
        callback: function () {
            $('.slider2_content_right').css('opacity', .4);
            $('.slider2_content_left').css('opacity', .4);
            $(".slider2_finished").fadeIn(200);
        }
    });
</script>