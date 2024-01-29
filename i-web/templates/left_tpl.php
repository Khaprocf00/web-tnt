<nav class="sidebar-nav sidebar-bunker">

    <div class="sidebar-header">

        <div class="box" style="padding: 15px 0px 0px 0px;">

            <div class="logo-admin" style="text-align: center">

                <a href="index.php" title="logo"> <img src="images/logo.png" alt="" width="170"
                        <?= ($config['logo'] == true) ? 'class="none"' : '' ?> />

                </a>

            </div>

            <div class="line-admin">

                <span><i class="fas fa-globe"></i></span>

            </div>

        </div>

    </div>

    <ul class="metismenu" id="menu1">

        <li>

            <a class="home" href="index.php" title="Trang chủ">

                <i class="nav-icon text-sm fal fa-home"></i>Trang Chủ

            </a>

        </li>

        <li class="<?= ($com == 'baiviet' && $_GET['type'] == 'tac-gia') ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?= ($com == 'baiviet' && $_GET['type'] == 'tac-gia') ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý tác giả

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && 'tac-gia' == $_GET['type']) ? "true" : "false" ?>"
                class="collapse <?= ($com == 'baiviet' && 'tac-gia' == $_GET['type']) ? "in" : "" ?>"
                <?= ($com == 'baiviet' && 'tac-gia' == $_GET['type']) ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'tac-gia' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=<?= 'tac-gia' ?>&page=1">Danh sách tác giả</a>

                </li>

            </ul>

        </li>

        <li <?= ($com == 'info') ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'info') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Trang tĩnh

            </a>

            <ul aria-expanded="<?= ($com == 'info') ? 'true' : 'false' ?>"
                class="collapse <?= ($com == 'info') ? 'in' : '' ?>"
                <?= ($com == 'info') ? '' : 'style="height: 0px;"' ?>>

                <li <?= ($com == 'info' && $_GET['type'] == 'gioi-thieu') ? ' class="this"' : '' ?>>

                    <a href="index.php?com=info&act=capnhat&type=gioi-thieu" title="">Giới thiệu</a>

                </li>

            </ul>

        </li>

        <li
            class="<?= ($com == 'baiviet' && ($_GET['type'] == 'dich-vu') || $_GET['type'] == 'menu') ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded=" <?= ($com == 'baiviet' && ($_GET['type'] == 'dich-vu') || $_GET['type'] == 'menu') ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Dịch vụ

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && ($_GET['type'] == 'dich-vu') || $_GET['type'] == 'menu') ? "true" : "false" ?>"
                class="collapse <?= ($com == 'baiviet' && ($_GET['type'] == 'dich-vu') || $_GET['type'] == 'menu') ? "in" : "" ?>"
                <?= ($com == 'baiviet' && ($_GET['type'] == 'dich-vu') || $_GET['type'] == 'menu') ? "" : "style='height: 0px;'" ?>>

                <li
                    class="<?= ($com == 'baiviet' && $act == 'man_list' && 'dich-vu' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man_list&tbl=list&type=dich-vu&page=1">Danh mục cấp 1</a>

                </li>

                <!-- <li class="<?= ($com == 'baiviet' && $act == 'man_cat' && 'dich-vu' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man_cat&tbl=cat&type=dich-vu&page=1">Danh mục cấp 2</a>

                </li>

                <li class="<?= ($com == 'baiviet' && $act == 'man_item' && 'dich-vu' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man_item&tbl=item&type=dich-vu&page=1">Danh mục cấp 3</a>

                </li> -->

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'dich-vu' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=dich-vu&page=1">Danh sách</a>

                </li>

            </ul>

        </li>


        <li
            class="<?= ($com == 'baiviet' && ($_GET['type'] == 'mau-nha-dep') || $_GET['type'] == 'menu') ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded=" <?= ($com == 'baiviet' && ($_GET['type'] == 'mau-nha-dep') || $_GET['type'] == 'menu') ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Mẫu nhà đẹp

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && ($_GET['type'] == 'mau-nha-dep') || $_GET['type'] == 'menu') ? "true" : "false" ?>"
                class="collapse <?= ($com == 'baiviet' && ($_GET['type'] == 'mau-nha-dep') || $_GET['type'] == 'menu') ? "in" : "" ?>"
                <?= ($com == 'baiviet' && ($_GET['type'] == 'mau-nha-dep') || $_GET['type'] == 'menu') ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'mau-nha-dep' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=mau-nha-dep&page=1">Danh sách</a>

                </li>

            </ul>

        </li>

        <!-- start dự án -->
        <li class="<?= ($com == 'baiviet' && ($_GET['type'] == 'du-an') || $_GET['type'] == 'menu') ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded=" <?= ($com == 'baiviet' && ($_GET['type'] == 'du-an') || $_GET['type'] == 'menu') ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Dự án

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && ($_GET['type'] == 'du-an') || $_GET['type'] == 'menu') ? "true" : "false" ?>"
                class="collapse <?= ($com == 'baiviet' && ($_GET['type'] == 'du-an') || $_GET['type'] == 'menu') ? "in" : "" ?>"
                <?= ($com == 'baiviet' && ($_GET['type'] == 'du-an') || $_GET['type'] == 'menu') ? "" : "style='height: 0px;'" ?>>


                <li class="<?= ($com == 'baiviet' && $act == 'man_list' && 'du-an' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man_list&tbl=list&type=du-an&page=1">Danh mục cấp 1</a>

                </li>


                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'du-an' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=du-an&page=1">Danh sách</a>

                </li>

            </ul>

        </li>
        <!-- end dự án -->

        <!-- start câu hỏi -->
        <li
            class="<?= ($com == 'baiviet' && ($_GET['type'] == 'cau-hoi') || $_GET['type'] == 'menu') ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded=" <?= ($com == 'baiviet' && ($_GET['type'] == 'cau-hoi') || $_GET['type'] == 'menu') ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Câu hỏi thường gặp

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && ($_GET['type'] == 'cau-hoi') || $_GET['type'] == 'menu') ? "true" : "false" ?>"
                class="collapse <?= ($com == 'baiviet' && ($_GET['type'] == 'cau-hoi') || $_GET['type'] == 'menu') ? "in" : "" ?>"
                <?= ($com == 'baiviet' && ($_GET['type'] == 'cau-hoi') || $_GET['type'] == 'menu') ? "" : "style='height: 0px;'" ?>>


                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'cau-hoi' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=cau-hoi&page=1">Danh sách câu hỏi</a>

                </li>

            </ul>

        </li>
        <!-- end câu hỏi -->

        <!-- start 5 lý do -->
        <li
            class="<?= ($com == 'baiviet' && ($_GET['type'] == '5-ly-do') || $_GET['type'] == 'menu') ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded=" <?= ($com == 'baiviet' && ($_GET['type'] == '5-ly-do') || $_GET['type'] == 'menu') ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>5 lý do

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && ($_GET['type'] == '5-ly-do') || $_GET['type'] == 'menu') ? "true" : "false" ?>"
                class="collapse <?= ($com == 'baiviet' && ($_GET['type'] == '5-ly-do') || $_GET['type'] == 'menu') ? "in" : "" ?>"
                <?= ($com == 'baiviet' && ($_GET['type'] == '5-ly-do') || $_GET['type'] == 'menu') ? "" : "style='height: 0px;'" ?>>


                <li class="<?= ($com == 'baiviet' && $act == 'man' && '5-ly-do' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=5-ly-do&page=1">Danh sách</a>

                </li>

            </ul>

        </li>
        <!-- end  5 lý do -->

        <?php if ($config['cart-advance']) { ?>
        <li
            class="<?= ($com == 'order' || ($com == 'baiviet' && 'cau-hoi' == $_GET['type']) || ($com == 'baiviet' && 'htgh' == $_GET['type']) || ($com == 'baiviet' && 'pttt' == $_GET['type'])) ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?= ($com == 'order' || ($com == 'baiviet' && 'cau-hoi' == $_GET['type']) || ($com == 'baiviet' && 'htgh' == $_GET['type']) || ($com == 'baiviet' && 'pttt' == $_GET['type'])) ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý đặt hàng

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'order' || ($com == 'baiviet' && 'cau-hoi' == $_GET['type']) ||  ($com == 'baiviet' && 'htgh' == $_GET['type']) || ($com == 'baiviet' && 'pttt' == $_GET['type'])) ? "true" : "false" ?>"
                class="collapse <?= ($com == 'order' || ($com == 'baiviet' && 'cau-hoi' == $_GET['type']) ||  ($com == 'baiviet' && 'htgh' == $_GET['type']) || ($com == 'baiviet' && 'pttt' == $_GET['type'])) ? "in" : "" ?>"
                <?= ($com == 'order' || ($com == 'baiviet' && 'cau-hoi' == $_GET['type']) ||  ($com == 'baiviet' && 'htgh' == $_GET['type']) || ($com == 'baiviet' && 'pttt' == $_GET['type'])) ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'htgh' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=htgh&page=1">Hình thức giao hàng</a>

                </li>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'pttt' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=pttt&page=1">Phương thức thanh toán</a>

                </li>

                <li class="<?= ($com == 'order' && $act == 'man') ? "this" : "" ?>">

                    <a href="index.php?com=order&act=man&page=1">Danh sách đơn hàng</a>

                </li>

            </ul>

        </li>
        <?php } ?>
        <li class="<?= ($com == 'baiviet' && ($_GET['type'] == 'blogs')) ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded=" <?= ($com == 'baiviet' && ($_GET['type'] == 'blogs')) ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý blogs

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && ($_GET['type'] == 'blogs')) ? "true" : "false" ?>"
                class="collapse <?= ($com == 'baiviet' && ($_GET['type'] == 'blogs')) ? "in" : "" ?>"
                <?= ($com == 'baiviet' && ($_GET['type'] == 'blogs')) ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'blogs' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=blogs&page=1">Danh sách</a>

                </li>

            </ul>

        </li>



        <li
            class="<?= ($com == 'baiviet' && ('dich-vu' == $_GET['type'] || 'quy-trinh' == $_GET['type'] || 'huong-dan' == $_GET['type'] || 'chinh-sach' == $_GET['type'])) ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?= ($com == 'baiviet' && ('dich-vu' == $_GET['type'] || 'quy-trinh' == $_GET['type'] || 'huong-dan' == $_GET['type'] || 'chinh-sach' == $_GET['type'])) ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý bài viết chung

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && ('ho-tro' == $_GET['type'] || 'quy-trinh' == $_GET['type'] || 'huong-dan' == $_GET['type'] || 'chinh-sach' == $_GET['type'])) ? "true" : "false" ?>"
                class="collapse <?= ($com == 'baiviet' && ('ho-tro' == $_GET['type'] || 'quy-trinh' == $_GET['type'] || 'huong-dan' == $_GET['type'] || 'chinh-sach' == $_GET['type'])) ? "in" : "" ?>"
                <?= ($com == 'baiviet' && ('ho-tro' == $_GET['type'] || 'quy-trinh' == $_GET['type'] || 'huong-dan' == $_GET['type'] || 'chinh-sach' == $_GET['type'])) ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'chinh-sach' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=chinh-sach&page=1">Chính sách</a>

                </li>

            </ul>

        </li>

        <li <?= ($com == 'photo' || $com == 'video') ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'photo') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-images"></i>Slider - MXH

            </a>

            <ul aria-expanded="<?= ($com == 'photo' || $com == 'video') ? 'true' : 'false' ?>"
                class="collapse <?= ($com == 'photo' || $com == 'video') ? 'in' : '' ?>"
                <?= ($com == 'photo' || $com == 'video') ? '' : 'style="height: 0px;"' ?>>

                <li <?= ($com == 'photo' && $_GET['type'] == 'slider') ? ' class="this"' : '' ?>><a
                        href="index.php?com=photo&act=man&type=slider&page=1" title="">Danh sách Slider</a>

                </li>

                <li <?= ($com == 'photo' && $_GET['type'] == 'intro-top') ? ' class="this"' : '' ?>><a
                        href="index.php?com=photo&act=man&type=intro-top&page=1" title="">Icon dưới slider</a>

                </li>

                <li <?= ($com == 'photo' && $_GET['type'] == 'mangxahoi') ? ' class="this"' : '' ?>><a
                        href="index.php?com=photo&act=man&type=mangxahoi&page=1" title="">Mạng xã hội</a>

                </li>


            </ul>

        </li>

        <?php if (count($GLOBAL['bannerqc']) > 0) { ?>

        <li <?= ($com == 'bannerqc') ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'bannerqc') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Hình ảnh

            </a>

            <ul aria-expanded="<?= ($com == 'bannerqc') ? 'true' : 'false' ?>"
                class="collapse <?= ($com == 'bannerqc') ? 'in' : '' ?>"
                <?= ($com == 'bannerqc') ? '' : 'style="height: 0px;"' ?>>

                <?php foreach ($GLOBAL['bannerqc'] as $key => $value) { ?>

                <li <?php if (isset($kiemtra)) {
                                if ($func->checkPermissions('bannerqc', 'capnhat', $key)) echo 'class="none"';
                            } ?> <?php if ($_GET['type'] == $key) echo ' class="this"' ?>>

                    <a href="index.php?com=bannerqc&act=capnhat&type=<?= $key ?>"
                        title=""><?= $value['title_main'] ?></a>

                </li>

                <?php } ?>

            </ul>

        </li>

        <?php } ?>

        <?php /* <li class="<?=(($com=='map') && $act=='man') ? "active" :""?>">

        <a class="has-arrow" href="#" aria-expanded="<?=(($com=='map') && $act=='man') ? "true" :"false"?>">

            <i class="nav-icon text-sm fal fa-id-card"></i>Hệ thống cửa hàng
        </a>

        <ul aria-expanded="<?=(($com=='map') && $act=='man') ? "true" :"false"?>"
            class="collapse <?=(($com=='map') && $act=='man') ? "in" :""?>">

            <li <?php if($com=='map' && $act=='man') echo ' class="this"' ?>><a href="index.php?com=map&act=man"
                    title="">Danh sách map</a></li>
        </ul>

        </li> */ ?>

        <li
            class="<?= (($com == 'contact' || $com == 'booking' || $com == 'newsletter') && $act == 'man') ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?= (($com == 'contact' || $com == 'booking' || $com == 'newsletter') && $act == 'man') ? "true" : "false" ?>">

                <i class="nav-icon text-sm fal fa-id-card"></i>Liên hệ

            </a>

            <ul aria-expanded="<?= (($com == 'contact' || $com == 'booking' || $com == 'newsletter') && $act == 'man') ? "true" : "false" ?>"
                class="collapse <?= (($com == 'contact' || $com == 'booking' || $com == 'newsletter') && $act == 'man') ? "in" : "" ?>">

                <li <?php if ($com == 'contact' && $act == 'man') echo ' class="this"' ?>><a
                        href="index.php?com=contact&act=man&type=contact" title="">Danh sách liên hệ</a></li>

                <li
                    <?php if ($com == 'booking' && $act == 'man' && $_GET["type"] == 'dat-hang') echo ' class="this"' ?>>
                    <a href="index.php?com=booking&act=man&type=dat-hang" title="">Đăng ký đặt hàng</a>
                </li>

                <li <?php if ($com == 'booking' && $act == 'man' && $_GET["type"] == 'client') echo ' class="this"' ?>>
                    <a href="index.php?com=booking&act=man&type=client" title="">Đăng ký nhận tin</a>
                </li>

            </ul>

        </li>

        <li class="<?= ($com == 'redirect' || ($com == 'seopage' && $act == 'capnhat')) ? "active" : "" ?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?= ($com == 'redirect' || ($com == 'seopage' && $act == 'capnhat')) ? "true" : "false" ?>">

                <i class="nav-icon text-sm fal fa-share-alt"></i>Quản lý seo

            </a>

            <ul aria-expanded="<?= ($com == 'redirect' || ($com == 'seopage' && $act == 'capnhat')) ? "true" : "false" ?>"
                class="collapse <?= ($com == 'redirect' || ($com == 'seopage' && $act == 'capnhat')) ? "in" : "" ?>">

                <?php foreach ($setting['seopage']['page'] as $k => $v) { ?>

                <li <?php if (($com == 'seopage' && $act == 'capnhat') && $type == $k) echo ' class="this"' ?>>

                    <a href="index.html?com=seopage&act=capnhat&type=<?= $k ?>" title=""><?= $v ?></a>

                </li>

                <?php } ?>

                <li <?= ($com == 'redirect') ? ' class="this"' : '' ?>>

                    <a href="index.html?com=redirect&act=man" title="">Redirect url</a>

                </li>

            </ul>

        </li>

        <li <?= ($com == 'setting' || $com == 'company') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#"
                aria-expanded="<?= ($com == 'setting' || $com == 'company') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-cogs"></i>Cài đặt cấu hình

            </a>

            <ul aria-expanded="<?= ($com == 'setting' || $com == 'company') ? 'true' : 'false' ?>"
                class="collapse <?= ($com == 'setting' || $com == 'company') ? 'in' : '' ?>"
                <?= ($com == 'setting' || $com == 'company') ? '' : 'style="height: 0px;"' ?>>

                <?php foreach ($GLOBAL['company'] as $key => $value) { ?>

                <li <?php if (isset($kiemtra)) {
                            if ($func->checkPermissions('company', 'capnhat', $key)) echo 'class="none"';
                        } ?> <?= ($com == 'company' && $_GET['type'] == $key) ? ' class="this"' : '' ?>>

                    <a href="index.php?com=company&act=capnhat&type=<?= $key ?>"
                        title=""><?= $value['title_main'] ?></a>

                </li>

                <?php } ?>

                <?php foreach ($GLOBAL['map'] as $key => $value) { ?>
                <li <?= ($com == 'map' && $key == $_GET['type']) ? ' class="this"' : '' ?>>

                    <a href="index.html?com=map&act=man&type=<?= $key ?>" title=""><?= $value['title'] ?></a>

                </li>
                <?php } ?>

                <li <?= ($com == 'setting') ? ' class="this"' : '' ?>>

                    <a href="index.php?com=setting&act=capnhat" title=""> <?= _cauhinhchung ?></a>

                </li>

            </ul>

        </li>

        <?php if ($GLOBAL_LANG == true) { ?>

        <li <?= ($_GET['com'] == 'ngonngu') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?= ($_GET['com'] == 'ngonngu') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-language"></i> Hỗ trợ ngôn ngữ

            </a>

            <ul aria-expanded="<?= ($_GET['com'] == 'ngonngu') ? 'true' : 'false' ?>"
                class="collapse <?= ($_GET['com'] == 'ngonngu') ? 'in' : '' ?>"
                <?= ($_GET['com'] == 'ngonngu') ? '' : 'style="height: 0px;"' ?>>

                <li <?php if ($_GET['com'] == 'ngonngu' && $_GET['act'] == 'man_lang') echo ' class="this"' ?>>

                    <a href="index.php?com=ngonngu&act=man_lang"><?= _ngonngu ?></a>

                </li>

            </ul>

        </li>

        <?php } ?>

    </ul>

</nav>