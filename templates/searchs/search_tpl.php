<section class="mt30 mt-m-20">

    <div class="grid wide">

        <div class="row">

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

        </div>

        <div class="mt30 mt-m-20">

            <div class="row">
                <div class="col l-12 m-12 c-12">

                    <?php if (count($tintuc) > 0) { ?>

                        <div class="res--grid--template gap20 now-loading" id="wrap__product">

                            <?= $layouts->getLayoutProduct($tintuc, 'h3') ?>

                        </div>

                        <div class="row">

                            <div class="col l-12 m-12 c-12 justify-content-center mb20 mt20">

                                <div id="paging" class="t-center">
                                    <?= $layouts->getLoadMoreInPage($total_paging, $per_page, $page, 'sản phẩm') ?>
                                </div>

                            </div>

                        </div>

                    <?php } ?>

                </div>

            </div>

            <?php if ($seo->getSeo('content') != '') { ?>

                <div class="row">

                    <div class="wrapper-toc mt10">

                        <div class="content ul-list-detail">

                            <?= htmlspecialchars_decode($seo->getSeo('content')) ?>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>

</section>