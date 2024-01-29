<?php

#=================check per===============

$GLOBAL_LANG = false;

$GLOBAL_PERMISSION = false;

#=================check user===============

$GLOBAL_USER = true;

$GLOBAL_USER_ADMIN = true;

$GLOBAL_USER_CLIENT = true;

#================check member================ 

$ORDER = false;

$MEMBER = false;

$CONTACT = true;

$NEWSLETTER = false;

$BOOKING = true;

// =======================seo page======================

$setting['seopage']['page'] = array(

	'gioi-thieu' => "Giới thiệu",

	'blogs' => 'Tin tức & sự kiện',

	'dich-vu' => 'Dịch vụ',

	'lien-he' => 'Liên hệ',

	'du-an' => 'Dự án',

	'mau-nha-dep' => 'Mẫu nhà đẹp'

);

$setting['seopage']['mota'] = true;
$setting['seopage']['mota-ckeditor'] = true;
$setting['seopage']['noidung'] = true;
$setting['seopage']['noidung-ckeditor'] = true;
$setting['seopage']['img-ratio'] = 1;
$setting['seopage']['img-b'] = 200;
$setting['seopage']['thumb'] = '300x200x1';
$setting['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
$viewArray = array('htgh', 'pttt');

// #========================properties====================

$nametype = 'properties';
$setting['properties'][$nametype]['name'] = 'Thuộc tính sản phẩm';
$setting['properties'][$nametype]['color'] = true;
$setting['properties'][$nametype]['qty'] = true;
$setting['properties'][$nametype]['price'] = true;
$setting['properties'][$nametype]['photo'] = true;
$setting['properties'][$nametype]['img-height'] = 285;
$setting['properties'][$nametype]['img-width'] = 250;
$setting['properties'][$nametype]['img-ratio'] = 2;
$setting['properties'][$nametype]['img-b'] = false;

#==================================Hình thức giao hàng====================================

$nametype = 'htgh';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'phương thức giao hàng';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách phương thức giao hàng';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['tag'] = true;

$GLOBAL['baiviet'][$nametype]['img'] = false;

$GLOBAL['baiviet'][$nametype]['img-width'] = 72;

$GLOBAL['baiviet'][$nametype]['img-height'] = 72;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = false;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['job'] = false;

$GLOBAL['baiviet'][$nametype]['seo'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

$GLOBAL['baiviet'][$nametype]['rating'] = false;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


#========================pttt==================== 

$nametype = 'pttt';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'phương thức thanh toán';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách phương thức thanh toán';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['tag'] = true;

$GLOBAL['baiviet'][$nametype]['img'] = false;

$GLOBAL['baiviet'][$nametype]['img-width'] = 285;

$GLOBAL['baiviet'][$nametype]['img-height'] = 215;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = false;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['job'] = false;

$GLOBAL['baiviet'][$nametype]['seo'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

$GLOBAL['baiviet'][$nametype]['rating'] = false;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#==================================Tác giả====================================

$nametype = 'tac-gia';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tác giả';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách tác giả';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"hienthi" => "Hiển thị",

	"mucluc" => "Mục lục"

);

$GLOBAL['baiviet'][$nametype]['tag'] = true;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 100;

$GLOBAL['baiviet'][$nametype]['img-height'] = 100;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['link_facebook'] = true;

$GLOBAL['baiviet'][$nametype]['link_zalo'] = true;

$GLOBAL['baiviet'][$nametype]['link_twitter'] = true;

$GLOBAL['baiviet'][$nametype]['link_instagram'] = true;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['job'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

$GLOBAL['baiviet'][$nametype]['rating'] = false;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

//#========================Sản phẩm==================== 

$nametype = 'san-pham';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Sản phẩm';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục",

	"noibat" => "Nổi bật",

	"top_nb" => "check theo tháng",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['status'] = array();

$GLOBAL['baiviet'][$nametype]['slogan'] = false;

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 245;

$GLOBAL['baiviet'][$nametype]['img-height'] = 245;

$GLOBAL['baiviet'][$nametype]['product_attribute'] = true;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['img-b'] = false;

$GLOBAL['baiviet'][$nametype]['iframe_map'] = false;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['huong'] = false;

$GLOBAL['baiviet'][$nametype]['loaidat'] = false;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['rating'] = true;

$GLOBAL['baiviet'][$nametype]['dientich'] = false;

$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

$GLOBAL['baiviet'][$nametype]['multi-gallery-arr'] = array(

	$nametype => array(

		"title_main_photo" => "Hình ảnh kèm theo",

		"title_sub_photo" => "Hình ảnh",

		"width_photo" => 302,

		"height_photo" => 302,

		"thumb_width_photo" => 302,

		"thumb_height_photo" => 302,

		"thumb_ratio_photo" => 1,

		"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

	)

);

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['mota_khuyenmai'] = false;

$GLOBAL['baiviet'][$nametype]['mota-khuyenmai-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['tukhoa'] = false;

$GLOBAL['baiviet'][$nametype]['tukhoa-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tinhtrang'] = true;

$GLOBAL['baiviet'][$nametype]['text-search'] = true;

$GLOBAL['baiviet'][$nametype]['masp'] = true;

$GLOBAL['baiviet'][$nametype]['color'] = false;

$GLOBAL['baiviet'][$nametype]['size'] = false;

$GLOBAL['baiviet'][$nametype]['gia'] = true;

$GLOBAL['baiviet'][$nametype]['donvitinh'] = false;

$GLOBAL['baiviet'][$nametype]['giacu'] = true;

$GLOBAL['baiviet'][$nametype]['brand'] = false;

$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

$GLOBAL['baiviet'][$nametype]['baohanh'] = false;

$GLOBAL['baiviet'][$nametype]['title-seo'] = true;

$GLOBAL['baiviet'][$nametype]['keywords-seo'] = true;

$GLOBAL['baiviet'][$nametype]['description-seo'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tags'] = false;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// danh mục cấp 1

$GLOBAL['baiviet'][$nametype]['list'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list'] = array(

	"mucluc" => "Mục lục",

	"menu" => "Check trang chủ",

	"noibat" => "Nổi bật",

	"hienthi" => "Hiển thị"

);

$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 315;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 280;

$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 1440;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 770;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['id_brand'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

//danh mục cấp 2

// $GLOBAL['baiviet'][$nametype]['cat'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

// $GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat'] = array(

// 	"mucluc" => "Mục lục",

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 253;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 253;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// // Danh mục cấp 3

// $GLOBAL['baiviet'][$nametype]['item'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['title'] = 'Danh mục cấp 3';

// $GLOBAL_LEVEL3['baiviet'][$nametype]['full'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['check_item'] = array(

// 	"mucluc" => "Mục lục",

// 	"hienthi" => "Hiển thị"
// );

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-width'] = 253;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-height'] = 253;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-ratio'] = 2;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['mota'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['seo'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-qc'] = false;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


//#========================Quà tặng khác==================== 

$nametype = 'mau-nha-dep';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Mẫu nhà đẹp';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục",

	"noibat" => "Nổi bật",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['status'] = array();

$GLOBAL['baiviet'][$nametype]['slogan'] = false;

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['diachi'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 245;

$GLOBAL['baiviet'][$nametype]['img-height'] = 245;

$GLOBAL['baiviet'][$nametype]['product_attribute'] = true;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['img-b'] = false;

$GLOBAL['baiviet'][$nametype]['iframe_map'] = false;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['huong'] = false;

$GLOBAL['baiviet'][$nametype]['loaidat'] = false;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

// $GLOBAL['baiviet'][$nametype]['rating'] = true;

$GLOBAL['baiviet'][$nametype]['dientich'] = false;

$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

$GLOBAL['baiviet'][$nametype]['multi-gallery-arr'] = array(

	$nametype => array(

		"title_main_photo" => "Hình ảnh kèm theo",

		"title_sub_photo" => "Hình ảnh",

		"width_photo" => 302,

		"height_photo" => 302,

		"thumb_width_photo" => 302,

		"thumb_height_photo" => 302,

		"thumb_ratio_photo" => 1,

		"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

	)

);

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['mota_khuyenmai'] = false;

$GLOBAL['baiviet'][$nametype]['mota-khuyenmai-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['tukhoa'] = false;

$GLOBAL['baiviet'][$nametype]['tukhoa-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['text-search'] = true;

// $GLOBAL['baiviet'][$nametype]['masp'] = true;

// $GLOBAL['baiviet'][$nametype]['color'] = false;

// $GLOBAL['baiviet'][$nametype]['size'] = false;

// $GLOBAL['baiviet'][$nametype]['gia'] = true;

// $GLOBAL['baiviet'][$nametype]['donvitinh'] = false;

// $GLOBAL['baiviet'][$nametype]['giacu'] = true;

// $GLOBAL['baiviet'][$nametype]['brand'] = false;

// $GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

// $GLOBAL['baiviet'][$nametype]['baohanh'] = false;

$GLOBAL['baiviet'][$nametype]['title-seo'] = true;

$GLOBAL['baiviet'][$nametype]['keywords-seo'] = true;

$GLOBAL['baiviet'][$nametype]['description-seo'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tags'] = false;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// danh mục cấp 1

// $GLOBAL['baiviet'][$nametype]['list'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

// $GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['check_list'] = array(

// 	"mucluc" => "Mục lục",

// 	"menu" => "Check trang chủ",

// 	"noibat" => "Nổi bật",

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 315;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 280;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 1440;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 770;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['id_brand'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

// $GLOBAL_LEVEL1['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// //danh mục cấp 2

// $GLOBAL['baiviet'][$nametype]['cat'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

// $GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat'] = array(

// 	"mucluc" => "Mục lục",

// 	"hienthi" => "Hiển thị"

// );

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 253;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 253;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

// $GLOBAL_LEVEL2['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// // Danh mục cấp 3

// $GLOBAL['baiviet'][$nametype]['item'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['title'] = 'Danh mục cấp 3';

// $GLOBAL_LEVEL3['baiviet'][$nametype]['full'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['check_item'] = array(

// 	"mucluc" => "Mục lục",

// 	"hienthi" => "Hiển thị"
// );

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-width'] = 253;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-height'] = 253;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-ratio'] = 2;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['mota'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['noidung'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['seo'] = true;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-qc'] = false;

// $GLOBAL_LEVEL3['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';




#========================album==================== 

$nametype = 'album';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Album';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 190;

$GLOBAL['baiviet'][$nametype]['img-height'] = 190;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['link_cano'] = false;

$GLOBAL['baiviet'][$nametype]['schema'] = false;

$GLOBAL['baiviet'][$nametype]['tacgia'] = false;

$GLOBAL['baiviet'][$nametype]['index_robots'] = false;

$GLOBAL['baiviet'][$nametype]['mota'] = false;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['noidung'] = false;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = false;

$GLOBAL['baiviet'][$nametype]['seo'] = false;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

$GLOBAL['baiviet'][$nametype]['multi-gallery-arr'] = array(

	$nametype => array(

		"title_main_photo" => "Hình ảnh Sản phẩm",

		"title_sub_photo" => "Hình ảnh",

		"width_photo" => 500,

		"height_photo" => 500,

		"thumb_width_photo" => 500,

		"thumb_height_photo" => 500,

		"thumb_ratio_photo" => 1,

		"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

	)

);



#========================5 lý do==================== 

$nametype = '5-ly-do';

$GLOBAL['baiviet'][$nametype]['title_main'] = '5 lý do';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 305;

$GLOBAL['baiviet'][$nametype]['img-height'] = 280;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';
#========================5 lý do==================== 


#========================Tin tức==================== 

$nametype = 'blogs';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin tức & Sự kiện';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục",

	"noibat" => "Nổi bật",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 305;

$GLOBAL['baiviet'][$nametype]['img-height'] = 280;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// danh mục cấp 1

// $GLOBAL['baiviet'][$nametype]['list'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

// 		"mucluc"=> "Mục lục",

// 		"hienthi"=>"Hiển thị"

// 	);

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 393;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 262;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 45;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 45;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#========================Tin tức==================== 

#========================Dự án==================== 

$nametype = 'du-an';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Dự án';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"noibat" => "Nổi bật",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 305;

$GLOBAL['baiviet'][$nametype]['img-height'] = 280;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;
$GLOBAL['baiviet'][$nametype]['alias'] = true;


// $GLOBAL['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL['baiviet'][$nametype]['schema'] = true;

// $GLOBAL['baiviet'][$nametype]['tacgia'] = true;

// $GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;


$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

$GLOBAL['baiviet'][$nametype]['multi-gallery-arr'] = array(

	$nametype => array(

		"title_main_photo" => "Hình ảnh kèm theo",

		"title_sub_photo" => "Hình ảnh",

		"width_photo" => 302,

		"height_photo" => 302,

		"thumb_width_photo" => 302,

		"thumb_height_photo" => 302,

		"thumb_ratio_photo" => 1,

		"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

	)

);

// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tinhtrang'] = false;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// danh mục cấp 1

$GLOBAL['baiviet'][$nametype]['list'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'Tình trạng';

$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị"

);

$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 393;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 262;

$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 45;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 45;

$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#========================Dự án==================== 



#========================Câu hỏi==================== 

$nametype = 'cau-hoi';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Câu hỏi thường gặp';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"hienthi" => "Hiển thị"

);

// $GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 305;

$GLOBAL['baiviet'][$nametype]['img-height'] = 280;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

// $GLOBAL['baiviet'][$nametype]['link_cano'] = true;

// $GLOBAL['baiviet'][$nametype]['schema'] = true;

// $GLOBAL['baiviet'][$nametype]['tacgia'] = true;

// $GLOBAL['baiviet'][$nametype]['index_robots'] = true;

// $GLOBAL['baiviet'][$nametype]['mota'] = true;

// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;


// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

// $GLOBAL['baiviet'][$nametype]['alias'] = true;


$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



#========================Câu hỏi==================== 


$nametype = 'dich-vu';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Dịch vụ';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục",

	"noibat" => "Nổi bật",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 305;

$GLOBAL['baiviet'][$nametype]['img-height'] = 280;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// danh mục cấp 1

$GLOBAL['baiviet'][$nametype]['list'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị"

);

$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 393;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 262;

$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 45;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 45;

$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';



#========================Tin tức==================== 

$nametype = 'ho-tro';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Hỗ trợ khách hàng';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['img'] = false;

$GLOBAL['baiviet'][$nametype]['img-width'] = 40;

$GLOBAL['baiviet'][$nametype]['img-height'] = 40;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

##===================Về chúng tôi========================

$nametype = 'gioi-thieu';

$GLOBAL['info'][$nametype]['title_main'] = 'Giới thiệu';

$GLOBAL['info'][$nametype]['title'] = 'Giới thiệu chung';

$GLOBAL['info'][$nametype]['full'] = false;

$GLOBAL['info'][$nametype]['slogan'] = true;


$GLOBAL['info'][$nametype]['img'] = true;

$GLOBAL['info'][$nametype]['img-width'] = 1200;

$GLOBAL['info'][$nametype]['img-height'] = 410;

$GLOBAL['info'][$nametype]['img-ratio'] = 1;

$GLOBAL['info'][$nametype]['img-b'] = false;

$GLOBAL['info'][$nametype]['img-gallery'] = false;

$GLOBAL['info'][$nametype]['nguoidaidien'] = false;

$GLOBAL['info'][$nametype]['job'] = false;

$GLOBAL['info'][$nametype]['mota'] = true;

$GLOBAL['info'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['info'][$nametype]['noidung'] = true;

$GLOBAL['info'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['info'][$nametype]['link'] = false;

$GLOBAL['info'][$nametype]['seo'] = true;

$GLOBAL['info'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['info'][$nametype]['img-gallery'] = false;

$GLOBAL['info'][$nametype]['multi-gallery-arr'] = array(

	$nametype => array(

		"title_main_photo" => "Hình ảnh Sản phẩm",

		"title_sub_photo" => "Hình ảnh",

		"width_photo" => 500,

		"height_photo" => 500,

		"thumb_width_photo" => 500,

		"thumb_height_photo" => 500,

		"thumb_ratio_photo" => 1,

		"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

	)

);


##===================slider========================

$nametype = 'slider';

$GLOBAL['photo'][$nametype]['title_main'] = 'Slider';

$GLOBAL['photo'][$nametype]['title'] = 'Quản lý slider';

$GLOBAL['photo'][$nametype]['full'] = false;

$GLOBAL['photo'][$nametype]['video'] = false;

$GLOBAL['photo'][$nametype]['img'] = true;

$GLOBAL['photo'][$nametype]['img-width'] = 1440;

$GLOBAL['photo'][$nametype]['img-height'] = 595;

$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

$GLOBAL['photo'][$nametype]['slogan'] = false;

$GLOBAL['photo'][$nametype]['options'] = false;

$GLOBAL['photo'][$nametype]['tieuchi'] = false;

$GLOBAL['photo'][$nametype]['link'] = true;

$GLOBAL['photo'][$nametype]['link_tmp'] = false;

$GLOBAL['photo'][$nametype]['mota'] = false;

$GLOBAL['photo'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================Giấy chứng nhận============================

// $nametype = 'chung-nhan';

// $GLOBAL['photo'][$nametype]['title_main'] = 'Giấy chứng nhận';

// $GLOBAL['photo'][$nametype]['title'] = 'Quản lý giấy chứng nhận';

// $GLOBAL['photo'][$nametype]['full'] = false;

// $GLOBAL['photo'][$nametype]['video'] = false;

// $GLOBAL['photo'][$nametype]['img'] = true;

// $GLOBAL['photo'][$nametype]['img-width'] = 287;

// $GLOBAL['photo'][$nametype]['img-height'] = 360;

// $GLOBAL['photo'][$nametype]['img-ratio'] = 1;

// $GLOBAL['photo'][$nametype]['slogan'] = false;

// $GLOBAL['photo'][$nametype]['options'] = false;

// $GLOBAL['photo'][$nametype]['tieuchi'] = false;

// $GLOBAL['photo'][$nametype]['link'] = false;

// $GLOBAL['photo'][$nametype]['link_tmp'] = false;

// $GLOBAL['photo'][$nametype]['mota'] = false;

// $GLOBAL['photo'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#====================Slider============================

// $nametype = 'doi-tac';

// $GLOBAL['photo'][$nametype]['title_main'] = 'Đối tác';

// $GLOBAL['photo'][$nametype]['title'] = 'Quản lý Đối tác';

// $GLOBAL['photo'][$nametype]['full'] = false;

// $GLOBAL['photo'][$nametype]['video'] = false;

// $GLOBAL['photo'][$nametype]['img'] = true;

// $GLOBAL['photo'][$nametype]['img-width'] = 185;

// $GLOBAL['photo'][$nametype]['img-height'] = 90;

// $GLOBAL['photo'][$nametype]['img-ratio'] = 1;

// $GLOBAL['photo'][$nametype]['slogan'] = false;

// $GLOBAL['photo'][$nametype]['options'] = false;

// $GLOBAL['photo'][$nametype]['tieuchi'] = false;

// $GLOBAL['photo'][$nametype]['link'] = false;

// $GLOBAL['photo'][$nametype]['mota'] = false;

// $GLOBAL['photo'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#======================================Giới thiệu đầu trang=============================================================

$nametype = 'intro-top';

$GLOBAL['photo'][$nametype]['title_main'] = 'Danh sách header';

$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

$GLOBAL['photo'][$nametype]['full'] = false;

$GLOBAL['photo'][$nametype]['img'] = true;

$GLOBAL['photo'][$nametype]['img-width'] = 32;

$GLOBAL['photo'][$nametype]['img-height'] = 32;

$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

$GLOBAL['photo'][$nametype]['link'] = false;

$GLOBAL['photo'][$nametype]['numb'] = false;

$GLOBAL['photo'][$nametype]['phone'] = false;

$GLOBAL['photo'][$nametype]['mota'] = false;

$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================mạng xã hội============================

$nametype = 'mangxahoi';

$GLOBAL['photo'][$nametype]['title_main'] = 'Mạng xã hội';

$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

$GLOBAL['photo'][$nametype]['full'] = false;

$GLOBAL['photo'][$nametype]['img'] = true;

$GLOBAL['photo'][$nametype]['img-width'] = 22;

$GLOBAL['photo'][$nametype]['img-height'] = 22;

$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

$GLOBAL['photo'][$nametype]['link'] = true;

$GLOBAL['photo'][$nametype]['mota'] = false;

$GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#======================================Giới thiệu đầu trang=============================================================

$nametype = 'mangxahoi-footer';

$GLOBAL['photo'][$nametype]['title_main'] = 'Danh sách mạng xã hội footer';

$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

$GLOBAL['photo'][$nametype]['full'] = false;

$GLOBAL['photo'][$nametype]['img'] = true;

$GLOBAL['photo'][$nametype]['img-width'] = 50;

$GLOBAL['photo'][$nametype]['img-height'] = 50;

$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

$GLOBAL['photo'][$nametype]['color'] = true;

$GLOBAL['photo'][$nametype]['link'] = false;

$GLOBAL['photo'][$nametype]['numb'] = false;

$GLOBAL['photo'][$nametype]['phone'] = true;

$GLOBAL['photo'][$nametype]['mota'] = false;

$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

$GLOBAL['photo'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#====================logo============================

$nametype = 'logo';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Logo trang web';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 152;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 112;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================logo============================

#====================logo============================


#====================bg footer============================

$nametype = 'ha-lienhe';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh liên hệ';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh liên hệ';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 570;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 300;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================bg footer============================


#====================bg footer============================

#====================bg footer============================


#====================bg nền 5 lý do ============================

$nametype = 'bg-5-ly-do';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh nền 5 lý do';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý hình ảnh nền 5 lý do';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 600;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';



#====================bg nền 5 product ============================


$nametype = 'bg-img-service';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh nền dịch vụ';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý hình ảnh nền 5 lý do';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 600;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#====================bg footer============================



$nametype = 'img_bg_footer';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh nền Footer';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý image background footer';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 346;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


$nametype = 'img_footer';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh phụ Footer';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý image footer';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 561;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 457;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#===================================bg tin tức video===========================================================

$nametype = 'img_form_advise';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình nền đăng ký tư vấn';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý image footer';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 737;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#===================================bg tin tức video===========================================================

/* $nametype='popup';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh popup';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý hình ảnh popup';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 438;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 329;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'; */

#====================hình đại diện============================

$nametype = 'hinhdaidien';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh share link';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh share link';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 200;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 200;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================================================ĐĂNG KÝ NHẬN TIN====================================

$nametype = 'dat-hang';

$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký đặt hàng';

$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký đặt hàng';

$GLOBAL['booking'][$nametype]['ten'] = true;

$GLOBAL['booking'][$nametype]['full'] = true;

$GLOBAL['booking'][$nametype]['img'] = true;

$GLOBAL['booking'][$nametype]['img-width'] = 380;

$GLOBAL['booking'][$nametype]['img-height'] = 260;

$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

$GLOBAL['booking'][$nametype]['phone'] = true;

$GLOBAL['booking'][$nametype]['email'] = true;

$GLOBAL['booking'][$nametype]['product'] = true;

$GLOBAL['booking'][$nametype]['dichvu'] = false;

$GLOBAL['booking'][$nametype]['diachi'] = false;

$GLOBAL['booking'][$nametype]['noidung'] = false;

$GLOBAL['booking'][$nametype]['ngaytao'] = true;

$GLOBAL['booking'][$nametype]['seo'] = false;

$GLOBAL['booking'][$nametype]['img_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

#====================================================ĐĂNG KÝ NHẬN TIN====================================

$nametype = 'client';

$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký nhận tin';

$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký nhận tin';

$GLOBAL['booking'][$nametype]['ten'] = true;

$GLOBAL['booking'][$nametype]['full'] = true;

$GLOBAL['booking'][$nametype]['img'] = false;

$GLOBAL['booking'][$nametype]['img-width'] = 380;

$GLOBAL['booking'][$nametype]['img-height'] = 260;

$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

$GLOBAL['booking'][$nametype]['phone'] = true;

$GLOBAL['booking'][$nametype]['email'] = false;

$GLOBAL['booking'][$nametype]['product'] = false;

$GLOBAL['booking'][$nametype]['dichvu'] = false;

$GLOBAL['booking'][$nametype]['diachi'] = false;

$GLOBAL['booking'][$nametype]['noidung'] = true;

$GLOBAL['booking'][$nametype]['ngaytao'] = true;

$GLOBAL['booking'][$nametype]['seo'] = false;

$GLOBAL['booking'][$nametype]['img_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';


#========================Chính sách==================== 

$nametype = 'chinh-sach';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Chính sách';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['public'] = true;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục tự động",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['tag'] = true;

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 321;

$GLOBAL['baiviet'][$nametype]['img-height'] = 233;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['job'] = false;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

$GLOBAL['baiviet'][$nametype]['rating'] = false;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#========================Chính sách==================== 

$nametype = 'huong-dan';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Hướng dẫn mua hàng';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['public'] = true;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

$GLOBAL['baiviet'][$nametype]['check'] = array(

	"mucluc" => "Mục lục tự động",

	"hienthi" => "Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['tag'] = true;

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['img-width'] = 321;

$GLOBAL['baiviet'][$nametype]['img-height'] = 233;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['job'] = false;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tag'] = false;

$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

$GLOBAL['baiviet'][$nametype]['rating'] = false;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


#================================================Yêu cầu gọi lại======================================================================

$nametype = 'goi-lai';

$GLOBAL['booking'][$nametype]['title_main'] = 'Yêu cầu gọi lại';

$GLOBAL['booking'][$nametype]['title'] = 'Quản lý Yêu cầu gọi lại';

$GLOBAL['booking'][$nametype]['full'] = false;

$GLOBAL['booking'][$nametype]['img'] = true;

$GLOBAL['booking'][$nametype]['img-width'] = 380;

$GLOBAL['booking'][$nametype]['img-height'] = 260;

$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

$GLOBAL['booking'][$nametype]['phone'] = true;

$GLOBAL['booking'][$nametype]['email'] = false;

$GLOBAL['booking'][$nametype]['dichvu'] = false;

$GLOBAL['booking'][$nametype]['diachi'] = false;

$GLOBAL['booking'][$nametype]['noidung'] = false;

$GLOBAL['booking'][$nametype]['ngaytao'] = true;

$GLOBAL['booking'][$nametype]['seo'] = false;

$GLOBAL['booking'][$nametype]['img_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

#====================company============================

$nametype = 'lien-he';

$GLOBAL['company'][$nametype]['title_main'] = 'liên hệ';

$GLOBAL['company'][$nametype]['title'] = 'Quản lý liên hệ';

$GLOBAL['company'][$nametype]['full'] = false;

$GLOBAL['company'][$nametype]['img'] = true;


$GLOBAL['company'][$nametype]['link'] = false;

$GLOBAL['company'][$nametype]['img_type'] = '.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';



$GLOBAL['company'][$nametype]['img-width'] = 380;

$GLOBAL['company'][$nametype]['img-height'] = 260;

$GLOBAL['company'][$nametype]['img-ratio'] = 1;

$GLOBAL['company'][$nametype]['link'] = true;

$GLOBAL['company'][$nametype]['mota'] = true;

$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['company'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#====================company============================

// $nametype = 'footer';

// $GLOBAL['company'][$nametype]['title_main'] = 'Mô tả liên hệ footer';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả liên hệ footer';

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = true;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================company============================

// $nametype = 'des-detail';

// $GLOBAL['company'][$nametype]['title_main'] = 'Mô tả chi tiết sản phẩm';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả chi tiết sản phẩm';

// $GLOBAL['company'][$nametype]['ten'] = false;

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = true;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================company============================

// $nametype = 'des-dangky';

// $GLOBAL['company'][$nametype]['title_main'] = 'Mô tả đăng ký';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả đăng ký';

// $GLOBAL['company'][$nametype]['ten'] = true;

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = false;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#====================company============================

// $nametype = 'desc-process';

// $GLOBAL['company'][$nametype]['title_main'] = 'Mô tả quy trình';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả quy trình';

// $GLOBAL['company'][$nametype]['ten'] = true;

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = true;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#====================company============================

// $nametype = 'desc-chungnhan';

// $GLOBAL['company'][$nametype]['title_main'] = 'Mô tả chứng nhận';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả chứng nhận';

// $GLOBAL['company'][$nametype]['ten'] = true;

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = true;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#====================company============================

// $nametype = 'des-news';

// $GLOBAL['company'][$nametype]['title_main'] = 'Mô tả tin tức';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả tin tức';

// $GLOBAL['company'][$nametype]['ten'] = false;

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = true;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================company============================

// $nametype = 'thong-tin';

// $GLOBAL['company'][$nametype]['title_main'] = 'Mô tả thông tin kho xưởng';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả thông tin kho xưởng';

// $GLOBAL['company'][$nametype]['ten'] = false;

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = false;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================company============================

// $nametype = 'des-footer';

// $GLOBAL['company'][$nametype]['title_main'] = 'Mô tả footer';

// $GLOBAL['company'][$nametype]['title'] = 'Quản lý mô tả footer';

// $GLOBAL['company'][$nametype]['ten'] = false;

// $GLOBAL['company'][$nametype]['full'] = false;

// $GLOBAL['company'][$nametype]['upload'] = false;

// $GLOBAL['company'][$nametype]['img'] = false;

// $GLOBAL['company'][$nametype]['img-width'] = 380;

// $GLOBAL['company'][$nametype]['img-height'] = 260;

// $GLOBAL['company'][$nametype]['img-ratio'] = 1;

// $GLOBAL['company'][$nametype]['link'] = true;

// $GLOBAL['company'][$nametype]['mota'] = true;

// $GLOBAL['company'][$nametype]['mota-ckeditor'] = true;

// $GLOBAL['company'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// #====================HotLine============================

// $nametype = "hotline";
// $GLOBAL['map'][$nametype]['title_main'] = 'Hotline';
// $GLOBAL['map'][$nametype]['title'] = 'Quản lý hotline';
// $GLOBAL['map'][$nametype]['phone'] = true;
// $GLOBAL['map'][$nametype]['mota'] = false;
// $GLOBAL['map'][$nametype]['email'] = false;
// $GLOBAL['map'][$nametype]['iframe_map'] = true;

#====================setting============================
$GLOBAL['setting']['tieude'] = false;

$GLOBAL['setting']['diachi'] = true;

$GLOBAL['setting']['chaychu1'] = false;

$GLOBAL['setting']['chaychu2'] = false;

$GLOBAL['setting']['slogan'] = false;

$GLOBAL['setting']['mota'] = false;

$GLOBAL['setting']['timework'] = false;

$GLOBAL['setting']['time'] = false;

$GLOBAL['setting']['email'] = true;

$GLOBAL['setting']['hotline'] = true;

$GLOBAL['setting']['hotline-advance'] = true;

$GLOBAL['setting']['page_video'] = false;

$GLOBAL['setting']['dienthoai'] = true;

$GLOBAL['setting']['page_in'] = true;

$GLOBAL['setting']['page_service'] = false;

$GLOBAL['setting']['page_new'] = true;

$GLOBAL['setting']['page_album'] = false;

$GLOBAL['setting']['pagein_project'] = false;

$GLOBAL['setting']['page_ne'] = true;

$GLOBAL['setting']['page_sp'] = true;

$GLOBAL['setting']['page_sp_m'] = true;

$GLOBAL['setting']['postalcode'] = true;

$GLOBAL['setting']['tax_code'] = false;

$GLOBAL['setting']['blank'] = false;

$GLOBAL['setting']['denominator'] = false;

$GLOBAL['setting']['symbol'] = false;

$GLOBAL['setting']['code'] = false;

$GLOBAL['setting']['city'] = true;

$GLOBAL['setting']['district'] = true;

$GLOBAL['setting']['message'] = true;

$GLOBAL['setting']['counter'] = false;

$GLOBAL['setting']['zalo'] = true;

$GLOBAL['setting']['website'] = true;

$GLOBAL['setting']['laisuat'] = false;

$GLOBAL['setting']['phivanchuyen'] = false;

$GLOBAL['setting']['toado'] = true;

$GLOBAL['setting']['seo'] = true;

$GLOBAL['setting']['iframe'] = true;

$GLOBAL['setting']['iframe1'] = true;

$GLOBAL['setting']['fanpage'] = true;

$GLOBAL['setting']['copyright'] = false;

$GLOBAL['setting']['faceid'] = true;

$GLOBAL['setting']['toc'] = true;

$GLOBAL['setting']['block'] = false;

$GLOBAL['setting']['time_slider'] = false;

$GLOBAL['setting']['slider'] = false;

$GLOBAL['setting']['title_page'] = true;

$GLOBAL['setting']['links'] = true;

$GLOBAL['setting']['videofile'] = false;

$GLOBAL['setting']['slide'] = false;

$GLOBAL['setting']['link_blog'] = false;

$GLOBAL['setting']['nonecopy'] = false;

$GLOBAL['setting']['background'] = true;

$GLOBAL['setting']['watermark'] = false;

$GLOBAL['setting']['slider_video'] = false;

$GLOBAL['setting']['tag'] = false;

$GLOBAL['setting']['changedola'] = false;

$GLOBAL['setting']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
