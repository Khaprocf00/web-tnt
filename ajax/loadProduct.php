<?php

    require_once 'ajaxConfig.php';

    $page = isset($_POST["page"]) ? $_POST["page"] : 0;

    $perPage = isset($_POST["perPage"]) ? $_POST["perPage"] : 0;

    $type = isset($_POST["type"]) ? $_POST["type"] : '';

    $check = isset($_POST["check"]) ? $_POST["check"] : '';
    
    $idl = isset($_POST["idl"]) ? $_POST["idl"] : '';

    $idc = isset($_POST["idc"]) ? $_POST["idc"] : '';

    $idi = isset($_POST["idi"]) ? $_POST["idi"] : '';

    $heading = isset($_POST["hd"]) ? $_POST["hd"] : '';

    $where = "";

    if($idl!=0){

        $where .= " and id_list={$idl}";

    }

    if($idc!=0){

        $where .= " and id_cat={$idc}";

    }

    if($idi!=0){

        $where .= " and id_item={$idi}";

    }

    if($check!=''){

        $where .= " and noibat=1";

    }
   
    $totalItem  = $db->rawQueryOne("select count(id) as total from #_baiviet where hienthi=1 and type=? {$where}",array($type)); 

    $numbtotal = ceil($totalItem["total"] - ($perPage * $page));

    $pageDetail = $page - 1;

    $startPoint = $pageDetail * $perPage;

    $query = "select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and type=? {$where} order by id desc limit $startPoint,$perPage";

    $sanpham = $db->rawQuery($query,array($type));

    $html = "";

    if(count($sanpham)>0){

        foreach($sanpham as $key => $vvd){

            $seoDB = $seo->getSeoDB($vvd['id'],'baiviet','man',$vvd["type"]);
            $rating=$func->getRatingComment($vvd['rating']);
            $sale=$func->percentPrice($vvd['giacu'],$vvd['giaban']);
            $giaban=($vvd['giaban']!=0) ? $func->changeMoney($vvd['giaban'],$lang) : 'Liên hệ';
            $giacu=($vvd['giacu']!=0) ? $func->changeMoney($vvd['giacu'],$lang) : 'Đang cập nhật';
            $hotline = str_replace('.','',str_replace(' ','',$row_setting['hotline']));
            $keyWow = $key+1;
            $wowDeplay = "0.{$keyWow}s";
            $subject = $func->getTags($vvd["tags"],'bo-mon');

            if($sale>0){ 

                $str ="<span class='section-outstanding__box-images-sale p-absolute'>- {$sale}</span>";

            }

            $cart = "";

            if($deviceType == 'computer'){

                $cart = "<span class='js-addcart' data-id='{$vvd["id"]}' data-qty='1'><i class='fa-regular fa-cart-plus'></i> Thêm vào giỏ</span>";
          
            }else{

                $cart = "<span class='js-addcart' data-id='{$vvd["id"]}' data-qty='1'><i class='fa-regular fa-cart-plus'></i></span>";
        
            }
                
            $html.="<div class='col l-3 m-4 c-6 mb20 mb-m-8 fadeInDown wow' data-wow-delay='{$wowDeplay}'>
                <div class='section-outstanding__box'>
                    <div class='section-outstanding__box-images p-relative'>
                        <a href='{$func->getUrl($vvd)}' title='{$vvd["ten_$lang"]}' class='cubic-img d-block hover-left ratio-cover ratio-img'
                            role='link' rel='dofollow' img-width='245' img-height='245'>
                            <img class='ratio-img__content img-scale' width='245' height='245' data-src='"._upload_baiviet_l.$vvd['photo']."' src='{$imgDefault}' alt='{$vvd["ten_$lang"]}'>                                   
                        </a>
                        {$str} 
                    </div>
                    <div class='section-outstanding__box-content'>
                        <div class='section-outstanding__box-content-title mt10'>
                            <h6 class='line-2'>
                                <a href='{$func->getUrl($vvd)}' title='{$vvd["ten_$lang"]}'>{$vvd["ten_$lang"]}</a>
                            </h6>
                        </div>
                        <div class='section-outstanding__box-content-rating mb5'>
                            {$rating}
                        </div>
                        <div class='section-outstanding__box-content-des line-2 mb15'>
                            {$seoDB["description_$lang"]}
                        </div>
                        <div class='section-outstanding__box-content-price d-flex align-items-center justify-content-between'>
                            <div>                               
                                <span>{$giaban}</span>                            
                            </div>
                            <div>
                                {$cart}
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
        }

        $res["html"] = $html;

        $res["status"] = 200;

        $res["numb"] = $numbtotal;

        $res["button"] = "Xem thêm ($numbtotal) sản phẩm";

    }else{

        $res["status"] = 201;

    }

    echo json_encode($res);

?>