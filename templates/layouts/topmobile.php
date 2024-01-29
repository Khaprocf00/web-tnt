<section class="section-top pb10 d-none d-block-m clearfix d-block-tablet scroll-fixed" mobile
    style="box-shadow:2px 2px 7px #ccc;<?=($template=='products/product_detail') ? 'margin-bottom:10px;':''?>">

    <div class="grid wide">

        <div class="row align-items-center">

            <div class="col l-12 m-12 c-12">

                <div class="box__menu__mobile mb5 mt5">

                    <div class="box__menu__mobile-left">

                        <div class="logo__left">

                            <a href="" class="p-relative ratio-img-mobile d-block" img-width="145" img-height="60">

                                <img class="ratio-img__content-mobile"
                                    src="<?=_upload_hinhanh_l.$logo_mobile["photo"]?>" alt="Logo trang chủ">

                            </a>

                        </div>

                    </div>

                    <div class="wrapper-header__left p-relative">

                        <span class="search-Click">

                            <i class="fa-light fa-magnifying-glass"></i>

                        </span>

                        <div class="nav-menu__formsearchheader d-flex align-items-center">

                            <input role="text" data-role="search-input" type="text" name="keywords" id="keywords-m"
                                placeholder="Tìm kiếm...">

                            <button class="nav-menu__formsearchheader-button button-search-m" data-btn-search
                                data-target="#keywords"><i class="fa-solid fa-magnifying-glass"></i></button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col l-2 m-2 c-2 mt5">

                <div class="logo__center">

                    <div class="menu-bar-res d-none d-block-tablet d-block-m">

                        <a id="hamburger" href="javascript:void(0)" class="js-mobi-tool" data-target="#menuSide"
                            title="Menu"><span></span></a>

                    </div>

                </div>

            </div>

            <div class="col l-10 m-10 c-10 mt5">

                <div class="wrapper-menu__header-mobile p-relative">

                    <ul class="wrapper-menu__header-mobile-list">

                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='' || $source=='index') echo 'activeMenuMobile'; ?>">

                            <a href="" aria-label="Trang chủ" title="Trang chủ" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links"><i class="fas fa-home"></i></a>

                        </li>

                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='gioi-thieu') echo 'activeMenuMobile'; ?>">

                            <a href="gioi-thieu" aria-label="Giới thiệu" title="Giới thiệu" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links">Giới thiệu</a>

                        </li>

                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='san-pham') echo 'activeMenuMobile'; ?>">

                            <a href="san-pham" aria-label="Sản phẩm" title="Sản phẩm" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links">Sản phẩm</a>

                        </li>
                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='qua-tang') echo 'activeMenuMobile'; ?>">

                            <a href="qua-tang" aria-label="Quà tặng khác" title="Quà tặng khác" role="link"
                                rel="dofollow" class="wrapper-menu__header-mobile-links">Quà tặng khác</a>

                        </li>

                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='dich-vu') echo 'activeMenuMobile'; ?>">

                            <a href="dich-vu" aria-label="Dịch vụ" title="Dịch vụ" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links">Dịch vụ</a>

                        </li>

                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='blogs') echo 'activeMenuMobile'; ?>">

                            <a href="blogs" aria-label="Blogs" title="Blogs" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links">Blogs</a>

                        </li>
                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='tuyen-dung') echo 'activeMenuMobile'; ?>">

                            <a href="tuyen-dung" aria-label="Tuyển dụng" title="Tuyển dụng" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links">Tuyển dụng</a>

                        </li>

                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='lien-he') echo 'activeMenuMobile'; ?>">

                            <a href="lien-he" aria-label="LIÊN HỆ" title="LIÊN HỆ" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links">LIÊN HỆ</a>

                        </li>


                    </ul>

                    <div class="wrapper-menu__header-mobile-next-menu">

                        <span><i class="fa-regular fa-chevron-right"></i></span>

                    </div>

                </div>

            </div>

            <?php /* 
            <div class="item col-12">
                <div class="p-relative mt10">
                    <div class="box-search-mobile  position-relative">
                        <input type="text" name="keywords" id="keywords-m" role="search-input"
                            placeholder="Nhập từ khóa tìm kiếm" data-input-search data-target="desktop"
                            autocomplete="off" />
                        <button type="button" class="button-search-m" data-btn-search data-target="#keywords"><i
                                class="fa-light fa-magnifying-glass"></i></button>
                    </div>
                    <div class="search" data-box="desktop">
                    </div>
                </div>
            </div> */ ?>

        </div>

    </div>

</section>