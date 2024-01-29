<?php if ($banner_tpl) { ?>

    <section class="packaging-banner__allpage p-relative" style="background:url('<?= _upload_hinhanh_l . $banner_tpl["photo"] ?>') no-repeat center center/cover;background-attachment: fixed;">

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

        <div class="col l-12 m-12 c-12">

            <div class="title-default t-center mb20 p-relative">

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

        <div class="row mt30 mt-m-20 ">

            <div class="col l-12 m-12 c-12 w-100-m w-100-t">

                <div class="res--grid--template gap5 mb30">

                    <?php if (count($tintuc) > 0) { ?>

                        <?php foreach ($tintuc as $k => $value) {

                            $seoDB = $seo->getSeoDB($value['id'], 'baiviet', 'man', $value["type"]);

                        ?>

                            <div class=" res--span--3">

                                <div class="packaging-template__customers p-relative">

                                    <div class="packaging-template__customers-img">

                                        <span class="d-block p-relative">

                                            <a href="<?= _upload_baiviet_l . $value["photo"] ?>" data-fancybox="project<?= $value['id'] ?>">
                                                <img style="height: 300px;" src="<?= _upload_baiviet_l . $value["photo"] ?>" alt="<?= $value["ten_$lang"] ?>">
                                            </a>
                                            <div class="hidden">
                                                <?php

                                                $project_detail = $db->rawQuery("select * from #_baiviet_photo where id_baiviet = ?", [$value['id']]);
                                                foreach ($project_detail as $k => $x) {
                                                ?>
                                                    <a href="<?= _upload_baiviet_l . $x['photo'] ?>" data-fancybox="project<?= $value['id'] ?>">

                                                        <img src="<?= _upload_baiviet_l . $x['photo'] ?>" alt="Happy Flow - Do What You Love">

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


                                        </span>

                                    </div>

                                    <div class="content p-absolute justify-content-end flex-column">
                                        <h3 class="name"><?= $value['ten_vi'] ?></h3>
                                        <div class="address d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                <g clip-path="url(#clip0_0_71)">
                                                    <path d="M8.98657 0.334717C5.58969 0.334717 2.82614 3.09826 2.82614 6.49514C2.82614 8.14526 3.82586 10.2643 5.79751 12.7932C6.70082 13.9488 7.67904 15.0438 8.72588 16.0712C8.79607 16.1383 8.88945 16.1758 8.98657 16.1758C9.08369 16.1758 9.17706 16.1383 9.24725 16.0712C10.2941 15.0438 11.2723 13.9488 12.1756 12.7932C14.1473 10.2643 15.147 8.14526 15.147 6.49514C15.147 3.09826 12.3834 0.334717 8.98657 0.334717ZM8.98657 10.8954C6.56011 10.8954 4.58626 8.92159 4.58626 6.49514C4.58626 4.06869 6.56011 2.09484 8.98657 2.09484C11.413 2.09484 13.3869 4.06869 13.3869 6.49514C13.3869 8.92159 11.413 10.8954 8.98657 10.8954Z" fill="#00ADF3" />
                                                    <path d="M12.0062 5.96472L9.24026 3.45026C9.17084 3.38714 9.08038 3.35217 8.98655 3.35217C8.89273 3.35217 8.80227 3.38714 8.73284 3.45026L5.96694 5.96472C5.9025 6.02331 5.86032 6.1024 5.84754 6.18855C5.83477 6.27471 5.85219 6.36263 5.89685 6.4374C5.93209 6.49433 5.98147 6.54116 6.04019 6.57333C6.09891 6.6055 6.16496 6.62191 6.2319 6.62096H6.59782V9.00969C6.59782 9.10973 6.63756 9.20566 6.70829 9.27639C6.77902 9.34713 6.87496 9.38686 6.97499 9.38686H7.85505C7.95508 9.38686 8.05101 9.34713 8.12175 9.27639C8.19248 9.20566 8.23222 9.10973 8.23222 9.00969V7.62674C8.23222 7.52671 8.27195 7.43078 8.34269 7.36004C8.41342 7.28931 8.50935 7.24957 8.60939 7.24957H9.36372C9.46375 7.24957 9.55969 7.28931 9.63042 7.36004C9.70115 7.43078 9.74089 7.52671 9.74089 7.62674V9.00969C9.74089 9.10973 9.78063 9.20566 9.85136 9.27639C9.92209 9.34713 10.018 9.38686 10.1181 9.38686H10.9981C11.0982 9.38686 11.1941 9.34713 11.2648 9.27639C11.3356 9.20566 11.3753 9.10973 11.3753 9.00969V6.62096H11.7412C11.8082 6.62191 11.8742 6.6055 11.9329 6.57333C11.9916 6.54116 12.041 6.49433 12.0763 6.4374C12.1209 6.36263 12.1383 6.27471 12.1256 6.18855C12.1128 6.1024 12.0706 6.02331 12.0062 5.96472Z" fill="#00ADF3" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_0_71">
                                                        <rect width="16.0925" height="16.0925" fill="white" transform="translate(0.940308 0.208984)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <?= htmlspecialchars_decode($value["mota_$lang"]) ?>
                                        </div>
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