<style>

    #img_banner {
        box-shadow: 0 4px 5px #eee;
        border-radius: 4px;
        width: 100%;
        cursor: pointer;
    }

    #main {
        width: 1200px;
        margin: 10px auto;

    }


    #content {
        width: 890px;
        float: left;
        margin-top: 10px;
    }


</style>

<div id="main">

    <?php
    $result = $data[3];
    ?>

    <?php
    $picture = $data['banner'];

    foreach ($picture as $row) {

        ?>

        <div class="row banner-ads" id="banner_top">

            <div class="col-12">

                <section class="banner">

                    <a href="<?= $row['link'] ?>">
                        <img id="img_banner" src="<?= $row['name_alt']; ?>" alt="<?= $row['img']; ?>">
                    </a>

                </section>

            </div>

        </div>

    <?php } ?>


    <?php
    require('sidebar_right.php');
    ?>

    <div id="content">

        <?php
        require('slider1.php');
        require('slider2.php');
        require('onlymyshop.php');
        require('direct_access.php');
        require('most_viewed.php');
        require('screenshots.php');
        require('most_saled.php');
        require('last_products.php');
        ?>

    </div>

</div>

<script>


    function sliderscroll(direction, tag) {

        var span_tag = $(tag);
        var sliderScrollTag = span_tag.parents('.sliderscroll');
        var sliderScrollUl = sliderScrollTag.find('.sliderscroll_main ul');
        var sliderScrollItems = sliderScrollUl.find('li');
        var sliderScrollItemsNumbers = sliderScrollItems.length;
        var slideScrollNumbers = Math.ceil(sliderScrollItemsNumbers / 4);
        var maxNegativeMargin = -(slideScrollNumbers - 1) * 780;
        sliderScrollUl.css('width', sliderScrollItemsNumbers * 195);

        var marginRightnew;
        var marginRightOld = sliderScrollUl.css('margin-right');
        marginRightOld = parseFloat(marginRightOld);

        if (direction == 'left') {
            marginRightnew = marginRightOld - 780;
        }
        if (direction == 'right') {
            marginRightnew = marginRightOld + 780;
        }

        if (marginRightnew < maxNegativeMargin) {
            marginRightnew = 0;
        }
        if (marginRightnew > 0) {
            marginRightnew = maxNegativeMargin;
        }

        sliderScrollUl.animate({'marginRight': marginRightnew}, 1000);

    }


</script>

