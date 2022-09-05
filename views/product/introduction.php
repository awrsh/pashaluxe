<style>

    #introduction {
        float: right;
        width: 1180px;
        margin-top: 20px;
        padding: 10px;
        height: 230px;
        overflow-y: scroll;
        position: relative;
    }

    #introduction P{
        margin: 1px 0;
        font-size: 10.5pt;
    }
    #introduction .more {
        display: block;
        font-family: yekan;
        font-size: 11pt;
        position: absolute;
        text-align: center;
        bottom: 20px;
        width: 100%;
        cursor: pointer;
    }

    #introduction.active {
        height: auto !important;
    }
</style>

<?php
require 'service_feature.php';
?>

<div id="introduction" style="background: #fff;box-shadow: 0 1px 3px #eee;">

    <p style="font-size: 13.5pt;margin-bottom: 10px">معرفی محصول:</p>


    <?= $productInfo['introduction']; ?>

</div>


<script>

    $('#introduction .more').click(function () {

        $('#introduction').toggleClass('active');
    });

</script>