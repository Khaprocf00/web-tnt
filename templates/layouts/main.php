<?php 

    $list_main = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,banner,icon,type from #_baiviet_list where hienthi=1 and menu<>0 and type in('san-pham','qua-tang') order by stt asc,id desc");

    $products_index=$db->rawQuery("select id,id_list,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,giaban,type from #_baiviet where hienthi=1 and top_nb<>0 and type in('san-pham','qua-tang') order by stt asc,id desc limit 30");

    $quytrinhs=$db->rawQuery("select id,ten_$lang as ten,mota_$lang as mota,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",['quy-trinh']);

    $blogs=$db->rawQuery("select id,id_tacgia,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and type=? and noibat<>0 order by stt asc,id desc limit 12",['blogs']);

    $des_process = $func->OneDataDes('desc-process',"array");

    $des_chungnhan = $func->OneDataDes('desc-chungnhan',"array");

    $bg_product = $func->OneDataPhoto("",'bg-product','limit 0,1',"array");

    $bg_proccess = $func->OneDataPhoto("",'bg_proccess','limit 0,1',"array");

    $logo_process = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo-process'));

    $chungnhans=$db->rawQuery("select ten_$lang as ten,photo_$lang photo from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('chung-nhan'));

?>
<section class="section--product_month pt50 pb50" <?=$func->getBackground($bg_product)?>>
    <div class="grid wide">
        <div class="row">
            <div class="col l-12 c-12 m-12">
                <div class="d-flex align-items-end justify-content-between">
                    <div class="res--title__modifier">
                        <a href="javascript:void(0)" title="<?=$row_setting["title_page"]?>"
                            aria-lable="<?=$row_setting["title_page"]?>" role="link"
                            rel="dofollow"><?=$row_setting["title_page"]?></a>
                    </div>
                    <div class="res--link__modifier"></div>
                </div>
                <div class="res--box--product__modifier mt30">
                    <div class="owl-carousel owl-theme" id="owl--product--month">
                        <?php foreach($products_index as $k => $v){
                            $list_icon=$func->getListOne("ten_$lang as ten,icon",$v['id_list']);
                        ?>
                        <div class="box">
                            <div class="res--item__modifier bg-white">
                                <div class="res--thumb__product o-hidden res--thumb--scale">
                                    <?=$func->getHrefImg($v);?>
                                    <div class="res--line__product"></div>
                                    <div class="res--mask--product__modifier d-flex align-items-center gap15">
                                        <div class="res--mask--icon__modifier">
                                            <img width="20" height="20" src="<?=_upload_baiviet_l.$list_icon["icon"]?>"
                                                alt="<?=$list_icon["ten"]?>" />
                                        </div>
                                        <div class="res--mask--more__modifier">
                                            <a class="d-flex align-items-center justify-content-center gap10"
                                                href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten"]?>"
                                                aria-lable="<?=$v["ten"]?>" role="link" rel="dofollow">
                                                <span>Xem chi tiết mẫu</span>
                                                <span class="d-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8"
                                                        viewBox="0 0 12 8" fill="none">
                                                        <g clip-path="url(#clip0_129_18)">
                                                            <path
                                                                d="M5.32475 3.3942L2.17688 0.247376C2.03876 0.109599 1.81497 0.109599 1.67649 0.247376C1.53837 0.385154 1.53837 0.60894 1.67649 0.746718L4.57468 3.64385L1.67684 6.54099C1.53872 6.67877 1.53872 6.90255 1.67684 7.04068C1.81497 7.17846 2.0391 7.17846 2.17723 7.04068L5.3251 3.89386C5.46113 3.75751 5.46113 3.5302 5.32475 3.3942Z"
                                                                fill="white" />
                                                        </g>
                                                        <g clip-path="url(#clip1_129_18)">
                                                            <path
                                                                d="M10.3247 3.3942L7.17688 0.247376C7.03876 0.109599 6.81497 0.109599 6.67649 0.247376C6.53837 0.385154 6.53837 0.60894 6.67649 0.746718L9.57468 3.64385L6.67684 6.54099C6.53872 6.67877 6.53872 6.90255 6.67684 7.04068C6.81497 7.17846 7.0391 7.17846 7.17723 7.04068L10.3251 3.89386C10.4611 3.75751 10.4611 3.5302 10.3247 3.3942Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_129_18">
                                                                <rect width="7" height="7" fill="white"
                                                                    transform="translate(0 0.144043)" />
                                                            </clipPath>
                                                            <clipPath id="clip1_129_18">
                                                                <rect width="7" height="7" fill="white"
                                                                    transform="translate(5 0.144043)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="res--desc__product pd10">
                                    <div class="res--name__product pb5 t-center">
                                        <?=$func->getHrefHeading($v,'h5')?>
                                    </div>
                                    <div class="res--popup__modifier pt15 mb10">
                                        <a class="d-flex align-items-center justify-content-center gap10 js--popup"
                                            href="javascript:void(0)" data-id="<?=$v["id"]?>" data-package="<?=$v["ten"]?>" title="<?=$v["ten"]?>" aria-lable="<?=$v["ten"]?>"
                                            role="link" rel="dofollow">
                                            <span class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                    height="13" viewBox="0 0 14 13" fill="none">
                                                    <g clip-path="url(#clip0_0_298)">
                                                        <path
                                                            d="M12.2381 6.31336V11.1947H1.66181V1.43201H6.94995V0.21167H0.339777V12.4151H13.5601V6.31336H12.2381Z"
                                                            fill="white" />
                                                        <path
                                                            d="M8.27117 0.21167L10.1749 1.96896L6.42737 5.42821L7.90805 6.79499L11.6556 3.33574L13.5593 5.09303V0.21167H8.27117Z"
                                                            fill="white" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_0_298">
                                                            <rect width="13.2203" height="12.2034" fill="white"
                                                                transform="translate(0.337891 0.211914)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>Nhận báo giá</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--advs">
    <div class="thumb">
        <a href="<?=$quangcao["link"]?>" title="<?=$row_setting["name_$lang"]?>">
            <img style="width:100%" src="<?=_upload_hinhanh_l.$quangcao["photo"]?>"
                alt="<?=$row_setting["name_$lang"]?>" />
        </a>
    </div>
</section>
<?php include _layouts."catalogue.php";?>
<section class="res--about--us pt40 pb40">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <div class="res--title--about t-center">
                    <span><?=$about["slogan1"]?></span>
                </div>
                <div class="res--name--about--us t-center mt20 mb30">
                    <span><?=$about["ten"]?></span>
                </div>
                <div class="res--desc--about l-10 m-12 c-12 mg-auto">
                    <?=htmlspecialchars_decode($about["mota"])?>
                </div>
                <div class="res--video--youtube mt30">
                    <div class="res--image--video--youtube"
                        style="background-image:url(<?=_upload_hinhanh_l.$about["photo"]?>)">
                        <div class="res--btn--youtube">
                            <a class="js--youtube" href="<?=$row_setting["linksyoutube"]?>" data-fancybox="videos" title="">
                                <img src="assets/images/svg/btn-youtube.svg" alt="icon youtube" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if($deviceType != 'computer') {?>
<section class="section-why pt50 pb100">
    <div class="grid wide">
        <div class="row align-items-center">
            <div class="col l-12 m-12 c-12 t-center mb75 mb-m-20">
                <div class="section-why__title">
                    <?=$des_process["ten"]?>
                </div>
                <div class="section-why__des">
                    <?=htmlspecialchars_decode($des_process["mota"])?>
                </div>
            </div>
            <div class="col l-12 m-12 c-12">
                <div class="section-why__m">
                    <?php foreach($quytrinhs as $k => $v) { ?>
                    <div class="section-why__m-box">
                        <div class="section-why__m-images">
                            <span class="d-block ratio-img" img-width="65" img-height="65">
                                <img loading="lazy" class="ratio-img__content img-scale" src="<?=$imgDefault?>"
                                    data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v['ten']?>" width="65"
                                    height="65">
                            </span>
                        </div>
                        <div class="section-why__m-detail t-center">
                            <div class="title line-2">
                                <?=$v["ten"]?>
                            </div>
                            <div class="detail line-3">
                                <?=htmlspecialchars_decode($v["mota"])?>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }else{ ?>
<section class="section-why padding--why pt50 pb100" <?=$func->getBackground($bg_proccess)?>>
    <div class="grid wide">
        <div class="row align-items-center">
            <div class="col l-12 m-12 c-12 t-center mb75">
                <div class="section-why__title <?php if($deviceType=="computer"){ ?> fadeInDown wow <?php }?>"
                    data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">
                    <?=$des_process["ten"]?>
                </div>
                <div class="res--icon--page mb20">
                    <span class="d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="154" height="20" viewBox="0 0 154 20"
                            fill="none">
                            <rect y="8" width="59" height="3" rx="1.5" fill="url(#paint0_linear_96_2)" />
                            <rect x="95" y="8" width="59" height="3" rx="1.5" fill="url(#paint1_linear_96_2)" />
                            <g clip-path="url(#clip0_96_2)">
                                <path
                                    d="M72.3125 11.7188C72.8518 11.7188 73.2891 11.2815 73.2891 10.7422C73.2891 10.2028 72.8518 9.76562 72.3125 9.76562C71.7732 9.76562 71.3359 10.2028 71.3359 10.7422C71.3359 11.2815 71.7732 11.7188 72.3125 11.7188Z"
                                    fill="url(#paint2_linear_96_2)" />
                                <path d="M80.3203 8.27002V13.7053L86.9609 16.1956V9.93018L80.3203 8.27002Z"
                                    fill="url(#paint3_linear_96_2)" />
                                <path
                                    d="M77.5859 8.33686V12.2739C77.5859 12.5181 77.7375 12.7367 77.9661 12.8225L79.1484 13.2658V7.97702L78.314 7.76838C77.9442 7.67596 77.5859 7.95565 77.5859 8.33686Z"
                                    fill="url(#paint4_linear_96_2)" />
                                <path
                                    d="M77.5547 13.9197C76.8686 13.6624 76.4141 13.0066 76.4141 12.2738V8.33687C76.4141 7.19328 77.4888 6.35418 78.5982 6.63156L86.9471 8.71875C86.8257 6.44461 85.8826 4.32363 84.26 2.70098C82.5182 0.959218 80.2024 0 77.7392 0C74.0854 0 70.4859 0.973125 67.3298 2.81418C67.1728 2.90574 67.0672 3.06492 67.0439 3.24512C67.0206 3.42531 67.0822 3.60613 67.2107 3.73461L68.4627 4.98664C67.53 6.7659 67.0391 8.75445 67.0391 10.7665V12.7356C67.0391 14.4008 68.1604 15.8721 69.766 16.3137L82.7363 19.8805C83.0247 19.9598 83.3226 20 83.6217 20C85.2037 20 86.5313 18.8938 86.8741 17.4145L77.5547 13.9197ZM72.3125 12.8906C71.1279 12.8906 70.1641 11.9268 70.1641 10.7422C70.1641 9.55754 71.1279 8.59375 72.3125 8.59375C73.4972 8.59375 74.4609 9.55754 74.4609 10.7422C74.4609 11.9268 73.4972 12.8906 72.3125 12.8906Z"
                                    fill="url(#paint5_linear_96_2)" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_96_2" x1="29.5" y1="8" x2="29.5" y2="11"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_96_2" x1="124.5" y1="8" x2="124.5" y2="11"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_96_2" x1="72.3125" y1="9.76562" x2="72.3125"
                                    y2="11.7188" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_96_2" x1="83.6406" y1="8.27002" x2="83.6406"
                                    y2="16.1956" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <linearGradient id="paint4_linear_96_2" x1="78.3672" y1="7.75061" x2="78.3672"
                                    y2="13.2658" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <linearGradient id="paint5_linear_96_2" x1="76.9931" y1="0" x2="76.9931" y2="20"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <clipPath id="clip0_96_2">
                                    <rect width="20" height="20" fill="white" transform="translate(67)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                </div>
                <div class="section-why__des <?php if($deviceType=="computer"){ ?> fadeInUp wow <?php }?>"
                    data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">
                    <?=htmlspecialchars_decode($des_process["mota"])?>
                </div>
            </div>
            <div class="col l-3 m-4 c-12">
                <div class="section-why__left p-relative">
                    <?php foreach($quytrinhs as $k => $v) { 
                        if($k % 2 == 0){
                        ?>
                    <div class="section-why__left-left l<?=$k?> t-end <?php if($deviceType=="computer"){ ?> bounceInLeft wow <?php }?>"
                        data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">
                        <div class="title line-2">
                            <?=$v["ten"]?>
                        </div>
                        <div class="detail line-3">
                            <?=htmlspecialchars_decode($v["mota"])?>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
            <div class="col l-6 m-4 c-12">
                <div class="section-why__between p-relative">
                    <?php foreach($quytrinhs as $k => $v) { ?>
                    <div class="section-why__between-images-<?=$k++?> p-absolute section-why__between-img <?php if($deviceType=="computer"){ ?> fadeInUp wow <?php }?>"
                        data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">
                        <div class="section-why__between-circle p-relative">
                            <span class="d-block ratio-img" img-width="65" img-height="65">
                                <img loading="lazy" class="ratio-img__content img-scale" src="<?=$imgDefault?>"
                                    data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v['ten']?>" width="65"
                                    height="65">
                            </span>
                        </div>
                    </div>
                    <?php }?>
                    <div class="section-why__between-logo p-absolute">
                        <span class="d-block hover-left ratio-img" img-width="180" img-height="160">
                            <img loading="lazy" class="ratio-img__content img-scale" src="<?=$imgDefault?>"
                                data-src="<?=_upload_hinhanh_l.$logo_process["photo"]?>"
                                alt="<?=$row_setting["name_$lang"]?>" width="180" height="160">
                        </span>
                    </div>
                </div>
            </div>
            <div class="col l-3 m-4 c-12">
                <div class="section-why__left p-relative">
                    <?php foreach($quytrinhs as $k => $v) { 
                        if($k % 2 == 1){
                        ?>
                    <div class="section-why__left-left r<?=$k?> <?php if($deviceType=="computer"){ ?> bounceInRight wow <?php }?>"
                        data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">
                        <div class="title line-2">
                            <?=$v["ten"]?>
                        </div>
                        <div class="detail line-3">
                            <?=htmlspecialchars_decode($v["mota"])?>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>
<?php if($chungnhans){?>
<section class="section-ceft pt40 pb40">
    <div class="grid wide">
        <div class="row align-items-center">
            <div class="col l-12 m-12 c-12 t-center">
                <div class="section-why__title <?php if($deviceType=="computer"){ ?> fadeInDown wow <?php }?>"
                    data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">
                    <?=$des_chungnhan["ten"]?>
                </div>
                <div class="res--icon--page mb20">
                    <span class="d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="154" height="20" viewBox="0 0 154 20"
                            fill="none">
                            <rect y="8" width="59" height="3" rx="1.5" fill="url(#paint0_linear_96_2)" />
                            <rect x="95" y="8" width="59" height="3" rx="1.5" fill="url(#paint1_linear_96_2)" />
                            <g clip-path="url(#clip0_96_2)">
                                <path
                                    d="M72.3125 11.7188C72.8518 11.7188 73.2891 11.2815 73.2891 10.7422C73.2891 10.2028 72.8518 9.76562 72.3125 9.76562C71.7732 9.76562 71.3359 10.2028 71.3359 10.7422C71.3359 11.2815 71.7732 11.7188 72.3125 11.7188Z"
                                    fill="url(#paint2_linear_96_2)" />
                                <path d="M80.3203 8.27002V13.7053L86.9609 16.1956V9.93018L80.3203 8.27002Z"
                                    fill="url(#paint3_linear_96_2)" />
                                <path
                                    d="M77.5859 8.33686V12.2739C77.5859 12.5181 77.7375 12.7367 77.9661 12.8225L79.1484 13.2658V7.97702L78.314 7.76838C77.9442 7.67596 77.5859 7.95565 77.5859 8.33686Z"
                                    fill="url(#paint4_linear_96_2)" />
                                <path
                                    d="M77.5547 13.9197C76.8686 13.6624 76.4141 13.0066 76.4141 12.2738V8.33687C76.4141 7.19328 77.4888 6.35418 78.5982 6.63156L86.9471 8.71875C86.8257 6.44461 85.8826 4.32363 84.26 2.70098C82.5182 0.959218 80.2024 0 77.7392 0C74.0854 0 70.4859 0.973125 67.3298 2.81418C67.1728 2.90574 67.0672 3.06492 67.0439 3.24512C67.0206 3.42531 67.0822 3.60613 67.2107 3.73461L68.4627 4.98664C67.53 6.7659 67.0391 8.75445 67.0391 10.7665V12.7356C67.0391 14.4008 68.1604 15.8721 69.766 16.3137L82.7363 19.8805C83.0247 19.9598 83.3226 20 83.6217 20C85.2037 20 86.5313 18.8938 86.8741 17.4145L77.5547 13.9197ZM72.3125 12.8906C71.1279 12.8906 70.1641 11.9268 70.1641 10.7422C70.1641 9.55754 71.1279 8.59375 72.3125 8.59375C73.4972 8.59375 74.4609 9.55754 74.4609 10.7422C74.4609 11.9268 73.4972 12.8906 72.3125 12.8906Z"
                                    fill="url(#paint5_linear_96_2)" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_96_2" x1="29.5" y1="8" x2="29.5" y2="11"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_96_2" x1="124.5" y1="8" x2="124.5" y2="11"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_96_2" x1="72.3125" y1="9.76562" x2="72.3125"
                                    y2="11.7188" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_96_2" x1="83.6406" y1="8.27002" x2="83.6406"
                                    y2="16.1956" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <linearGradient id="paint4_linear_96_2" x1="78.3672" y1="7.75061" x2="78.3672"
                                    y2="13.2658" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <linearGradient id="paint5_linear_96_2" x1="76.9931" y1="0" x2="76.9931" y2="20"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2973BC" />
                                    <stop offset="1" stop-color="#33B3FD" />
                                </linearGradient>
                                <clipPath id="clip0_96_2">
                                    <rect width="20" height="20" fill="white" transform="translate(67)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                </div>
                <div class="section-why__des <?php if($deviceType=="computer"){ ?> fadeInUp wow <?php }?>"
                    data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">
                    <?=htmlspecialchars_decode($des_chungnhan["mota"])?>
                </div>
                <div class="res--box--photos__ceft mt40">
                    <div class="owl-carousel owl-theme" id="owl-cert">
                        <?php foreach($chungnhans as $k => $v){?>
                        <div class="box">
                            <div class="res--item__cert">
                                <a href="javascript:void(0)" class="glightbox" title="<?=$v["ten"]?>">
                                    <img src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="<?=$v["ten"]?>" />
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function() {

    $(".glightbox").on('click', function(e) {
        e.preventDefault();
        $(this).lightGallery({
            dynamic: true,
            dynamicEl: [
                <?php foreach($chungnhans as $k => $v2){?> {
                    src: "<?=_upload_hinhanh_l.$v2["photo"]?>",
                    thumb: "<?=_upload_hinhanh_l.$v2["photo"]?>"
                },
                <?php } ?>

            ],
            download: false,
            mode: 'lg-fade',
        })
    }); //click
}); //ready
</script>
<?php } ?>