<?php
require('views/admin/layout.php');

$property = $data ['property'];
$productInfo = $data ['productInfo'];

$edit = 0;

if (isset($reviewInfo['title'])) {
    $edit = 1;
}

?>

<div class="left">

    <p class="title">
        ویژگی های محصول:

        <span style="color: #ff030a">

            (
            <?= $productInfo['title']; ?>
            )

        </span>

    </p>

    <form action="" name="title" method="post">

        <input type="hidden" name="submited">

        <?php
        foreach ($property as $row) {
            ?>

            <div class="row">

            <span class="span_title">
         <?= $row['title']; ?>

            </span>

                <input type="text" name="value<?= $row['id'] ?>" value="<?= $row['value'] ?>">
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">

            </div>

        <?php } ?>


</div>


<div class="row">

    <a class="btn_blue_admin" onclick="submitForm();">

        اجرا عملیات

    </a>

</div>


</div>

</div>

