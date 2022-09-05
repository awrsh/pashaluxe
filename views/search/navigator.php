<style>
    .page_navigator {
        padding: 0;
        float: right;
        width: 100%;

    }

    .page_navigator li {

        font-size: 11pt;
        float: right;
        margin-left: 15px;
    }

    .page_navigator li img {

        margin-right: 4px;
    }
</style>

<?php
$attr = $data['category'];

foreach ($attr as $row)
{

}

?>

<ul class="page_navigator">
    <li class="yekan">
        جست و جوی کالا
        <img src="public/images/patharrow.png">
    </li>

    <li class="yekan">
        <?php echo $row['title']; ?>
        <img src="public/images/patharrow.png">
    </li>

</ul>
