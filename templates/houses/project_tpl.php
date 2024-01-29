<?php

$project[] = $db->rawQuery("select id,id_tacgia,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and type=?  order by stt asc,id desc limit 0,3", ['du-an']);


?>

<section id="project">
    <div class="width">

        <div class="center flex-column">

            <h1>

                <span>

                    <?php if ($seo->getSeo('h1') != "") { ?>
                        <?= $seo->getSeo('h1') ?>
                    <?php } else {
                        echo $title_seo;
                    } ?>

                </span>

            </h1>
            <div class="bg-icon">
                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <path d="M27.1256 22.195C27.1783 22.1951 27.2304 22.2069 27.278 22.2295L37.7344 27.1055V16.8906H22.6406V24.2463L26.9747 22.2338C27.0214 22.2096 27.073 22.1963 27.1256 22.195Z" fill="#00ADF3" />
                        <path d="M22.6406 11.6768H34.6711V16.1718H22.6406V11.6768Z" fill="#00ADF3" />
                        <path d="M26.9876 23.8094C27.0352 23.7873 27.0869 23.7759 27.1393 23.7759C27.1917 23.7759 27.2434 23.7873 27.291 23.8094L38.2447 28.9125C38.2533 28.9125 38.2562 28.9254 38.2634 28.9297L39.4134 29.4659L39.7138 28.8234L37.95 27.9997L27.1256 22.9512L7.66476 32.029L7.96664 32.6845L26.9876 23.8094Z" fill="#00ADF3" />
                        <path d="M21.9219 36.2969V28.5531L10.4219 33.9193V36.2969H21.9219Z" fill="#00ADF3" />
                        <path d="M38.0938 37.0156H22.2812H10.0625H8.625H5.39062V37.7344H40.6094V37.0156H38.0938Z" fill="#00ADF3" />
                        <path d="M37.7344 36.2968V29.4687L27.14 24.5251L8.98438 33.0035V36.2968H9.70312V33.6906C9.70372 33.6212 9.72439 33.5535 9.76266 33.4956C9.80092 33.4377 9.85514 33.3921 9.91875 33.3643L22.1375 27.6632C22.1923 27.6379 22.2525 27.6267 22.3128 27.6308C22.373 27.6349 22.4312 27.6541 22.482 27.6866C22.5329 27.7191 22.5747 27.7639 22.6037 27.8168C22.6327 27.8698 22.6478 27.9292 22.6478 27.9895V36.2968H37.7344ZM27.1299 29.9718H29.5349V32.3768H27.1299V29.9718ZM27.1299 32.752H29.5349V35.1569H27.1299V32.752ZM24.3901 29.9718H26.795V32.3768H24.3901V29.9718ZM24.3901 32.752H26.795V35.1569H24.3901V32.752Z" fill="#00ADF3" />
                        <path d="M21.9219 16.5312V8.26562H8.98438V30.6187L21.9219 24.5813V16.5312ZM13.5528 24.7998H10.4219V21.6689H13.5528V24.7998ZM13.5528 20.7819H10.4219V17.6511H13.5528V20.7819ZM13.5528 16.7641H10.4219V13.6333H13.5528V16.7641ZM13.5528 12.7463H10.4219V9.61544H13.5528V12.7463Z" fill="#00ADF3" />
                    </svg>
                </span>
            </div>
            <div class="">
                <button class="active">đang thi công</button>
                <button class="">đã thi công</button>
            </div>
        </div>
        <div class="bg-image">
            <?php foreach ($project as $v) {

            ?>
                <div class="c1">
                    <?php foreach ($v as $img) {
                    ?>
                        <?= $func->getHrefImgProject($img); ?>

                        <div class="hidden">
                            <?php foreach ($product_house as $k => $x) {
                            ?>
                                <a href="<?= _upload_baiviet_l . $x['photo'] ?>" data-fancybox="xxx">

                                    <img src="<?= _upload_baiviet_l . $x['photo'] ?>" alt="Happy Flow - Do What You Love">

                                </a>
                            <?php } ?>
                        </div>
                        <script>
                            $(function() {

                                $('[data-fancybox="xxx"]').fancybox({

                                    thumbs: {
                                        autoStart: true
                                    },
                                    buttons: [
                                        'zoom',
                                        'close'
                                    ]

                                });

                            });
                        </script>

                    <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>
</section>