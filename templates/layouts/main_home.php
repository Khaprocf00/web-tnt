<?php

$list_main = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,banner,icon,type from #_baiviet_list where hienthi=1 and menu<>0 and type in('san-pham','mau-nha-dep') order by stt asc,id desc");

$product_serivce = $db->rawQuery("select id,id_list,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,giaban,type from #_baiviet where hienthi=1 and top_nb<>0 and type in('dich-vu') order by stt asc,id desc limit 4");

$product_house = $db->rawQuery("select id,id_list,ten_$lang as ten,mota_$lang as mota,tenkhongdau_$lang as tenkhongdau,photo,giaban,type from #_baiviet where hienthi=1 and top_nb<>1 and type=? order by stt asc,id desc limit 11", array('mau-nha-dep'));

$five_reason = $db->rawQuery("select id,id_list,stt,mota_$lang as mota,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,giaban,type from #_baiviet where hienthi=1  and type=? order by stt asc,id desc limit 5", array('5-ly-do'));

$question = $db->rawQuery("select id,id_list,stt,noidung_$lang as noidung,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,giaban,type from #_baiviet where hienthi=1  and type=? order by stt asc,id desc ", array('cau-hoi'));

$blogs = $db->rawQuery("select id,id_tacgia,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and type=? and noibat<>0 order by stt asc,id desc limit 3", ['blogs']);

$project[] = $db->rawQuery("select id,id_tacgia,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and noibat<>0 and type=? and id_list=17  order by stt asc,id desc limit 0,3", ['du-an']);
$project[] = $db->rawQuery("select id,id_tacgia,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and noibat<>0 and type=? and id_list=17  order by stt asc,id desc limit 3,3", ['du-an']);
$project[] = $db->rawQuery("select id,id_tacgia,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and noibat<>0 and type=? and id_list=17  order by stt asc,id desc limit 6,3", ['du-an']);
$project[] = $db->rawQuery("select id,id_tacgia,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and noibat<>0 and type=? and id_list=17  order by stt asc,id desc limit 9,3", ['du-an']);

$project1[] = $db->rawQuery("select id,id_tacgia,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and noibat<>0 and type=? and id_list=18  order by stt asc,id desc limit 0,3", ['du-an']);
$project1[] = $db->rawQuery("select id,id_tacgia,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and noibat<>0 and type=? and id_list=18  order by stt asc,id desc limit 3,3", ['du-an']);
$project1[] = $db->rawQuery("select id,id_tacgia,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and noibat<>0 and type=? and id_list=18  order by stt asc,id desc limit 6,3", ['du-an']);
$project1[] = $db->rawQuery("select id,id_tacgia,ten_$lang as ten,mota_$lang as mota,photo,luotxem,type,ngaytao from #_baiviet where hienthi=1 and noibat<>0 and type=? and id_list=18  order by stt asc,id desc limit 9,3", ['du-an']);


$info = $db->rawQueryOne("select ten_$lang as ten , mota_$lang as mota, slogan1_$lang as slogan from #_info");

$quytrinhs = $db->rawQuery("select id,ten_$lang as ten,mota_$lang as mota,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc", ['quy-trinh']);


$des_process = $func->OneDataDes('desc-process', "array");

$des_chungnhan = $func->OneDataDes('desc-chungnhan', "array");

$bg_product = $func->OneDataPhoto("", 'bg-product', 'limit 0,1', "array");

$bg_proccess = $func->OneDataPhoto("", 'bg_proccess', 'limit 0,1', "array");

$logo_process = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1", array('logo-process'));

$chungnhans = $db->rawQuery("select ten_$lang as ten,photo_$lang photo from #_photo where hienthi=1 and type=? order by stt asc,id desc", array('chung-nhan'));

?>
<section id="service" style="position: relative;">
    <div class="width">
        <div class="d-flex justify-content-between">
            <div class="introduce">
                <div class="h2"><?= $info['ten'] ?></div>
                <div class="h5"><?= $info['slogan'] ?></div>
                <?= htmlspecialchars_decode($info['mota']) ?>
                <button><a href="gioi-thieu">TÌM HIỂU THÊM</a></button>
            </div>
            <div class="service-outstanding">
                <ul class="d-flex flex-wrap flex-row-reverse">
                    <?php foreach ($product_serivce as $k => $v) {
                    ?>
                        <li style="position: relative;">
                            <div class="image"><?= $func->getHrefImg($v); ?></div>
                            <h3 class="name" style="position: absolute;"><?= $v['ten'] ?></h3>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-image position-absolute" style="position: absolute;">
        <img src="assets/images/image 32.png" alt="">
    </div>
</section>
<section id="product" style="background-image: url('<?= _upload_hinhanh_l . $bg_img_servie['photo'] ?>'); background-size: cover;">
    <div class="width">
        <div class="h2">MẪU NHÀ ĐẸP CỦA TIẾN THỊNH</div>
        <div class="bg-icon">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                    <path d="M27.1256 22.195C27.1783 22.1951 27.2304 22.2069 27.278 22.2295L37.7344 27.1055V16.8906H22.6406V24.2463L26.9747 22.2338C27.0214 22.2096 27.073 22.1963 27.1256 22.195Z" fill="#00ADF3" />
                    <path d="M22.6406 11.6768H34.6711V16.1718H22.6406V11.6768Z" fill="#00ADF3" />
                    <path d="M26.9876 23.8094C27.0352 23.7873 27.0869 23.7759 27.1393 23.7759C27.1917 23.7759 27.2434 23.7873 27.291 23.8094L38.2447 28.9125C38.2533 28.9125 38.2562 28.9254 38.2634 28.9297L39.4134 29.4659L39.7138 28.8234L37.95 27.9997L27.1256 22.9512L7.66476 32.029L7.96664 32.6845L26.9876 23.8094Z" fill="#00ADF3" />
                    <path d="M21.9219 36.2969V28.5531L10.4219 33.9193V36.2969H21.9219Z" fill="#00ADF3" />
                    <path d="M38.0938 37.0156H22.2812H10.0625H8.625H5.39062V37.7344H40.6094V37.0156H38.0938Z" fill="#00ADF3" />
                    <path d="M37.7344 36.2968V29.4687L27.14 24.5251L8.98438 33.0035V36.2968H9.70312V33.6906C9.70372 33.6212 9.72439 33.5535 9.76266 33.4956C9.80092 33.4377 9.85514 33.3921 9.91875 33.3643L22.1375 27.6632C22.1923 27.6379 22.2525 27.6267 22.3128 27.6308C22.373 27.6349 22.4312 27.6541 22.482 27.6866C22.5329 27.7191 22.5747 27.7639 22.6037 27.8168C22.6327 27.8698 22.6478 27.9292 22.6478 27.9895V36.2968H37.7344ZM27.1299 29.9718H29.5349V32.3768H27.1299V29.9718ZM27.1299 32.752H29.5349V35.1569H27.1299V32.752ZM24.3901 29.9718H26.795V32.3768H24.3901V29.9718ZM24.3901 32.752H26.795V35.1569H24.3901V32.752Z" fill="#00ADF3" />
                    <path d="M21.9219 16.5312V8.26562H8.98438V30.6187L21.9219 24.5813V16.5312ZM13.5528 24.7998H10.4219V21.6689H13.5528V24.7998ZM13.5528 20.7819H10.4219V17.6511H13.5528V20.7819ZM13.5528 16.7641H10.4219V13.6333H13.5528V16.7641ZM13.5528 12.7463H10.4219V9.61544H13.5528V12.7463Z" fill="#00ADF3" />
                </svg>
            </span>
        </div>
        <ul>
            <?php foreach ($product_house as $k => $v) {
            ?>
                <li class="position-relative">
                    <div><?= $func->getHrefImgProduct($v); ?>
                        <div class="hidden">
                            <?php
                            $project_detail = $db->rawQuery("select * from #_baiviet_photo where id_baiviet = ?", [$v['id']]);
                            foreach ($project_detail as $k => $x) {
                            ?>
                                <a href="<?= _upload_baiviet_l . $x['photo'] ?>" data-fancybox="product_main<?= $v['id'] ?>">

                                    <img src="<?= _upload_baiviet_l . $x['photo'] ?>" alt="Happy Flow - Do What You Love">
                                </a>
                            <?php } ?>
                        </div>
                        <script>
                            $(function() {

                                $('[data-fancybox="product_main<?= $v['id'] ?>"]').fancybox({

                                    thumbs: {
                                        autoStart: true
                                    },
                                    buttons: [
                                        'zoom',
                                        'close'
                                    ]

                                });

                            });
                        </script>
                        <div class="content position-absolute justify-content-end flex-column">
                            <h3 class="name"><?= $v['ten'] ?></h3>
                            <div class="address">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                    <g clip-path="url(#clip0_0_71)">
                                        <path d="M8.98657 0.334717C5.58969 0.334717 2.82614 3.09826 2.82614 6.49514C2.82614 8.14526 3.82586 10.2643 5.79751 12.7932C6.70082 13.9488 7.67904 15.0438 8.72588 16.0712C8.79607 16.1383 8.88945 16.1758 8.98657 16.1758C9.08369 16.1758 9.17706 16.1383 9.24725 16.0712C10.2941 15.0438 11.2723 13.9488 12.1756 12.7932C14.1473 10.2643 15.147 8.14526 15.147 6.49514C15.147 3.09826 12.3834 0.334717 8.98657 0.334717ZM8.98657 10.8954C6.56011 10.8954 4.58626 8.92159 4.58626 6.49514C4.58626 4.06869 6.56011 2.09484 8.98657 2.09484C11.413 2.09484 13.3869 4.06869 13.3869 6.49514C13.3869 8.92159 11.413 10.8954 8.98657 10.8954Z" fill="#00ADF3" />
                                        <path d="M12.0062 5.96472L9.24026 3.45026C9.17084 3.38714 9.08038 3.35217 8.98655 3.35217C8.89273 3.35217 8.80227 3.38714 8.73284 3.45026L5.96694 5.96472C5.9025 6.02331 5.86032 6.1024 5.84754 6.18855C5.83477 6.27471 5.85219 6.36263 5.89685 6.4374C5.93209 6.49433 5.98147 6.54116 6.04019 6.57333C6.09891 6.6055 6.16496 6.62191 6.2319 6.62096H6.59782V9.00969C6.59782 9.10973 6.63756 9.20566 6.70829 9.27639C6.77902 9.34713 6.87496 9.38686 6.97499 9.38686H7.85505C7.95508 9.38686 8.05101 9.34713 8.12175 9.27639C8.19248 9.20566 8.23222 9.10973 8.23222 9.00969V7.62674C8.23222 7.52671 8.27195 7.43078 8.34269 7.36004C8.41342 7.28931 8.50935 7.24957 8.60939 7.24957H9.36372C9.46375 7.24957 9.55969 7.28931 9.63042 7.36004C9.70115 7.43078 9.74089 7.52671 9.74089 7.62674V9.00969C9.74089 9.10973 9.78063 9.20566 9.85136 9.27639C9.92209 9.34713 10.018 9.38686 10.1181 9.38686H10.9981C11.0982 9.38686 11.1941 9.34713 11.2648 9.27639C11.3356 9.20566 11.3753 9.10973 11.3753 9.00969V6.62096H11.7412C11.8082 6.62191 11.8742 6.6055 11.9329 6.57333C11.9916 6.54116 12.041 6.49433 12.0763 6.4374C12.1209 6.36263 12.1383 6.27471 12.1256 6.18855C12.1128 6.1024 12.0706 6.02331 12.0062 5.96472Z" fill="#00ADF3" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_71">
                                            <rect width="16.0925" height="16.0925" fill="white" transform="translate(0.940308 0.208984)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <?= htmlspecialchars_decode($v['mota']) ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <li class="position-relative">
                <a href="mau-nha-dep"><img src="assets/images/Rectangle 5680.png" alt="">
                    <div class="seen-all center position-absolute">
                        <div class="bg center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="73" viewBox="0 0 73 73" fill="none">
                                <path d="M60.2199 33.4288H39.3592V12.5681C39.3592 10.9231 38.0241 9.58801 36.3791 9.58801C34.7341 9.58801 33.399 10.9231 33.399 12.5681V33.4288H12.5383C10.8933 33.4288 9.55823 34.7639 9.55823 36.4089C9.55823 38.0539 10.8933 39.389 12.5383 39.389H33.399V60.2497C33.399 61.8947 34.7341 63.2298 36.3791 63.2298C38.0241 63.2298 39.3592 61.8947 39.3592 60.2497V39.389H60.2199C61.8649 39.389 63.2 38.0539 63.2 36.4089C63.2 34.7639 61.8649 33.4288 60.2199 33.4288Z" fill="#00ADF3" />
                            </svg>
                        </div>
                    </div>
                </a>
            </li>

        </ul>
    </div>
</section>
<section id="trust" style="background-image: url('<?= _upload_hinhanh_l . $bg_5_ly_do['photo'] ?>'); background-size: cover;">
    <div class="bg">
        <div class="width">
            <div class="h2">5 LÝ DO NÊN CHỌN CHÚNG TÔI</div>
            <div class="bg-icon">
                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <path d="M27.1256 22.195C27.1783 22.1951 27.2304 22.2069 27.278 22.2295L37.7344 27.1055V16.8906H22.6406V24.2463L26.9747 22.2338C27.0214 22.2096 27.073 22.1963 27.1256 22.195Z" fill="#00ADF3" />
                        <path d="M22.6406 11.6768H34.6711V16.1718H22.6406V11.6768Z" fill="#00ADF3" />
                        <path d="M26.9876 23.8094C27.0352 23.7873 27.0869 23.7759 27.1393 23.7759C27.1917 23.7759 27.2434 23.7873 27.291 23.8094L38.2447 28.9125C38.2533 28.9125 38.2562 28.9254 38.2634 28.9297L39.4134 29.4659L39.7138 28.8234L37.95 27.9997L27.1256 22.9512L7.66476 32.029L7.96664 32.6845L26.9876 23.8094Z" fill="#00ADF3" />
                        <path d="M21.9219 36.2969V28.5531L10.4219 33.9193V36.2969H21.9219Z" fill="#00ADF3" />
                        <path d="M38.0938 37.0156H22.2812H10.0625H8.625H5.39062V37.7344H40.6094V37.0156H38.0938Z" fill="#00ADF3" />
                        <path d="M37.7344 36.2968V29.4687L27.14 24.5251L8.98438 33.0035V36.2968H9.70312V33.6906C9.70372 33.6212 9.72439 33.5535 9.76266 33.4956C9.80092 33.4377 9.85514 33.3921 9.91875 33.3643L22.1375 27.6632C22.1923 27.6379 22.2525 27.6267 22.3128 27.6308C22.373 27.6349 22.4312 27.6541 22.482 27.6866C22.5329 27.7191 22.5747 27.7639 22.6037 27.8168C22.6327 27.8698 22.6478 27.9292 22.6478 27.9895V36.2968H37.7344ZM27.1299 29.9718H29.5349V32.3768H27.1299V29.9718ZM27.1299 32.752H29.5349V35.1569H27.1299V32.752ZM24.3901 29.9718H26.795V32.3768H24.3901V29.9718ZM24.3901 32.752H26.795V35.1569H24.3901V32.752Z" fill="#00ADF3" />
                        <path d="M21.9219 16.5312V8.26562H8.98438V30.6187L21.9219 24.5813V16.5312ZM13.5528 24.7998H10.4219V21.6689H13.5528V24.7998ZM13.5528 20.7819H10.4219V17.6511H13.5528V20.7819ZM13.5528 16.7641H10.4219V13.6333H13.5528V16.7641ZM13.5528 12.7463H10.4219V9.61544H13.5528V12.7463Z" fill="#00ADF3" />
                    </svg>
                </span>
            </div>
            <ul class="content d-flex justify-content-between">
                <?php foreach ($five_reason as $k => $v) {

                ?>
                    <li style="position: relative;">
                        <img class="" src="assets/images/svg/Ellipse 1022.svg" alt="">
                        <img class="img-abs d-flex" style="position:absolute;" src="assets/images/svg/Ellipse 1023.svg" alt="">
                        <div class="img-abs" style="position:absolute;">
                            <?= $func->getHrefImg($v); ?>
                        </div>
                        <div class="top" style="position:absolute;">
                            <img class="s-img" src="assets/images/svg/Ellipse 1026.svg" alt="">
                            <div class="img-abs p-absolute" style="height: 55px; width: 55px;"><img src="assets/images/svg/Ellipse 1027.svg" alt=""></div>
                            <span class="img-abs center" style="position:absolute;">0<?= $v['stt'] ?></span>
                        </div>
                        <div class="bottom" style="position:absolute;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <circle cx="8.83429" cy="9.02536" r="8.41587" fill="#00ADF3" />
                            </svg>
                            <img class="img-abs" style="position:absolute;" src="assets/images/svg/Ellipse 1025.svg" alt="">
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="dash">
            </div>
            <ul class="content-bottom d-flex justify-content-between">
                <?php foreach ($five_reason as $k => $v) {
                ?>
                    <li>
                        <h3 class="title"><?= $v['ten'] ?>
                        </h3>
                        <p><?= htmlspecialchars_decode($v['mota']) ?></p>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>
<section id="project">
    <div class="width">
        <div class="center flex-column">
            <div class="h2">DỰ ÁN TIÊU BIỂU CỦA TIẾN THỊNH</div>
            <div class="bg-icon">
                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <path d="M27.1256 22.195C27.1783 22.1951 27.2304 22.2069 27.278 22.2295L37.7344 27.1055V16.8906H22.6406V24.2463L26.9747 22.2338C27.0214 22.2096 27.073 22.1963 27.1256 22.195Z" fill="#00ADF3" />
                        <path d="M22.6406 11.6768H34.6711V16.1718H22.6406V11.6768Z" fill="#00ADF3" />
                        <path d="M26.9876 23.8094C27.0352 23.7873 27.0869 23.7759 27.1393 23.7759C27.1917 23.7759 27.2434 23.7873 27.291 23.8094L38.2447 28.9125C38.2533 28.9125 38.2562 28.9254 38.2634 28.9297L39.4134 29.4659L39.7138 28.8234L37.95 27.9997L27.1256 22.9512L7.66476 32.029L7.96664 32.6845L26.9876 23.8094Z" fill="#00ADF3" />
                        <path d="M21.9219 36.2969V28.5531L10.4219 33.9193V36.2969H21.9219Z" fill="#00ADF3" />
                        <path d="M38.0938 37.0156H22.2812H10.0625H8.625H5.39062V37.7344H40.6094V37.0156H38.0938Z" fill="#00ADF3" />
                        <path d="M37.7344 36.2968V29.4687L27.14 24.5251L8.98438 33.0035V36.2968H9.70312V33.6906C9.70372 33.6212 9.72439 33.5535 9.76266 33.4956C9.80092 33.4377 9.85514 33.3921 9.91875 33.3643L22.1375 27.6632C22.1923 27.6379 22.2525 27.6267 22.3128 27.6308C22.373 27.6349 22.4312 27.6541 22.482 27.6866C22.5329 27.7191 22.5747 27.7639 22.6037 27.8168C22.6327 27.8698 22.6478 27.9292 22.6478 27.9895V36.2968H37.7344ZM27.1299 29.9718H29.5349V32.3768H27.1299V29.9718ZM27.1299 32.752H29.5349V35.1569H27.1299V32.752ZM24.3901 29.9718H26.795V32.3768H24.3901V29.9718ZM24.3901 32.752H26.795V35.1569H24.3901V32.752Z" fill="#00ADF3" />
                        <path d="M21.9219 16.5312V8.26562H8.98438V30.6187L21.9219 24.5813V16.5312ZM13.5528 24.7998H10.4219V21.6689H13.5528V24.7998ZM13.5528 20.7819H10.4219V17.6511H13.5528V20.7819ZM13.5528 16.7641H10.4219V13.6333H13.5528V16.7641ZM13.5528 12.7463H10.4219V9.61544H13.5528V12.7463Z" fill="#00ADF3" />
                    </svg>
                </span>
            </div>
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. There are many variation.
            </p>
            <div class="">
                <button class="tab-link active" data-tab="1">đang thi công</button>
                <button class="tab-link" data-tab="2">đã thi công</button>
            </div>
        </div>
        <div id="tab-1" class="bg-image tab-content active">
            <?php foreach ($project as $v) {

            ?>
                <div class="c1">
                    <?php foreach ($v as $img) {
                    ?>
                        <div class="a responsive_img">
                            <?= $func->getHrefImgProject($img); ?>
                            <div class="hidden">
                                <?php
                                $project_detail = $db->rawQuery("select * from #_baiviet_photo where id_baiviet = ?", [$img['id']]);
                                foreach ($project_detail as $k => $x) {
                                ?>
                                    <a href="<?= _upload_baiviet_l . $x['photo'] ?>" data-fancybox="project<?= $img['id'] ?>">

                                        <img src="<?= _upload_baiviet_l . $x['photo'] ?>" alt="Happy Flow - Do What You Love">
                                    </a>
                                <?php } ?>
                            </div>
                            <script>
                                $(function() {

                                    $('[data-fancybox="project<?= $img['id'] ?>"]').fancybox({

                                        thumbs: {
                                            autoStart: true
                                        },
                                        buttons: [
                                            'zoom',
                                            'close'
                                        ]

                                    });

                                });
                            </script>
                            <div class="p-absolute seen-all">
                                <a href="du-an">
                                    <div class="center position-absolute">
                                        <div class="bg center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="73" viewBox="0 0 73 73" fill="none">
                                                <path d="M60.2199 33.4288H39.3592V12.5681C39.3592 10.9231 38.0241 9.58801 36.3791 9.58801C34.7341 9.58801 33.399 10.9231 33.399 12.5681V33.4288H12.5383C10.8933 33.4288 9.55823 34.7639 9.55823 36.4089C9.55823 38.0539 10.8933 39.389 12.5383 39.389H33.399V60.2497C33.399 61.8947 34.7341 63.2298 36.3791 63.2298C38.0241 63.2298 39.3592 61.8947 39.3592 60.2497V39.389H60.2199C61.8649 39.389 63.2 38.0539 63.2 36.4089C63.2 34.7639 61.8649 33.4288 60.2199 33.4288Z" fill="#00ADF3" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div id="tab-2" class="bg-image tab-content">

            <?php foreach ($project1 as $v) {
            ?>
                <div class="c1">
                    <?php foreach ($v as $img) {
                    ?>
                        <div class="a responsive_img">
                            <?= $func->getHrefImgProject($img); ?>
                            <div class="hidden">
                                <?php
                                $project_detail = $db->rawQuery("select * from #_baiviet_photo where id_baiviet = ?", [$img['id']]);
                                foreach ($project_detail as $k => $x) {
                                ?>
                                    <a href="<?= _upload_baiviet_l . $x['photo'] ?>" data-fancybox="project<?= $img['id'] ?>">

                                        <img src="<?= _upload_baiviet_l . $x['photo'] ?>" alt="Happy Flow - Do What You Love">
                                    </a>
                                <?php } ?>
                            </div>
                            <script>
                                $(function() {

                                    $('[data-fancybox="project<?= $img['id'] ?>"]').fancybox({

                                        thumbs: {
                                            autoStart: true
                                        },
                                        buttons: [
                                            'zoom',
                                            'close'
                                        ]

                                    });

                                });
                            </script>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
    <script>
        $('.tab-link').click(function() {

            var tabID = $(this).attr('data-tab');

            $(this).addClass('active').siblings().removeClass('active');

            $('#tab-' + tabID).addClass('active').siblings().removeClass('active');
        });
    </script>
</section>
<section id="contract-home" style="background-image: url('<?= _upload_hinhanh_l . $img_form_advise['photo'] ?>'); background-size:cover;">
    <div class="bg">
        <div class="width d-flex justify-content-between">
            <div class="form-contract">
                <div class="h2">ĐĂNG KÝ NHẬN TƯ VẤN MIỄN PHÍ</div>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                    suffered alteration</p>
                <div class="form__group">
                    <div class="form__input d-flex">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <g clip-path="url(#clip0_0_265)">
                                    <path d="M10.4721 11.1074C11.8624 11.1074 13.0663 10.6087 14.0499 9.62492C15.0336 8.64128 15.5322 7.43773 15.5322 6.04729C15.5322 4.65734 15.0336 3.45363 14.0498 2.46967C13.066 1.48618 11.8623 0.987549 10.4721 0.987549C9.08171 0.987549 7.87815 1.48618 6.89451 2.46983C5.91086 3.45347 5.41206 4.65718 5.41206 6.04729C5.41206 7.43773 5.91086 8.64144 6.89467 9.62508C7.87847 10.6086 9.08219 11.1074 10.4721 11.1074Z" fill="#00ADF3" />
                                    <path d="M19.3259 17.1418C19.2976 16.7324 19.2402 16.2859 19.1557 15.8143C19.0704 15.3393 18.9606 14.8902 18.8292 14.4797C18.6935 14.0554 18.5088 13.6364 18.2806 13.2349C18.0437 12.8182 17.7654 12.4553 17.4532 12.1567C17.1267 11.8443 16.727 11.5932 16.2647 11.41C15.8041 11.2277 15.2936 11.1354 14.7475 11.1354C14.533 11.1354 14.3256 11.2234 13.9251 11.4842C13.6786 11.6449 13.3902 11.8309 13.0684 12.0365C12.7932 12.2119 12.4204 12.3761 11.9599 12.5249C11.5106 12.6703 11.0544 12.744 10.6042 12.744C10.154 12.744 9.69799 12.6703 9.24824 12.5249C8.78823 12.3763 8.41541 12.212 8.14053 12.0367C7.82173 11.833 7.53323 11.647 7.28303 11.484C6.88296 11.2232 6.6754 11.1353 6.46094 11.1353C5.9147 11.1353 5.40437 11.2277 4.94388 11.4101C4.48195 11.593 4.08205 11.8442 3.75523 12.1569C3.44316 12.4556 3.16476 12.8184 2.92818 13.2349C2.7001 13.6364 2.51546 14.0552 2.37954 14.4798C2.24827 14.8903 2.13847 15.3393 2.0532 15.8143C1.96874 16.2852 1.91136 16.7319 1.88299 17.1423C1.8551 17.5442 1.84099 17.9615 1.84099 18.3828C1.84099 19.4795 2.1896 20.3673 2.87705 21.022C3.556 21.6681 4.45438 21.9959 5.54686 21.9959H15.6625C16.755 21.9959 17.6531 21.6683 18.3322 21.022C19.0198 20.3677 19.3684 19.4798 19.3684 18.3827C19.3682 17.9594 19.354 17.5418 19.3259 17.1418Z" fill="#00ADF3" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_0_265">
                                        <rect x="0.117676" y="0.987793" width="21.0084" height="21.0084" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <input type="text" name="fullname" value="" placeholder="Nhập Họ Và Tên">
                    </div>
                    <div class="form__input d-flex align-items-center">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19.3473 15.0267C18.7407 15.0123 17.9771 14.9766 17.4947 14.8919C16.9728 14.7995 16.345 14.6204 15.903 14.4827C15.5564 14.3748 15.1789 14.4702 14.9218 14.7263C13.6517 15.989 11.6652 16.328 10.2758 15.1978C9.86742 14.8656 9.48722 14.5193 9.13009 14.1601C8.77106 13.8031 8.42489 13.4231 8.09282 13.0149C6.96226 11.6252 7.30114 9.63819 8.56392 8.36739C8.82004 8.1103 8.91537 7.73285 8.80753 7.38621C8.6708 6.94521 8.49074 6.31741 8.39926 5.79553C8.31357 5.31312 8.2789 4.54955 8.2635 3.94294C8.25098 3.41816 7.82346 3.0022 7.29869 3.0022H3.91896C3.49722 3.0022 2.95607 3.31802 2.95607 3.96508C2.95607 8.33562 4.72778 12.5097 7.73776 15.5524C10.7805 18.5624 14.9546 20.3341 19.3251 20.3341C19.9722 20.3341 20.288 19.793 20.288 19.3712V15.9915C20.288 15.4667 19.872 15.0392 19.3473 15.0267Z" fill="#00ADF3" />
                            </svg></div>
                        <input type="text" name="phone" value="" placeholder="Nhập Số Điện Thoại">
                    </div>
                    <div class="form__input d-flex">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M4.21849 4.4917C3.51891 4.4917 2.90206 4.83527 2.52181 5.36363C2.26551 5.71867 2.37874 6.22194 2.74954 6.45303L11.9735 12.2016C12.3706 12.4495 12.8731 12.4495 13.2702 12.2016L22.4552 6.40379C22.8407 6.16009 22.9368 5.63045 22.6521 5.27541C22.2687 4.79852 21.6838 4.4917 21.0252 4.4917H4.21849ZM22.6173 8.78365C22.5294 8.78462 22.4402 8.80883 22.3567 8.86161L13.2702 14.5917C12.8731 14.8386 12.3706 14.8376 11.9735 14.5897L2.88494 8.92726C2.55091 8.71928 2.11765 8.96009 2.11765 9.354V19.1976C2.11765 20.3583 3.05777 21.2984 4.21849 21.2984H21.0252C22.1859 21.2984 23.126 20.3583 23.126 19.1976V9.28629C23.126 8.99007 22.8808 8.78075 22.6173 8.78365Z" fill="#00ADF3" />
                            </svg></div>
                        <input type="text" name="email" value="" placeholder="Nhập email của bạn">
                    </div>
                    <div class="form__input textarea">
                        <textarea name="content" value="" placeholder="Nhập lời nhắn" rows="3"></textarea>
                    </div>
                    <button id="submit_register" class="center"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                            <g clip-path="url(#clip0_0_271)">
                                <path d="M17.5813 9.89927V17.0421H2.45529V2.75642H10.0183V0.970703H0.564537V18.8278H19.4721V9.89927H17.5813Z" fill="white" />
                                <path d="M11.9097 0.970703L14.6324 3.54213L9.27272 8.60404L11.3904 10.604L16.75 5.54213L19.4727 8.11356V0.970703H11.9097Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_0_271">
                                    <rect width="18.9076" height="17.8571" fill="white" transform="translate(0.571442 0.970703)" />
                                </clipPath>
                            </defs>
                        </svg>
                        ĐĂNG KÝ NGAY</button>
                </div>
            </div>
            <div class="questions">
                <div class="h2">CÂU HỎI THƯỜNG GẶP</div>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                    suffered alteration in some form, by injected humour</p>
                <ul>
                    <?php foreach ($question as $k => $v) {
                    ?>
                        <li style="position:relative;" class="position-relative active">
                            <div class="question"><?= $v['ten'] ?>
                            </div>
                            <div class="bg-rep">
                                <div class="rep"><?= $v['noidung'] ?></div>
                            </div>
                            <div class="icon p-absolute"></div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="blog">
    <div class="width">
        <div class="">
            <div class="h2">TIN TỨC & SỰ KIỆN</div>
            <div class="bg-icon">
                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <path d="M27.1256 22.195C27.1783 22.1951 27.2304 22.2069 27.278 22.2295L37.7344 27.1055V16.8906H22.6406V24.2463L26.9747 22.2338C27.0214 22.2096 27.073 22.1963 27.1256 22.195Z" fill="#00ADF3" />
                        <path d="M22.6406 11.6768H34.6711V16.1718H22.6406V11.6768Z" fill="#00ADF3" />
                        <path d="M26.9876 23.8094C27.0352 23.7873 27.0869 23.7759 27.1393 23.7759C27.1917 23.7759 27.2434 23.7873 27.291 23.8094L38.2447 28.9125C38.2533 28.9125 38.2562 28.9254 38.2634 28.9297L39.4134 29.4659L39.7138 28.8234L37.95 27.9997L27.1256 22.9512L7.66476 32.029L7.96664 32.6845L26.9876 23.8094Z" fill="#00ADF3" />
                        <path d="M21.9219 36.2969V28.5531L10.4219 33.9193V36.2969H21.9219Z" fill="#00ADF3" />
                        <path d="M38.0938 37.0156H22.2812H10.0625H8.625H5.39062V37.7344H40.6094V37.0156H38.0938Z" fill="#00ADF3" />
                        <path d="M37.7344 36.2968V29.4687L27.14 24.5251L8.98438 33.0035V36.2968H9.70312V33.6906C9.70372 33.6212 9.72439 33.5535 9.76266 33.4956C9.80092 33.4377 9.85514 33.3921 9.91875 33.3643L22.1375 27.6632C22.1923 27.6379 22.2525 27.6267 22.3128 27.6308C22.373 27.6349 22.4312 27.6541 22.482 27.6866C22.5329 27.7191 22.5747 27.7639 22.6037 27.8168C22.6327 27.8698 22.6478 27.9292 22.6478 27.9895V36.2968H37.7344ZM27.1299 29.9718H29.5349V32.3768H27.1299V29.9718ZM27.1299 32.752H29.5349V35.1569H27.1299V32.752ZM24.3901 29.9718H26.795V32.3768H24.3901V29.9718ZM24.3901 32.752H26.795V35.1569H24.3901V32.752Z" fill="#00ADF3" />
                        <path d="M21.9219 16.5312V8.26562H8.98438V30.6187L21.9219 24.5813V16.5312ZM13.5528 24.7998H10.4219V21.6689H13.5528V24.7998ZM13.5528 20.7819H10.4219V17.6511H13.5528V20.7819ZM13.5528 16.7641H10.4219V13.6333H13.5528V16.7641ZM13.5528 12.7463H10.4219V9.61544H13.5528V12.7463Z" fill="#00ADF3" />
                    </svg>
                </span>
            </div>
            <div class="bg-blog">
                <?php foreach ($blogs as $k => $v) {

                ?>
                    <div class="item" style="position: relative;">
                        <div class="temp" style="position: absolute;">
                            KIẾN THỨC
                        </div>

                        <div class="image">
                            <?= $func->getHrefImg($v) ?>
                        </div>
                        <div class="title"><?= $v['ten'] ?></div>
                        <div class="content"><?= htmlspecialchars_decode($v['mota']) ?></div>
                        <button>
                            Xem Chi Tiết
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path d="M12.1706 4.76861C12.0406 4.76611 11.9218 4.84361 11.8693 4.96236C11.8181 5.08236 11.8443 5.22111 11.9356 5.31361L14.4881 7.97236L3.10183 8.07236C2.98683 8.07111 2.87933 8.13111 2.82183 8.23111C2.76308 8.33111 2.76308 8.45361 2.82183 8.55361C2.87933 8.65361 2.98683 8.71361 3.10183 8.71236L14.4881 8.61236L11.9356 11.2711C11.8131 11.3986 11.8181 11.6011 11.9456 11.7236C12.0731 11.8461 12.2756 11.8424 12.3981 11.7136L15.6831 8.29236L12.3981 4.87111C12.3393 4.80736 12.2568 4.77111 12.1706 4.76861Z" fill="#222222" />
                            </svg>
                        </button>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<style>
    #contract-home .questions li .icon {
        background-image: url('assets/images/svg/add 2.svg');
    }

    #contract-home .questions .question.active+.bg-rep+.icon {
        background-image: url('assets/images/svg/add 1.svg');
    }

    .tab-link {
        margin: 0 1%;
        list-style: none;
        padding: 10px 40px;
        color: #aaa;
        cursor: pointer;
        font-weight: 700;
        transition: all ease 0.5s;
        letter-spacing: 1px;
    }

    .tab-link:hover {
        color: #999;
        border-color: #999;
    }

    .tab-link.active {
        color: #333;
        border-color: #333;
    }

    #project .bg-image.tab-content {
        display: none;
        text-align: center;
        color: #888;
        font-weight: 300;
        font-size: 15px;
        opacity: 0;
        transform: translateY(1000px);
        animation: fadeIn 0.5s ease 1 forwards;
    }

    #project .bg-image.tab-content.active {
        display: grid;
    }

    @keyframes fadeIn {
        100% {
            opacity: 1;
            transform: none;
        }
    }

    ul {
        color: #fff;
    }

    #project .seen-all {
        width: 80%;
        height: 81%;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(24, 48, 58, 0.84);
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        display: none;
    }

    #project .seen-all a::before {

        display: none;
    }

    #bg header ul li a::before {
        transition: all .5s;

    }

    #bg header ul li:hover h2>a,
    #bg header ul li.active h2>a {
        color: var(--html-bg-website) !important;

    }

    #bg header ul li:hover h2>a::before,
    #bg header ul li.active h2>a::before {
        opacity: 1;
        bottom: 4px;
    }

    #bg header ul li ul li:hover h3>a,
    #bg header ul li ul li.active h3>a {
        color: var(--html-bg-website) !important;

    }

    #bg header ul li ul li:hover h3>a::before,
    #bg header ul li ul li.active h3>a::before {
        opacity: 1;
        bottom: 4px;
    }
</style>