<?php

    $doitacs=$db->rawQuery("select ten_$lang as ten,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('doi-tac'));

    $albums = $func->AllData("id,photo,",'album','',' limit 20','array');

?>
<?php if($doitacs){?>
<section class="res--partner pt30 pb30" style="background-color:#F2F4F9">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12 m-12 c-12 t-center">
                <div class="section-why__title <?php if($deviceType=="computer"){ ?> fadeInDown wow <?php }?>"
                    data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">
                    ĐỐI TÁC KHÁCH HÀNG
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
                <div id="scroller">
                    <?php foreach($doitacs as $k => $v){?>
                    <a href="<?=$v["link"]?>" title="<?=$v["ten"]?>">
                        <img class="bg-white" style="border-radius:4px;margin-right:10px" src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="<?=$v["ten"]?>" />
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if($albums){?>
<section class="res--album pt30">
    <div class="owl-carousel owl-theme res--owl--partner fix--nav--slider" data-height="640" data-nav="1" data-loop="1"
        data-play="1" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-dot="0"
        data-margin='0' data-delay="<?=$row_setting["time_slider"]?>">
        <?php foreach($albums as $k => $v){
            $albums_detail = $db->rawQuery("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array('album',$v['id']));
        ?>
        <div class="box">
            <div class="res--item__album res--thumb--scale o-hidden">
                <a href="javascript:void(0)" title="<?=$v["ten"]?>" class="cubic-img glightbox<?=$v["id"]?>">
                    <img width="190" height="190" src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                        <?=$func->errorImg()?> />
                </a>

            </div>
            <script>
            $(document).ready(function() {
                $(".glightbox<?=$v["id"]?>").on('click', function(e) {
                    e.preventDefault();
                    $(this).lightGallery({
                        dynamic: true,
                        dynamicEl: [{
                                src: "<?=_upload_baiviet_l.$v['photo']?>",
                                thumb: "<?=_upload_baiviet_l.$v['photo']?>"
                            },
                            <?php foreach($albums_detail as $k => $v2){?> {
                                src: "<?=_upload_baiviet_l.$v2["photo"]?>",
                                thumb: "<?=_upload_baiviet_l.$v2["photo"]?>"
                            },
                            <?php } ?>

                        ],
                        download: false,
                        mode: 'lg-fade'
                    });
                });
            });
            </script>
        </div>

        <?php } ?>
    </div>
</section>
<?php } ?>