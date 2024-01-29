<?php

$colors = $db->rawQuery("select id,ten_$lang as ten,giaban,photo from #_attribute where hienthi=1 and id_product=? and type=? order by stt asc,id desc", array($row_detail['id'], 'color'));

$name_list = $db->rawQueryOne("select ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and id=? and type=? limit 1", [$row_detail["id_list"], 'san-pham']);

?>
<div id="fb-root"></div>

<script async defer src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6"></script>
<style>
ol#breadcrumb {
    margin: 0;
    margin-bottom: 15px;
}
</style>

<section class="product-detail__sc mt10" id="detail-product">

    <div class="grid wide">

        <form method="post" data-role="add-to-cart" enctype="multipart/form-data" onsubmit="return false"
            name="product-detail-<?= $row_detail['id'] ?>" id="product-detail-<?= $row_detail['id'] ?>">
            <input type="hidden" name="src" value="addCart">

            <input type="hidden" name="pid" value="<?= $row_detail['id'] ?>">

            <div class="row d-flex flex-wrap">

                <div class="col l-12 m-12 c-12 mt20 d-none-m">
                    <div class="breadcumb breadcumb--detail breadcumb--detail--product">
                        <?= $str_breadcrumbs ?>
                    </div>
                </div>

                <div class="col l-9 m-98 c-12 mb-t-20 mt-m-20">

                    <div class="wrapper-aside__productdetail-left">

                        <div class="row">

                            <div class="col l-6 m-6 c-12">

                                <div class="row">
                                    <div class="col l-12 m-12 c-12">
                                        <div class="res--thumb--detail t-center">
                                            <a class="glightbox cs-pointer" title="">
                                                <img src="<?= _upload_baiviet_l . $row_detail["photo"] ?>"
                                                    alt="<?= $row_detail["ten_$lang"] ?>" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col l-12 m-12 c-12">
                                        <?php if (count($photos) > 0) { ?>
                                        <div class="owl-carousel owl-theme fix--owl--detail" id="owl--photos">
                                            <?php foreach ($photos as $k1 => $v1) { ?>

                                            <div class="res--item--photo">
                                                <a class="glightbox cs-pointer" title="">
                                                    <img src="<?= _upload_baiviet_l . $v1["photo"] ?>"
                                                        alt="<?= $row_detail["ten_$lang"] ?>" />
                                                </a>
                                            </div>

                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>

                            <div class="col l-6 m-6 c-12">

                                <div class="row">

                                    <div class="col l-12 m-12 c-12">

                                        <div class="box-detail mt20i">

                                            <h1 class="mg0">
                                                <span><?= $row_detail['ten_' . $lang] ?></span>
                                            </h1>

                                            <ul>
                                                <?php if (!empty($row_detail["masp"])) { ?>
                                                <li>

                                                    <div class="res--grid10--template">
                                                        <div class="res--span--5">
                                                            <div class="res--code--product">
                                                                <span>Mã sản phẩm:</span>
                                                                <span><?= $row_detail["masp"] ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="res--span--5">
                                                            <div class="res--view--product">
                                                                <span><i class="fa-regular fa-eye mr5"></i>
                                                                    <?= $row_detail['luotxem'] ?> Lượt Xem</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                                <?php if (!empty($name_list["ten"])) { ?>
                                                <li>
                                                    <div class="res--code--product">
                                                        <span>Danh mục:</span>
                                                        <span>
                                                            <a style="color:#27C500"
                                                                href="<?= $name_list["type"] ?>/<?= $name_list["tenkhongdau"] ?>"
                                                                title="<?= $name_list["ten"] ?>">
                                                                <?= $name_list["ten"] ?>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                                <!-- <li>

                                                    <div class="res--grid10--template">
                                                        <div class="res--span--5">
                                                            <div class="res--status--product">
                                                                <span>Tình trạng:</span>
                                                                <span>
                                                                    <?= ($row_detail['id_loai'] == 1) ? 'Còn Hàng' : 'Hết Hàng' ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="res--span--5">
                                                            <div class="res--view--product d-flex align-items-center">
                                                                <span class='res--rating'
                                                                    style='--rating:<?= $func->getPercentRating($row_detail['rating']) ?>'></span>
                                                                <b
                                                                    class="label__productdetails">(<?= $row_detail['luotxem'] ?>)</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li> -->

                                                <?php if (!empty($row_detail["mota_$lang"])) { ?>

                                                <li>

                                                    <div class="row d-flex">

                                                        <div class="col l-12 m-12 c-12">

                                                            <div>
                                                                <?= htmlspecialchars_decode($row_detail["mota_$lang"]) ?>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </li>

                                                <?php } ?>

                                                <li class="wrapper-productitem__price">

                                                    <div class="row d-flex flex-wrap">

                                                        <div class="col l-12 m-12 c-12">

                                                            <span
                                                                class="label__productdetails label__productdetails--modifiers pr10"></span>

                                                            <span class="price-new-product"
                                                                id="view-price-detail"><?php if ($row_detail["giaban"] != 0 && $row_detail["giacu"] != 0) { ?><del
                                                                    class="mr10"><?= $func->money($row_detail["giacu"], ' VNĐ'); ?></del><?php } ?>
                                                                <?= ($row_detail['giaban'] != 0) ? $func->money($row_detail['giaban'], ' VNĐ') : 'Liên hệ' ?>

                                                                <?php if ($func->percentPrice($row_detail["giacu"], $row_detail["giaban"]) > 0) { ?>

                                                                <span class="pro-sale">-
                                                                    <?= $func->percentPrice($row_detail["giacu"], $row_detail["giaban"]) ?></span>

                                                                <?php } ?>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </li>



                                                <?php if (count($colors) > 0) : ?>

                                                <li class="attribute d-flex" style="padding:0;border:0;">

                                                    <div class="attribute-left">

                                                        <span class="label__productdetails">Chọn màu sắc:</span>

                                                    </div>

                                                    <ul class="color">
                                                        <?php foreach ($colors as $key => $value) { ?>
                                                        <li>
                                                            <a data-zoom-id="Zoom-1"
                                                                href="<?= _upload_baiviet_l . $value['photo'] ?>"
                                                                data-image="thumbs/420x420x1/<?= _upload_baiviet_l . $value['photo'] ?>"
                                                                class="js-color p-relative" data-target="#color"
                                                                data-value="<?= $value['id'] ?>">
                                                                <span><?= $value["ten"] ?></span>

                                                                <div class="product-attribute__tick">
                                                                    <svg enable-background="new 0 0 12 12"
                                                                        viewBox="0 0 12 12" x="0" y="0"
                                                                        class="paint-tick-svg icon-attribute-tick-bold">
                                                                        <g>
                                                                            <path
                                                                                d="m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </div>

                                                            </a>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                    <?php /* if($colors){?>
                                                    <input type="hidden" name="color" value="0" id="color" />
                                                    <?php } */ ?>
                                                </li>
                                                <?php endif ?>

                                                <?php if (!empty($row_detail["mota_km_$lang"])) { ?>

                                                <li>

                                                    <div class="row d-flex">

                                                        <div class="col l-12 m-12 c-12">

                                                            <div class="wrapper-product-detail__promotion">

                                                                <div class="wrapper-product-detail__promotion-box">
                                                                    <?= htmlspecialchars_decode($row_detail["mota_km_$lang"]) ?>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </li>

                                                <?php } ?>

                                                <?php if ($config['cart-advance']) { ?>
                                                <li style="border:0">
                                                    <div
                                                        class="bg-cart-fix d-flex justify-content-center align-items-center mt10 mb10 center">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center wrapper-qtycart">
                                                            <div class="mr5">Số lượng: </div>
                                                            <div class="mr10">
                                                                <span>
                                                                    <div class="wrap_qty">
                                                                        <span class="down"
                                                                            onclick="var result=document.getElementById('qty'); var qty=result.value; if(!isNaN(qty) && qty>1){result.value--}else{return false;}">-</span>
                                                                        <input type="text" class="input-text qty"
                                                                            name="quality" id="qty" value="1"
                                                                            title="Số lượng" maxlength="6" min="1">
                                                                        <span class="up"
                                                                            onclick="var result=document.getElementById('qty'); var qty=result.value; if(!isNaN(qty)){result.value++}else{return false;}">+</span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <button type="button"
                                                            data-el="#product-detail-<?= $row_detail['id'] ?>"
                                                            class="btn-cart-css btn-addcart cs-pointer w-100i mt10i"
                                                            data-qty="1" data-id="<?= $row_detail["id"] ?>">Thêm vào
                                                            giỏ</button>
                                                        <button type="button"
                                                            data-el="#product-detail-<?= $row_detail['id'] ?>"
                                                            class="btn-cart-css btn-buynow cs-pointer w-100i mt10i">Mua
                                                            ngay</button>

                                                    </div>
                                                </li>
                                                <?php } ?>
                                                <?php /*
                                                <li>
                                                    <div class="contact-phone">
                                                        <ul>
                                                            <li>
                                                                <a target="_blank"
                                                                    href="https://zalo.me/<?=($row_detail['sozalo']!='') ? str_replace(' ','',$row_detail['sozalo']) : str_replace(' ','',$row_setting['sozalo'])?>">
                                                <p class="mb0"> <i class="fa fa-comment" aria-hidden="true"></i> Chat
                                                    zalo
                                                </p>
                                                <p>Giải đáp hỗ trợ ngay tức thì</p>
                                                </a>
                                                </li>
                                                <li>
                                                    <a target="_blank"
                                                        href="https://m.me/<?=$row_setting['linkmessage']?>">
                                                        <p class="mb0"> <i class="fa fa-facebook-square"
                                                                aria-hidden="true"></i> Chat
                                                            Facebook</p>
                                                        <p>Giải đáp hỗ trợ ngay tức thì</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        </li>
                                        */ ?>

                                        <li>
                                            <div class="contact-phone">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0)" class="js--popup"
                                                            data-id="<?= $row_detail["id"] ?>"
                                                            data-package="<?= $row_detail["ten_$lang"] ?>">
                                                            <p class="mb0">Đặt hàng ngay</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="box-desc-detail mt20">

                    <div class="row10">

                        <div class="col l-12 m-12 c-12">

                            <div class="page-product__content d-flex justify-content-between d-block-m mt15">

                                <div class="page-product__content-left bg-white col-12">

                                    <div class="page-product__detail">

                                        <div class="product-detail pd0i">

                                            <?php if ($config['tabs']) { ?>

                                            <div class="scroll--tabs--modifier">
                                                <ul id="ul--tab__detail"
                                                    class="d-flex align-items-center justify-content-start flex-wrap gap20">
                                                    <li data-tab="1" class="active"><span>Thông tin chi tiết</span>
                                                    </li>
                                                    <!-- <li data-tab="2"><span>Quy định</span></li> -->
                                                    <li data-tab="3"><span>Đánh giá</span></li>
                                                </ul>
                                            </div>

                                            <div id="tabs--content__modifier" class="mt20">
                                                <div class="tab--product--content" id="tabs1">
                                                    <?= ($row_detail["noidung_$lang"] != '') ? htmlspecialchars_decode($row_detail["noidung_$lang"]) : '<p class="t-center">Nội dung đang được cập nhật....</p>' ?>
                                                </div>
                                                <?php /*
                                                    <div class="tab--product--content" id="tabs2" style="display:none">
                                                        <?=($row_detail["thongtin_$lang"]!='') ? htmlspecialchars_decode($row_detail["thongtin_$lang"]) : '<p class="t-center">Nội dung đang được cập nhật....</p>'?>
                                            </div>
                                            */ ?>
                                            <div class="tab--product--content" id="tabs3" style="display:none">
                                                <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>"
                                                    data-width="100%" data-numposts="5"></div>
                                            </div>
                                        </div>

                                        <?php } else { ?>
                                        <div class="title-content font-weight-bold">
                                            CHI TIẾT SẢN PHẨM
                                        </div>

                                        <div class="box-detail-content p-relative">

                                            <div class="wrapper-toc">

                                                <div class="content ul-list-detail view-desc-detail">

                                                    <?= ($row_detail["noidung_$lang"] != '') ? htmlspecialchars_decode($row_detail["noidung_$lang"]) : '<p class="t-center">Nội dung đang được cập nhật....</p>' ?>

                                                    <?php if ($row_detail["noidung_$lang"] != '') { ?>

                                                    <div class="mt10">
                                                        <?php include_once _source . 'shareLinks.php' ?>
                                                    </div>

                                                    <?php } ?>

                                                </div>

                                            </div>

                                        </div>
                                        <?php } ?>



                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

    </div>

    <?php include _layouts . 'right.php';  ?>

    </div>

    </form>

    </div>

</section>
<section id="contract-home" style="background-image: url('assets/images/Rectangle\ 5636.png');">
    <div class="bg">
        <div class="width d-flex justify-content-between">
            <div class="form-contract">
                <h2 class="t-center">ĐĂNG KÝ NHẬN TƯ VẤN MIỄN PHÍ</h2>
                <div class="center">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                        have
                        suffered alteration</p>
                </div>
                <form method="post" id="frm_booking" name="frm_booking" action="">
                    <div class="row justify-content-center">
                        <div class="col-5 mr20">
                            <div class="form-group d-flex">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <g clip-path="url(#clip0_0_265)">
                                            <path
                                                d="M10.4721 11.1074C11.8624 11.1074 13.0663 10.6087 14.0499 9.62492C15.0336 8.64128 15.5322 7.43773 15.5322 6.04729C15.5322 4.65734 15.0336 3.45363 14.0498 2.46967C13.066 1.48618 11.8623 0.987549 10.4721 0.987549C9.08171 0.987549 7.87815 1.48618 6.89451 2.46983C5.91086 3.45347 5.41206 4.65718 5.41206 6.04729C5.41206 7.43773 5.91086 8.64144 6.89467 9.62508C7.87847 10.6086 9.08219 11.1074 10.4721 11.1074Z"
                                                fill="#00ADF3" />
                                            <path
                                                d="M19.3259 17.1418C19.2976 16.7324 19.2402 16.2859 19.1557 15.8143C19.0704 15.3393 18.9606 14.8902 18.8292 14.4797C18.6935 14.0554 18.5088 13.6364 18.2806 13.2349C18.0437 12.8182 17.7654 12.4553 17.4532 12.1567C17.1267 11.8443 16.727 11.5932 16.2647 11.41C15.8041 11.2277 15.2936 11.1354 14.7475 11.1354C14.533 11.1354 14.3256 11.2234 13.9251 11.4842C13.6786 11.6449 13.3902 11.8309 13.0684 12.0365C12.7932 12.2119 12.4204 12.3761 11.9599 12.5249C11.5106 12.6703 11.0544 12.744 10.6042 12.744C10.154 12.744 9.69799 12.6703 9.24824 12.5249C8.78823 12.3763 8.41541 12.212 8.14053 12.0367C7.82173 11.833 7.53323 11.647 7.28303 11.484C6.88296 11.2232 6.6754 11.1353 6.46094 11.1353C5.9147 11.1353 5.40437 11.2277 4.94388 11.4101C4.48195 11.593 4.08205 11.8442 3.75523 12.1569C3.44316 12.4556 3.16476 12.8184 2.92818 13.2349C2.7001 13.6364 2.51546 14.0552 2.37954 14.4798C2.24827 14.8903 2.13847 15.3393 2.0532 15.8143C1.96874 16.2852 1.91136 16.7319 1.88299 17.1423C1.8551 17.5442 1.84099 17.9615 1.84099 18.3828C1.84099 19.4795 2.1896 20.3673 2.87705 21.022C3.556 21.6681 4.45438 21.9959 5.54686 21.9959H15.6625C16.755 21.9959 17.6531 21.6683 18.3322 21.022C19.0198 20.3677 19.3684 19.4798 19.3684 18.3827C19.3682 17.9594 19.354 17.5418 19.3259 17.1418Z"
                                                fill="#00ADF3" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_0_265">
                                                <rect x="0.117676" y="0.987793" width="21.0084" height="21.0084"
                                                    fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg></div>
                                <input type="text" name="hoten" type="text" class="input" id="hoten" size="50" value=""
                                    placeholder="Vui lòng nhập họ và tên...." fdprocessedid="lxt19n">
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M19.3473 15.0267C18.7407 15.0123 17.9771 14.9766 17.4947 14.8919C16.9728 14.7995 16.345 14.6204 15.903 14.4827C15.5564 14.3748 15.1789 14.4702 14.9218 14.7263C13.6517 15.989 11.6652 16.328 10.2758 15.1978C9.86742 14.8656 9.48722 14.5193 9.13009 14.1601C8.77106 13.8031 8.42489 13.4231 8.09282 13.0149C6.96226 11.6252 7.30114 9.63819 8.56392 8.36739C8.82004 8.1103 8.91537 7.73285 8.80753 7.38621C8.6708 6.94521 8.49074 6.31741 8.39926 5.79553C8.31357 5.31312 8.2789 4.54955 8.2635 3.94294C8.25098 3.41816 7.82346 3.0022 7.29869 3.0022H3.91896C3.49722 3.0022 2.95607 3.31802 2.95607 3.96508C2.95607 8.33562 4.72778 12.5097 7.73776 15.5524C10.7805 18.5624 14.9546 20.3341 19.3251 20.3341C19.9722 20.3341 20.288 19.793 20.288 19.3712V15.9915C20.288 15.4667 19.872 15.0392 19.3473 15.0267Z"
                                            fill="#00ADF3" />
                                    </svg></div>
                                <input name="dienthoai" type="text" class="input" id="dienthoai" size="50" value=""
                                    placeholder="Vui lòng nhập số điện thoại..." fdprocessedid="6nv17g">
                            </div>
                            <div class="form-group d-flex">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 26 26" fill="none">
                                        <path
                                            d="M4.21849 4.4917C3.51891 4.4917 2.90206 4.83527 2.52181 5.36363C2.26551 5.71867 2.37874 6.22194 2.74954 6.45303L11.9735 12.2016C12.3706 12.4495 12.8731 12.4495 13.2702 12.2016L22.4552 6.40379C22.8407 6.16009 22.9368 5.63045 22.6521 5.27541C22.2687 4.79852 21.6838 4.4917 21.0252 4.4917H4.21849ZM22.6173 8.78365C22.5294 8.78462 22.4402 8.80883 22.3567 8.86161L13.2702 14.5917C12.8731 14.8386 12.3706 14.8376 11.9735 14.5897L2.88494 8.92726C2.55091 8.71928 2.11765 8.96009 2.11765 9.354V19.1976C2.11765 20.3583 3.05777 21.2984 4.21849 21.2984H21.0252C22.1859 21.2984 23.126 20.3583 23.126 19.1976V9.28629C23.126 8.99007 22.8808 8.78075 22.6173 8.78365Z"
                                            fill="#00ADF3" />
                                    </svg></div>
                                <input name="email" type="text" class="input" id="email" size="50" value=""
                                    placeholder="Vui lòng nhập địa chỉ email..." fdprocessedid="kyngh">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group textarea">
                                <textarea name="product" value="" placeholder="Tên sản phẩm..." fdprocessedid="my876"
                                    rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                    <div style="    padding-left: 37px;">
                        <button type="button" class="res--btn--booking js--booking center" fdprocessedid="40qu7q"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19"
                                fill="none">
                                <g clip-path="url(#clip0_0_271)">
                                    <path
                                        d="M17.5813 9.89927V17.0421H2.45529V2.75642H10.0183V0.970703H0.564537V18.8278H19.4721V9.89927H17.5813Z"
                                        fill="white" />
                                    <path
                                        d="M11.9097 0.970703L14.6324 3.54213L9.27272 8.60404L11.3904 10.604L16.75 5.54213L19.4727 8.11356V0.970703H11.9097Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_0_271">
                                        <rect width="18.9076" height="17.8571" fill="white"
                                            transform="translate(0.571442 0.970703)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            ĐĂNG KÝ NGAY</buttontype=>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- <?php if (count($tintuc) > 0) { ?>

<section class="wrapper-related-detail">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="wrapper-related-detail__bg">

                    <div class="title-other mb20">

                        <div class="title title--titleproduct p-relative"><span>SẢN PHẨM LIÊN QUAN</span> <a
                                href="<?= $com ?>" title="Xem thêm" aria-label="Xem thêm" role="link" rel="dofollow">Xem
                                Thêm <i class="fa-light fa-chevron-right"></i></a></div>

                    </div>

                    <div class="owl-carousel owl-theme" id="owl--related">

                        <?= $layouts->getLayoutProduct($tintuc, 'h3', 'box') ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php } ?> -->
<script>
$(document).ready(function() {

    $(".glightbox").on('click', function(e) {
        e.preventDefault();
        $(this).lightGallery({
            dynamic: true,
            dynamicEl: [{
                    src: "<?= _upload_baiviet_l . $row_detail['photo'] ?>",
                    thumb: "<?= _upload_baiviet_l . $row_detail['photo'] ?>"
                },
                <?php foreach ($photos as $k => $v2) { ?> {
                    src: "<?= _upload_baiviet_l . $v2["photo"] ?>",
                    thumb: "<?= _upload_baiviet_l . $v2["photo"] ?>"
                },
                <?php } ?>

            ],
            download: false,
            mode: 'lg-fade',
        })
    }); //click
}); //ready
</script>

<style>
#detail-product {
    background: #fff;
}

#contract-home .form-contract {
    width: 100%;
    height: auto;
    padding: 76px 32px;
}

#contract-home .form-contract .form-group {
    margin-bottom: 18px;
}
</style>