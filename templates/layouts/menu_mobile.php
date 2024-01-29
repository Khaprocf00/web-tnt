<div class="box-modal-menu d-none d-block-m d-block-tablet" id="menuSide">

    <div class="box-modal-menu__header">

        <div class="box-modal-menu__header-box">

            <div class="box-modal-menu__header-box-close" id="close-menumobile">

                <span><i class="fa-solid fa-square-xmark"></i></span>

                <span>Đóng</span>

            </div>

            <a href="" title="Trang chủ" class="box-modal-menu__header-box-home">

                <span><i class="fa-sharp fa-solid fa-house-user"></i></span>

                <span>Trang chủ</span>

            </a>

            <div class="box-modal-menu__header-box-search">

                <input role="text" data-role="search-input" type="text" name="keywords" id="keywords-mmenu"
                    placeholder="Tìm kiếm sản phẩm...">

                <button class="button-search-mmenu" data-btn-search="" data-target="#keywords-mmenu" data-view="">

                    <i class="fa-light fa-magnifying-glass"></i>

                </button>

            </div>

        </div>

    </div>

    <div class="p-relative">

        <ul class="list menu_list">

            <li>

                <div class="d-flex p-relative">

                    <a href="ve-chung-toi" title="Giới thiệu" aria-label="Giới thiệu" role="link" rel="dofollow">

                        <span>Giới thiệu</span>

                    </a>

                </div>

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Sản phẩm" href="san-pham" role="link" aria-label="Sản phẩm"
                        rel="dofollow">Sản phẩm</a>

                    <?php if(count($sanpham_list)>0){ ?>

                    <a href="javascript:" class="toggle-btn ic-arrow">

                        <span></span>

                    </a>

                    <?php }?>

                </div>

                <ul class="inner ul-list-none" style="display: none;">

                    <?php if(count($sanpham_list)>0){ 
                        
                        foreach($sanpham_list as $key => $value){

                            $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,type from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($value['id']));

                            ?>

                    <li class="mt10 mb10">

                        <div class="d-flex p-relative">

                            <a itemprop="url" title="<?=$value["ten"]?>"
                                href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" role="link"
                                aria-label="<?=$value["ten"]?>" rel="dofollow"><?=$value["ten"]?></a>

                            <?php if(count($c2)>0){ ?>

                            <a href="javascript:" class="toggle-btn ic-arrow">

                                <span></span>

                            </a>

                            <?php }?>

                        </div>

                        <?php if(count($c2)>0){ ?>

                        <ul class="inner ul-list-none pr20" style="display: none;">

                            <?php foreach($c2 as $key => $vc2){ 

                                            $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,type from #_baiviet_item where hienthi=1 and id_cat=? order by stt asc,id desc",array($vc2['id']));

                                            ?>

                            <li class="mt10 mb10">

                                <div class="d-flex p-relative">

                                    <a itemprop="url" title="<?=$vc2["ten"]?>"
                                        href="<?=$value["type"]?>/<?=$vc2["tenkhongdau"]?>" role="link"
                                        aria-label="<?=$vc2["ten"]?>" rel="dofollow"><?=$vc2["ten"]?></a>

                                    <?php if(count($c3)>0){ ?>

                                    <a href="javascript:" class="toggle-btn ic-arrow">

                                        <span></span>

                                    </a>

                                    <?php }?>

                                </div>

                                <?php if(count($c3)>0){ ?>

                                <ul class="inner ul-list-none pr20" style="display: none;">

                                    <li class="mt10 mb10">

                                        <div class="wrapper-cat__product">

                                            <div class="row">

                                                <?php foreach($c3 as $key => $vc3){ ?>

                                                <div class="col l-12 m-12 c-12 mb10">

                                                    <div class="wrapper-cat__product-box d-flex flex-column flex-cl-1">

                                                        <div
                                                            class="wrapper-cat__product-box-detail d-flex flex-column flex-cl-1">

                                                            <div
                                                                class="wrapper-cat__product-box-title line-2 flex-cl-1">

                                                                <a href="<?=$value["type"]?>/<?=$vc3["tenkhongdau"]?>"
                                                                    title="<?=$vc3["ten"]?>"
                                                                    aria-label="<?=$vc3["ten"]?>" role="link"
                                                                    rel="dofollow"
                                                                    class="no-menu-css"><?=$vc3["ten"]?></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <?php }?>

                                            </div>

                                        </div>

                                    </li>

                                </ul>

                                <?php }?>

                            </li>

                            <?php }?>

                        </ul>

                        <?php }?>

                    </li>

                    <?php }}?>

                </ul>

            </li>
            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Quà tặng khác" href="qua-tang" role="link" aria-label="Quà tặng khác"
                        rel="dofollow">Quà tặng khác</a>

                    <?php if(count($quatang_list)>0){ ?>

                    <a href="javascript:" class="toggle-btn ic-arrow">

                        <span></span>

                    </a>

                    <?php }?>

                </div>

                <ul class="inner ul-list-none" style="display: none;">

                    <?php if(count($quatang_list)>0){ 
        
                        foreach($quatang_list as $key => $value){

                            $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,type from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($value['id']));

                    ?>

                    <li class="mt10 mb10">

                        <div class="d-flex p-relative">

                            <a itemprop="url" title="<?=$value["ten"]?>"
                                href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" role="link"
                                aria-label="<?=$value["ten"]?>" rel="dofollow"><?=$value["ten"]?></a>

                            <?php if(count($c2)>0){ ?>

                            <a href="javascript:" class="toggle-btn ic-arrow">

                                <span></span>

                            </a>

                            <?php }?>

                        </div>

                        <?php if(count($c2)>0){ ?>

                        <ul class="inner ul-list-none pr20" style="display: none;">

                            <?php foreach($c2 as $key => $vc2){ 

                            $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,type from #_baiviet_item where hienthi=1 and id_cat=? order by stt asc,id desc",array($vc2['id']));

                            ?>

                            <li class="mt10 mb10">

                                <div class="d-flex p-relative">

                                    <a itemprop="url" title="<?=$vc2["ten"]?>"
                                        href="<?=$value["type"]?>/<?=$vc2["tenkhongdau"]?>" role="link"
                                        aria-label="<?=$vc2["ten"]?>" rel="dofollow"><?=$vc2["ten"]?></a>

                                    <?php if(count($c3)>0){ ?>

                                    <a href="javascript:" class="toggle-btn ic-arrow">

                                        <span></span>

                                    </a>

                                    <?php }?>

                                </div>

                                <?php if(count($c3)>0){ ?>

                                <ul class="inner ul-list-none pr20" style="display: none;">

                                    <li class="mt10 mb10">

                                        <div class="wrapper-cat__product">

                                            <div class="row">

                                                <?php foreach($c3 as $key => $vc3){ ?>

                                                <div class="col l-12 m-12 c-12 mb10">

                                                    <div class="wrapper-cat__product-box d-flex flex-column flex-cl-1">

                                                        <div
                                                            class="wrapper-cat__product-box-detail d-flex flex-column flex-cl-1">

                                                            <div
                                                                class="wrapper-cat__product-box-title line-2 flex-cl-1">

                                                                <a href="<?=$value["type"]?>/<?=$vc3["tenkhongdau"]?>"
                                                                    title="<?=$vc3["ten"]?>"
                                                                    aria-label="<?=$vc3["ten"]?>" role="link"
                                                                    rel="dofollow"
                                                                    class="no-menu-css"><?=$vc3["ten"]?></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <?php }?>

                                            </div>

                                        </div>

                                    </li>

                                </ul>

                                <?php }?>

                            </li>

                            <?php }?>

                        </ul>

                        <?php }?>

                    </li>

                    <?php }}?>

                </ul>

            </li>
            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Dịch vụ" href="dich-vu" role="link" aria-label="Dịch vụ"
                        rel="dofollow">Dịch vụ</a>

                </div>

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Blogs" href="blogs" role="link" aria-label="Blogs"
                        rel="dofollow">Blogs</a>

                </div>

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Tuyển dụng" href="tuyen-dung" role="link" aria-label="Tuyển dụng"
                        rel="dofollow">Tuyển dụng</a>

                </div>

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a href="lien-he" title="LIÊN HỆ" aria-label="LIÊN HỆ" role="link" rel="dofollow">

                        <span>LIÊN HỆ</span>

                    </a>

                </div>

            </li>

        </ul>

    </div>

</div>