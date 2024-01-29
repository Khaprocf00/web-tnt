<?php

    $slider=$db->rawQuery("select ten_$lang as ten,photo_$lang photo,link,mota_$lang as mota from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider'));

?>

<section class="<?php if($deviceType == 'computer') echo 'mb15';?>">

    <div class="grid wide">

        <div class="row3">

            <div class="col3 l-3 m-3 c-12 d-none-m d-none-tablet">

                <div>

                    <ul class="wrap-menu__slider p-relative">

                        <?php foreach($list_c1_slider as $k1 => $v1) {
                            $list_c2_menu = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and type=? and id_list=? order by stt asc",array('san-pham', $v1['id']));
                            ?>

                        <li>

                            <div class="js-droptabdetail">

                                <?php /* if(in_array($template,explode(',',$row_setting['seo']))){?>
                                <h3 class="mg0 c1">
                                    <?php }  */ ?>

                                    <span>
                                        <img src="<?=_upload_baiviet_l.$v1["icon"]?>" alt="<?=$v1["ten"]?>">
                                    </span>

                                    <a class="list-c1" href="<?=$v1["type"]?>/<?=$v1["tenkhongdau"]?>"
                                        title="<?=$v1["ten"]?>"><?=$v1["ten"]?></a>

                                    <?php if($list_c2_menu) { ?> <i class=" fa-regular fa-angle-down"></i> <?php }?>

                                    <?php /* if(in_array($template,explode(',',$row_setting['seo']))){?>
                                </h3>
                                <?php } */?>

                            </div>

                            <?php if($list_c2_menu) { ?>

                            <ul class="ul-c2 mt5">

                                <?php foreach($list_c2_menu as $k2 => $v2) { 
                                        $list_c3_menu = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_item where hienthi=1 and type=? and id_list=? and id_cat=? order by stt asc",array('san-pham', $v1['id'], $v2['id']));

                                        ?>

                                <li>

                                    <div class="js-droptabdetail2">

                                        <?php /* if(in_array($template,explode(',',$row_setting['seo']))){?>
                                        <h4 class="mg0 c2">
                                            <?php } */ ?>

                                            <a class="list-c2" href="<?=$v2["type"]?>/<?=$v2["tenkhongdau"]?>"
                                                title="<?=$v2["ten"]?>"><?=$v2["ten"]?></a>

                                            <?php if($list_c3_menu) { ?> <span> <i class="fa-regular fa-angle-down"></i>
                                            </span><?php }?>

                                            <?php /* if(in_array($template,explode(',',$row_setting['seo']))){?>
                                        </h4>
                                        <?php } */?>

                                    </div>

                                    <ul class="ul-c3 mt5">

                                        <?php foreach($list_c3_menu as $k3 => $v3) { ?>

                                        <li>

                                            <?php /* if(in_array($template,explode(',',$row_setting['seo']))){?>
                                            <h5 class="mg0 c3">
                                                <?php } */ ?>

                                                <a class="list-c3" href="<?=$v3["type"]?>/<?=$v3["tenkhongdau"]?>"
                                                    title="<?=$v3["ten"]?>"><?=$v3["ten"]?></a>

                                                <?php /* if(in_array($template,explode(',',$row_setting['seo']))){?>
                                            </h5>
                                            <?php } */ ?>

                                        </li>

                                        <?php }?>

                                    </ul>

                                </li>

                                <?php }?>

                            </ul>

                            <?php }?>

                        </li>

                        <?php }?>

                    </ul>

                </div>

            </div>

            <div class="col3 l-6 m-12 c-12">

                <section id="slider-top" class="clearfix p-relative">

                    <?php if($row_setting["slider_web"]==1){ ?>

                    <section class="slider-videoupload p-relative">

                        <div class="full-slider__video-overflow" id="video__slider">

                            <video width="100%" height="549" playsinline class="video-slider__index" autoplay muted
                                controls loop>

                                <source src="<?=_upload_hinhanh_l.$row_setting["photo"]?>" type="video/mp4">

                            </video>

                        </div>

                    </section>

                    <?php }else{ ?>

                    <div id="sync1">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($slider as $k => $v){ ?>
                            <div class="res--item--slider p-relative">
                                <div class="res--bg--slider"
                                    style="background-image:url('<?=_upload_hinhanh_l.$v['photo']?>')"></div>
                                <a href="<?=$v['link']?>" title="<?=$v['ten']?>"></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div id="sync2">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($slider as $k => $v){ ?>
                            <div class="res--item--related line-3">
                                <span><?=htmlspecialchars_decode($v["mota"])?></span>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <?php /*
                        <div class="maxSlider">

                            <div class="box-slider">

                                <div class="slider-left1">

                                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:715px;height:385px;overflow:hidden;visibility:hidden;">    

                                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:733px;height:415px;overflow:hidden;">
                                            
                                        <?php foreach ($slider as $k => $v){ $stt++; ?>

                    <div data-idle="3000">

                        <a href="<?=$v['link']?>" title="<?=$v['ten']?>" rel="nofollow" target="_blank" role="link"
                            class="ratio-img d-block" img-width="715" img-height="385"><img width="715" height="385"
                                class="ratio-img__content img-scale" data-u="image" src="<?=$imgDefault?>"
                                data-src="<?=_upload_hinhanh_l.$v['photo']?>" alt="<?=$v['ten']?>"
                                <?=$func->errorImg()?> /></a>

                    </div>

                    <?php }?>

            </div>

            <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:16px;right:16px;"
                data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:14px;height:14px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                    </svg>
                </div>
            </div>

            <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;"
                data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                    <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                    <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;"
                data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                    <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                    <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                </svg>
            </div>
        </div>

    </div>

    </div>

    <script>
    $(function() {

        jssor_1_slider_init();

    });
    </script>
    */ ?>
    <?php }?>

</section>

</div>

<div class="col3 l-3 m-12 c-12 <?php if($deviceType != 'computer') echo 'mt20'; ?> d-none-m">
    <div class="section-banner">
        <?php foreach($banner as $k => $v) { ?>
        <div class="section-banner__images mb5">
            <span class="d-block hover-left ratio-cover ratio-img" img-width="285" img-height="155">
                <a href="<?=$v['link']?>" title="<?=$v['ten']?>">
                    <img class="ratio-img__content img-scale" width="285" height="155" target="_blank"
                        data-src="<?=_upload_hinhanh_l.$v["photo"]?>" src="<?=$imgDefault?>" alt="<?=$v["ten"]?>">
                </a>
            </span>
        </div>
        <?php }?>
    </div>
</div>
</div>

</div>

</section>