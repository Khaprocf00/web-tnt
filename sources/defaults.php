<?php

$page_index = $deviceType == 'phone' ? 20 : 20;

$viewed = [];

if (isset($_SESSION['view'])) {
	$viewed = $_SESSION['view'];
} else {
	$_SESSION['view'] = array();
}

$row_setting = $db->rawQueryOne("select * from #_setting limit 0,1");

$logo = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1", array('logo'));

$logo_footer = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1", array('logo-footer'));

$seoPage = $db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1", array('hinhdaidien'));

$socical = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=?", array('mangxahoi'));

// $socical_footer = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,phone,color from #_photo where hienthi=1 and type=?",array('mangxahoi-footer'));

$bg_header = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1", array('bg-header'));

$quangcao = $db->rawQueryOne("select photo_$lang as photo,link from #_bannerqc where hienthi=1 and type=? limit 0,1", array('quang-cao'));

$bg_footer = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1", array('bg_footer'));

$intro_top = $db->rawQuery("select id,ten_$lang as ten,photo_$lang as photo,phone from #_photo where hienthi=1 and type=? order by stt asc,id desc limit 4", ['intro-top']);

$chinhsach = $db->rawQuery("select type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? and hienthi=1 order by stt asc,id desc", array('chinh-sach'));

$hotros = $db->rawQuery("select type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? and hienthi=1 order by stt asc,id desc", array('ho-tro'));

// index
// $hotline= $db->rawQuery("select ten_$lang as ten,phone from #_map where hienthi=1 and type=? order by stt asc",array('hotline'));

$footer = $db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1", array('footer'));

// $maps = $db->rawQuery("select id,ten_$lang, diachi_$lang, phone, email,website,iframe_map from #_map where hienthi=1 order by stt asc,id desc limit 0,2");

$sanpham_list = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where type=? and hienthi=1 order by stt asc,id desc", array('dich-vu'));
$duan_list = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where type=? and hienthi=1 order by stt asc,id desc", array('du-an'));

// $banner_tpl = $func->OneDataPhoto(null, 'banner-all', null, 'array');

$time_slider = $row_setting["time_slider"];

$des_footer = $db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1", array('des-footer'));

$des_detail = $db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1", array('des-detail'));

$image_footer = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1", array('img_footer'));
$image_bg_footer = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1", array('img_bg_footer'));
$bg_5_ly_do = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1", array('bg-5-ly-do'));
$bg_img_servie = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1", array('bg-img-service'));
$img_form_advise = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1", array('img_form_advise'));
$setting = $db->rawQueryOne("select * from #_setting ");
// var_dump($bg_5_ly_do);
// die();