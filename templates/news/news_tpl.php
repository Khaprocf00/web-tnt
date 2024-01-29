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

                        <div class="row" id="wrap__product">

                            <?= $func->gridTemplateNews($tintuc, 'h3') ?>

                        </div>
                        <?php if ($total_paging > 0) { ?>
                            <div class="row">

                                <div class="col l-12 m-12 c-12 justify-content-center mb20 mt20">

                                    <div id="paging" class="t-center">
                                        <?= $func->getLoadMore($total_paging, $per_page, $page, 'bài viết') ?></div>

                                </div>

                            </div>
                        <?php } ?>
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