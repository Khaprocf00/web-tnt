<?php

  require_once 'ajaxConfig.php';

  include_once "class_paging_ajax.php";

  if(isset($_REQUEST["page"]))

    {
      $idcat = "";
      
      $cond = [];

      $idlist = "";
      if($_REQUEST["id_list"]>0){
        $idlist = " and id_list= ?";
        array_push($cond,$_REQUEST["id_list"]);
      }
      if($_REQUEST["id_cat"]>0){
        $idcat = " and id_cat = ? ";
        array_push($cond,$_REQUEST["id_cat"]);
      }

      $type = $_REQUEST['type'];

      array_push($cond,$type);

      $str_van = "select *, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 ".$idlist." ".$idcat." and noibat=1 and type=? order by id desc";
  
      $paging = new paging_ajax();

      $paging->class_pagination = "pagination";

      $paging->class_active = "active";

      $paging->class_inactive = "inactive";

      $paging->class_go_button = "go_button";

      $paging->class_text_total = "total";

      $paging->class_txt_goto = "txt_go_button";

      $paging->cond = $cond;

      $paging->per_page = $_REQUEST['per_page'];   

      $sotrang=$_REQUEST['per_page'];

      $paging->page = $_REQUEST["page"];

      $paging->text_sql = $str_van;

      $result_pag_data = $paging->GetResult();

      $hotlineDetail = str_replace(' ','',str_replace(',','',$row_setting["hotline"]));

      $total= $paging->getRow() - $_REQUEST['per_page'];
      
    }

?>

<div class="row" id="products-view<?=$_REQUEST["id_list"]?>">

    <?php

    if(count($result_pag_data)>0){

      // echo $func->gridTemplateProduct($result_pag_data,'refrigeration','col l-3 m-4 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column fadeInDown wow','h4','291','291');

      foreach ($result_pag_data as $key => $v){ 
        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
        ?>

        <div class="col l-3 m-4 c-6 mb20 mb-m-8 fadeInDown wow" data-wow-delay="0.<?=$key+1?>s">
            <div class="section-outstanding__box">
                <div class="section-outstanding__box-images o-hidden p-relative">
                    <a href="<?=$func->getUrl($v)?>" title="<?=$v["ten"]?>"
                        class="cubic-img d-block hover-left ratio-cover ratio-img" role="link" rel="dofollow"
                        img-width="290" img-height="290">
                        <img class="ratio-img__content img-scale" width="290" height="290"
                            data-src="<?=_upload_baiviet_l.$v["photo"]?>" src="<?=$imgDefault?>" alt="<?=$v["ten"]?>">
                    </a>
                    <?php if($func->percentPrice($v["giacu"],$v["giaban"])>0){ ?>
                    <span class="section-outstanding__box-images-sale p-absolute">-
                        <?=$func->percentPrice($v["giacu"],$v["giaban"])?></span>
                    <?php }?>
                    <div class="res--mask--cart">
                        <span class="js-addcart" data-id="<?=$v["id"]?>" data-qty="1">
                            Thêm vào giỏ hàng
                        </span>
                    </div>
                </div>
                <div class="section-outstanding__box-content">
                    <div class="section-outstanding__box-content-title mt10">
                        <h6 class="line-2">
                            <a href="<?=$func->getUrl($v)?>" title="<?=$v["ten"]?>"><?=$v["ten"]?></a>
                        </h6>
                    </div>
                    <div class="section-outstanding__box-content-price d-flex align-items-center justify-content-between">
                        <div>
                            <?php if($v['giaban'] != 0) {?>
                            <span class="price--primary"><?=$func->changeMoney($v['giaban'],$lang)?></span>
                            <?php if($v['giacu'] !=0 ){?>
                            <span class="price--second"><?=$func->changeMoney($v['giacu'],$lang)?></span>
                            <?php } ?>
                            <?php }else{ ?>
                            <span class="price--primary">Liên hệ</span>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    <?php }else{ ?>
        <div class="col l-12 c-12 m-12 t-center">
            <p style="Arial, Helvetica, sans-serif;">Nội dung đang được cập nhật...</p>
        </div>
    <?php }?>
</div>

<?php if($paging->getRow()>$_REQUEST['per_page']){?>
<div class="row">
    <div class="col l-12 m-12 c-12 t-center mt20 mt-m-10">
        <div class="section-product__box-btn">
            <a href="javascript:void(0)" class="seeMore__load seeMore__load<?=$_REQUEST["id_list"]?>" title="Xem thêm"
                data-box=".seeMore__load<?=$_REQUEST["id_list"]?>" data-type="san-pham" data-page="2"
                data-perpage="<?=$_REQUEST["per_page"]?>" data-target="#products-view<?=$_REQUEST["id_list"]?>"
                data-check="noibat" data-idlist="<?=$_REQUEST["id_list"]?>" data-idcat="<?=$_REQUEST["id_cat"]?>">Xem
                thêm (<?=$total?>) sản phẩm</a>
        </div>
    </div>
</div>
<?php }?>