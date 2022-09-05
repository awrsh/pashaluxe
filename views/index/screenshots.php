
<style>
    .direct-access {
        width: 890px;
        height: 290px;
        display: block;
        float: right;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.19);
        margin-top: 10px;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
        margin-left: 10px;
        cursor: pointer;

    }
</style>

<?php

$picture = $data['direct1'];

foreach ($picture as $row) {

    ?>

    <a href="<?= $row['link'] ?>" class="direct-access">

        <img style="cursor: pointer" href="<?= $row['link'] ?>" alt="<?= $row['img'] ?>" src="<?= $row['name_alt']; ?>">

    </a>


<?php } ?>
