<?php

$list_com = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where type=? and hienthi=1 and id<>? order by stt asc,id desc", array($com, $row_list["id"]));

$products_nb_com = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,giaban,type from #_baiviet where type=? and hienthi=1 and noibat<>0 order by stt asc,id desc limit 7", array($com));
?>
<?php if ($com == 'tin-tuc') { ?>
    <div class="col l-3 m-4 c-12">

        <div class="wrapper-right">

            <?php if (count($list_c1_tt) > 0) { ?>

                <div class="wrapper-right__one">

                    <div class="wrapper-right__title">

                        <span>Danh mục tin</span>

                    </div>

                    <ul class="wrapper-right__category">
                        <?php foreach ($list_c1_tt as $key => $value) {
                            $count = $db->rawQueryOne("select COUNT(*) as `numb` from #_baiviet where hienthi=1 and type=? and id_list=? order by id desc", array($value["type"], $value["id"]));
                        ?>

                            <li class="wrapper-right__category-item">
                                <a href="<?= $func->getUrl($value) ?>" aria-label="<?= $value["ten"] ?>" title="<?= $value["ten"] ?>" class="wrapper-featured__news-link" role="link" rel="dofollow">

                                    <div class="title">
                                        <i class="fa-solid fa-angles-right"></i> <span><?= $value["ten"] ?></span>
                                    </div>
                                    <div class="count">
                                        (<?= $count["numb"] ?>)
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>

                </div>

            <?php } ?>

            <?php if (count($tintuc) > 0) { ?>

                <div class="wrapper-right__two">

                    <div class="wrapper-right__title">

                        <span>Tin tức mới</span>

                    </div>

                    <ul class="wrapper-right__list">

                        <?php foreach ($tintuc as $key => $value) { ?>

                            <li class="wrapper-featured__news-item mb10 wrapper-right__list-box pt10">

                                <a href="<?= $value["type"] ?>/<?= $value["tenkhongdau"] ?>" aria-label="<?= $value["ten_$lang"] ?>" title="<?= $value["ten_$lang"] ?>" class="wrapper-featured__news-link" role="link" rel="dofollow">

                                    <div class="wrapper-featured__news-img">

                                        <span class="d-block cubic-img hover-left">

                                            <img src="<?= _upload_baiviet_l . $value["photo"] ?>" alt="<?= $value["ten_$lang"] ?>">

                                        </span>

                                    </div>

                                    <div class="wrapper-featured__news-info">

                                        <div class="wrapper-featured__news-info-title line-3 line-2">

                                            <span><?= $value["ten_$lang"] ?></span>

                                        </div>

                                        <div class="wrapper-featured__news-info-date">

                                            <span><i class="fa-light fa-calendar-clock mr5"></i>
                                                <?= ($value["ngaysua"] != 0) ? date('d/m/Y', $value["ngaysua"]) : date('d/m/Y', $value["ngaytao"]) ?>
                                            </span>

                                        </div>

                                    </div>

                                </a>

                            </li>

                        <?php } ?>

                    </ul>

                </div>

            <?php } ?>

            <div class="wrapper-right__three">
                <div class="wrapper-right__title">
                    <span>Kết nối</span>
                </div>
                <ul class="wrapper-right__socical">
                    <?php foreach ($socical_detail as $key => $value) { ?>
                        <li class="wrapper-right__socical-item">
                            <a target="_blank" href="<?= $value["link"] ?>" title="<?= $value["ten"] ?>">
                                <img widht="20" height="20" src="<?= _upload_hinhanh_l . $value["photo"] ?>" alt="<?= $value["ten"] ?>">
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

        </div>

    </div>

<?php } else { ?>

    <div class="col l-3 m-4 c-12">

        <div class="wrapper-right">

            <div class="aside_sidebar-detail d-none-m d-none-tablet">

                <div class="header-sidebar">

                    <span>HỖ TRỢ KHÁCH HÀNG</span>

                </div>

                <div class="body-sidebar p-relative">

                    <div class="box-under">

                        <div class="des">

                            <?= htmlspecialchars_decode($des_detail["mota"]) ?>

                        </div>

                    </div>


                </div>

            </div>

            <?php /* if(count($list_com)>0) {?>

        <div class="wrapper-right__one">

            <div class="wrapper-right__title">

                <span>Danh mục sản phẩm</span>

            </div>

            <ul class="wrapper-right__category">
                <?php foreach($list_com as $key => $value){ 
                        $count = $db->rawQueryOne("select COUNT(*) as `numb` from #_baiviet where hienthi=1 and type=? and id_list=? order by id desc",array($value["type"],$value["id"]));
                        ?>

                <li class="wrapper-right__category-item">
                    <a href="<?=$func->getUrl($value)?>" aria-label="<?=$value["ten"]?>" title="<?=$value["ten"]?>"
                        class="wrapper-featured__news-link" role="link" rel="dofollow">

                        <div class="title">
                            <i class="fa-solid fa-angles-right"></i> <span><?=$value["ten"]?></span>
                        </div>
                        <div class="count">
                            (<?=$count["numb"]?>)
                        </div>
                    </a>
                </li>
                <?php }?>
            </ul>

        </div>

        <?php } */ ?>

            <?php if (count($products_nb_com) > 0) { ?>

                <div class="wrapper-right__two mt20 d-none-m d-none-tablet">

                    <div class="wrapper-right__title">

                        <span>Tin tức nổi bật</span>

                    </div>

                    <ul class="wrapper-right__list">

                        <?php foreach ($products_nb_com as $key => $value) {
                            $name = (isset($value["ten_$lang"])) ? $value["ten_$lang"] : $value["ten"];
                        ?>

                            <li class="wrapper-featured__news-item mb10 wrapper-right__list-box pt10">

                                <a href="<?= $func->getUrl($value) ?>" aria-label="<?= $value["ten_$lang"] ?>" title="<?= $value["ten_$lang"] ?>" class="wrapper-featured__news-link" role="link" rel="dofollow">

                                    <div class="wrapper-featured__news-img">

                                        <span class="d-block cubic-img hover-left">

                                            <img src="<?= _upload_baiviet_l . $value["photo"] ?>" alt="<?= $name ?>">

                                        </span>

                                    </div>

                                    <div class="wrapper-featured__news-info">

                                        <div class="wrapper-featured__news-info-title line-3 line-2">

                                            <span><?= $name ?></span>

                                        </div>

                                        <div class="wrapper-featured__news-price mt15">

                                            <span><?= ($value['giaban'] != 0) ? $func->money($value['giaban'], ' VND') . '/ Ngày' : 'Liên hệ'; ?></span>

                                        </div>

                                    </div>

                                </a>

                            </li>

                        <?php } ?>

                    </ul>

                </div>

            <?php } ?>



        </div>

    </div>

<?php } ?>