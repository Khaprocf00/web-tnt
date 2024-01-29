<nav class="wrapper-nav__menu scroll-fixed d-none-m d-none-tablet <?php if($source == 'index') echo 'mb5'; ?>">

    <div class="grid wide">

        <div class="row align-items-center">
            

            <div class="col l-3 m-3 c-12 t-center"> 

                <div class="wrapper-header__menu-product d-flex justify-content-center align-items-center p-relative">
                    
                    <img src="./assets/images/icon/menu_21.svg" alt="Icon">

                    <span class="p-relative"><a class="pr20" href="san-pham" title="Danh mục sản phẩm">Danh mục sản phẩm</a></span>
                    
                    <div class="wrapper-header__menu-product-menu p-absolute">

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
                                        
                                        <a class="list-c1" href="<?=$v1["type"]?>/<?=$v1["tenkhongdau"]?>" title="<?=$v1["ten"]?>"><?=$v1["ten"]?></a> 
                                        
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

                                                        <a class="list-c2" href="<?=$v2["type"]?>/<?=$v2["tenkhongdau"]?>" title="<?=$v2["ten"]?>"><?=$v2["ten"]?></a>
                                
                                                        <?php if($list_c3_menu) { ?> <span> <i class="fa-regular fa-angle-down"></i> </span><?php }?>
                                                
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

                                                                <a class="list-c3" href="<?=$v3["type"]?>/<?=$v3["tenkhongdau"]?>" title="<?=$v3["ten"]?>"><?=$v3["ten"]?></a>
                                                            
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

            </div>

            <div class="col l-9 m-9 c-12">

                <?php include_once _layouts."nav.php"; ?>

            </div>

        </div>

    </div>

</nav>