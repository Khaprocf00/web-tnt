<header style="position: fixed; z-index:9999;top: 0; background-color: #FFF; width: 100%; box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);">
    <div class="width d-flex">
        <div class="logo">
            <a href=""><img src="<?= _upload_hinhanh_l . $logo['photo'] ?>" alt=""></a>
        </div>
        <ul class="d-flex">
            <li class="<?php if ($com == '' || $com == 'index') echo ' active'; ?>">
                <?php if ($source == 'index') { ?>
                    <h2>
                    <?php } ?>
                    <a href="" <?php if ($source != 'index') {
                                    echo "style='margin-top:7px'";
                                } ?> title="Trang chủ" rel="dofollow">Trang
                        chủ</a>
                    <?php if ($source == 'index') { ?>
                    </h2>
                <?php } ?>
            </li>

            <li class="<?php if ($com == 'gioi-thieu') echo ' active'; ?> p-relative">

                <?php if ($source == 'index') { ?>

                    <h2>

                    <?php } ?>

                    <a href="gioi-thieu" <?php if ($source != 'index') {
                                                echo "style='margin-top:7px'";
                                            } ?> title="Giới thiệu" rel="dofollow">
                        <span>Giới thiệu</span>

                    </a>

                    <?php if ($source == 'index') { ?>

                    </h2>

                <?php } ?>

            </li>
            <li class="<?php if ($com == 'dich-vu') echo ' active'; ?> p-relative">

                <?php if ($source == 'index') { ?>

                    <h2>

                    <?php } ?>

                    <a href="dich-vu" <?php if ($source != 'index') {
                                            echo "style='margin-top:7px'";
                                        } ?> title="Dịch vụ" rel="dofollow">
                        <span>Dịch vụ</span>
                        <div class="icon_dropdown">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </a>

                    <?php if ($source == 'index') { ?>

                    </h2>


                <?php }

                ?>

                <?php if (count($sanpham_list) > 0) { ?>

                    <ul class="">

                        <?php foreach ($sanpham_list as $k => $v) {

                            $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc", array($v['id']));

                        ?>
                            <li class="p-relative <?php if ($act == $v['tenkhongdau']) echo ' active'; ?>">

                                <?php if ($source == 'index') { ?>

                                    <h3 class="mg0">

                                    <?php } ?>

                                    <a href="<?= $v['tenkhongdau'] ?>" role="link" rel="dofollow" aria-label="<?= $v["ten"] ?>" title="<?= $v['ten'] ?>"><?= $v['ten'] ?></a>

                                    <?php if ($source == 'index') { ?>

                                    </h3>

                                <?php } ?>

                            </li>

                        <?php } ?>

                    </ul>

                <?php } ?>

            </li>
            <li class="<?php if ($com == 'du-an') echo ' active'; ?> p-relative">

                <?php if ($source == 'index') { ?>

                    <h2>

                    <?php } ?>

                    <a href="du-an" <?php if ($source != 'index') {
                                        echo "style='margin-top:7px'";
                                    } ?> title="Dự án" rel="dofollow">
                        <span>Dự án</span>
                        <div class="icon_dropdown">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </a>

                    <?php if ($source == 'index') { ?>

                    </h2>

                <?php } ?>
                <?php if (count($duan_list) > 0) { ?>

                    <ul class="">

                        <?php foreach ($duan_list as $k => $v) {

                            $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc", array($v['id']));

                        ?>
                            <li class="p-relative <?php if ($act == $v['tenkhongdau']) echo ' active'; ?>">

                                <?php if ($source == 'index') { ?>

                                    <h3 class="mg0">

                                    <?php } ?>

                                    <a href="<?= $v['tenkhongdau'] ?>" role="link" rel="dofollow" aria-label="<?= $v["ten"] ?>" title="<?= $v['ten'] ?>"><?= $v['ten'] ?></a>

                                    <?php if ($source == 'index') { ?>

                                    </h3>

                                <?php } ?>

                            </li>

                        <?php } ?>

                    </ul>

                <?php } ?>

            </li>

            <li class="<?php if ($com == 'mau-nha-dep') echo ' active'; ?> p-relative">

                <?php if ($source == 'index') { ?>

                    <h2>

                    <?php } ?>

                    <a href="mau-nha-dep" <?php if ($source != 'index') {
                                                echo "style='margin-top:7px'";
                                            } ?> title="Mẫu nhà đẹp" rel="dofollow">
                        <span>Mẫu nhà đẹp</span>

                    </a>

                    <?php if ($source == 'index') { ?>

                    </h2>

                <?php } ?>

            </li>
            <li class="<?php if ($com == 'blogs') echo ' active'; ?> p-relative">

                <?php if ($source == 'index') { ?>

                    <h2>

                    <?php } ?>

                    <a href="blogs" <?php if ($source != 'index') {
                                        echo "style='margin-top:7px'";
                                    } ?> title="Tin tức" rel="dofollow">
                        <span>Tin tức</span>

                    </a>

                    <?php if ($source == 'index') { ?>

                    </h2>

                <?php } ?>

            </li>
            <li class="<?php if ($com == 'lien-he') echo ' active'; ?> p-relative">

                <?php if ($source == 'index') { ?>

                    <h2>

                    <?php } ?>

                    <a href="lien-he" <?php if ($source != 'index') {
                                            echo "style='margin-top:7px'";
                                        } ?> title="Liên hệ" rel="dofollow">
                        <span>Liên Hệ</span>

                    </a>

                    <?php if ($source == 'index') { ?>

                    </h2>

                <?php } ?>

            </li>

            <!-- <li>
                <h1>
                    <a href="">
                        <div class="icon_search">
                            <img src="assets/images/svg/icons8_search 7.svg" alt="">
                        </div>
                    </a>
                </h1>
            </li> -->
            <li class="p-relative items-lastchild pt5">

                <a href="javascript:void(0)" class="d-flex align-items-center justify-content-center" title="Tìm kiếm">
                    <span class="search-Click cs-pointer" id="SeachOnClick">

                        <i style="font-size: 18px" class="fa-light fa-magnifying-glass"></i>

                    </span>

                    <div class="nav-menu__formsearchheader d-flex align-items-center">

                        <input role="search-input" type="text" name="keywords" id="keywordspc" placeholder="Tìm kiếm...">

                        <button class="nav-menu__formsearchheader-button" data-btn-search-pc type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>

                    </div>
                </a>

            </li>
        </ul>
    </div>
</header>