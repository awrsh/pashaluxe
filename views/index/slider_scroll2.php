
<div class="sliderscroll">

    <h3>
        پر بازدید ترین ها
    </h3>

    <div class="sliderscroll_content">

        <div class="sliderscroll_prev">


            <span class="prev" onclick="sliderscroll('right',this);"></span>

        </div>

        <div class="sliderscroll_main">


            <ul>

                <?php

                    $result = $data[4];
                    foreach ($result as $row){

                ?>

                <li>
                    <a href="<?= URL ?>product/index/<?= $row['id']; ?>">

                        <img style="width: 200px;" src="public/images/product/<?= $row['id']; ?>/leather.jpg">

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