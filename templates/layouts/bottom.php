<?php

    $policy = $func->AllData('id,id_list,','chinh-sach','',"",'array');

    $online_information = $func->OneDataDes('online-information','array');

?>

<div class="item col-3 d-none-m d-none-tablet">

    <div class="">

        <div class="wrapper-catagory">
                    
            <div class="wrapper-catagory__title mb10">

                <span><i class="pr10 fa-regular fa-bars"></i> Danh mục sản phẩm</span>

            </div>
            
            <ul class="wrapper-catagory__list p-relative">

                <?php foreach($list_c1_sp as $k1 => $v1) {
                    $list_c2_menu = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and type=? and id_list=? order by stt asc",array('san-pham', $v1['id']));
                    ?>

                <li>

                    <div class="js-droptabdetail d-flex justify-content-between align-items-center">

                        <a class="list-c1" href="<?=$v1["type"]?>/<?=$v1["tenkhongdau"]?>" title="<?=$v1["ten"]?>">

                            <img width="25" height="25" src="<?=_upload_baiviet_l.$v1["icon"]?>" alt="<?=$v1["ten"]?>"> <?=$v1["ten"]?>

                        </a> 
                        
                        <?php if($list_c2_menu) { ?> <i class="fa-solid fa-angle-down"></i> <?php }?>

                    </div>

                    <?php if($list_c2_menu) { ?>                              

                        <ul class="ul-c2">

                            <?php foreach($list_c2_menu as $k2 => $v2) { 
                                $list_c3_menu = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_item where hienthi=1 and type=? and id_list=? and id_cat=? order by stt asc",array('san-pham', $v1['id'], $v2['id']));

                                ?>

                                <li>

                                    <div class="js-droptabdetail2 d-flex justify-content-between align-items-center">

                                        <a class="list-c2" href="<?=$v2["type"]?>/<?=$v2["tenkhongdau"]?>" title="<?=$v2["ten"]?>"><?=$v2["ten"]?></a>
                
                                        <?php if($list_c3_menu) { ?> <span> <i class="fa-regular fa-angle-down"></i> </span><?php }?>
                                    
                                    </div>

                                    <ul class="ul-c3">
                                            
                                        <?php foreach($list_c3_menu as $k3 => $v3) { ?>

                                            <li>

                                                <a class="list-c3" href="<?=$v3["type"]?>/<?=$v3["tenkhongdau"]?>" title="<?=$v3["ten"]?>"><?=$v3["ten"]?></a>

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

</div>