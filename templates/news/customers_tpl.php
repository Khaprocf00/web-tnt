<?php if ($banner_tpl) { ?>

<section class="packaging-banner__allpage p-relative"
    style="background:url('<?= _upload_hinhanh_l . $banner_tpl["photo"] ?>') no-repeat center center/cover;background-attachment: fixed;">

    <div class="packaging-title__tpl">
        <!-- <div class="row">

                <div class="col l-12 m-12 c-12">

                    <div class="title-default t-center p-relative">

                        <h1>

                            <span>

                                <?php if ($seo->getSeo('h1') != "") { ?>
                                    <?= $seo->getSeo('h1') ?>
                                <?php } else {
                                    echo $title_seo;
                                } ?>

                            </span>

                        </h1>

                    </div>


                </div>

                <?php if ($seo->getSeo('subject') != '') { ?>

                    <div class="col l-12 m-12 c-12">

                        <div class="box-description mt20">

                            <span><?= htmlspecialchars_decode($seo->getSeo('subject')) ?></span>

                        </div>

                    </div>

                <?php } ?>

            </div> -->

    </div>

    <div class="packaging-banner__breadcumb">

        <div class="grid wide">

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <div class="breadcumb">

                        <?= $str_breadcrumbs ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php } ?>

<section class="section-news mt40 mb20 mt-m-20 mb-m-10 mb-m-10 mb-t-10">

    <div class="grid wide">


        <style>
        .section-news .button a {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 600;
            line-height: 15.545px;
            text-transform: capitalize;
            padding: 12px 35px 12px 37px;
            border-radius: 35px;
            background: #f4f4f4;
            margin-bottom: 38px;
            margin-top: 10px;
            margin-left: 8px;
            margin-right: 4px;
            color: #545454;
        }

        .section-news .button a:hover,
        .section-news .button a.active {
            background-color: var(--html-bg-website);
            color: #fff;
        }
        </style>
        <div class="col l-12 m-12 c-12">

            <div class="title-default t-center mb20 p-relative">

                <h1>

                    <span>

                        <?= $title_seo ?>

                    </span>

                </h1>

            </div>

        </div>
        <?php
        // var_dump($seo->getSeo('h1'));
        // die();

        ?>
        <div class="col l-12 m-12 c-12">
            <div class="button t-center mb50 mt50 p-relative">
                <a class="<?php if ($seo->getSeo('h1') == "Đang thi công") echo "active" ?> " href="dang-thi-cong">Đang
                    thi công</a>
                <a class="<?php if ($seo->getSeo('h1') == "Đã thi công") echo "active" ?> " href="da-thi-cong">Đã
                    thi công</a>
            </div>
        </div>
        <div class="row mt30 mt-m-20">

            <div class="col l-12 m-12 c-12 w-100-m w-100-t">

                <div class="row">

                    <?php if (count($tintuc) > 0) { ?>

                    <?php foreach ($tintuc as $k => $value) {

                            $seoDB = $seo->getSeoDB($value['id'], 'baiviet', 'man', $value["type"]);

                        ?>

                    <div class="col l-3 m-4 c-6 mb30 mb-t-16 mb-m-8">

                        <div class="packaging-template__customers">

                            <div class="packaging-template__customers-img">

                                <span class="d-block p-relative">

                                    <a href="<?= _upload_baiviet_l . $value["photo"] ?>"
                                        data-fancybox="project<?= $value['id'] ?>">
                                        <img style="height: 300px;" src="<?= _upload_baiviet_l . $value["photo"] ?>"
                                            alt="<?= $value["ten_$lang"] ?>">
                                    </a>
                                    <div class="hidden">
                                        <?php

                                                $project_detail = $db->rawQuery("select * from #_baiviet_photo where id_baiviet = ?", [$value['id']]);
                                                foreach ($project_detail as $k => $x) {
                                                ?>
                                        <a href="<?= _upload_baiviet_l . $x['photo'] ?>"
                                            data-fancybox="project<?= $value['id'] ?>">

                                            <img src="<?= _upload_baiviet_l . $x['photo'] ?>"
                                                alt="Happy Flow - Do What You Love">

                                        </a>
                                        <?php } ?>
                                    </div>
                                    <script>
                                    $(function() {

                                        $('[data-fancybox="project<?= $value['id'] ?>"]').fancybox({

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
                                    <div class="packaging-template__customers-overplay">

                                        <h3 class="packaging-template__customers-overplay-title t-center line-2">

                                            <span><?= $value["ten_$lang"] ?></span>

                                        </h3>

                                    </div>

                                </span>

                            </div>

                        </div>

                    </div>

                    <?php } ?>

                    <?php } else { ?>

                    <div class="col l-12 m-12 c-12 mt20 mb20">
                        <p class="t-center">Nội dung đang được cập nhật....</p>
                    </div>

                    <?php } ?>

                </div>

            </div>

            <?php if (!$func->isAjax()) { ?>

            <div class="col l-12 m-12 c-12 mb20">

                <div id="pagingPage"><?= $paging ?></div>

            </div>

            <?php } ?>

        </div>

    </div>

</section>