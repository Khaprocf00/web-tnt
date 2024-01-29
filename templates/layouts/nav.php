<ul class="nav-menu d-flex align-items-center justify-content-center nav-menu-line p-relative">
    <li class="<?php if($com=='' || $com=='index') echo ' active';?>">
        <?php if($source=='index'){?>
        <h2>
            <?php } ?>
            <a href="" title="Trang chủ" rel="dofollow">Trang chủ</a>
            <?php if($source=='index'){ ?>
        </h2>
        <?php }?>
    </li>

    <li class="<?php if($com=='gioi-thieu') echo ' active';?> p-relative">

        <?php if($source=='index'){?>

        <h2>

            <?php }?>

            <a href="gioi-thieu" title="Giới thiệu" rel="dofollow">
                <span>Giới thiệu</span>
            </a>

            <?php if($source=='index'){?>

        </h2>

        <?php }?>

    </li>

    <li class="p-relative<?php if($com=='san-pham') echo ' active';?>">
        <?php if($source=='index'){?>
        <h2>
            <?php }?>
            <a href="san-pham" title="Sản phẩm" rel="dofollow">
                <span>Sản phẩm</span>
            </a>
            <?php if($source=='index'){?>
        </h2>
        <?php }?>
        <?php  if(count($sanpham_list)>0){?>

        <ul class="">

            <?php foreach($sanpham_list as $k => $v){

                $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($v['id']));
            
            ?>
            <li class="p-relative">

                <?php if($source=='index'){?>

                <h3 class="mg0">

                    <?php }?>

                    <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>" role="link" rel="dofollow"
                        aria-label="<?=$v["ten"]?>" title="<?= $v['ten']?>"><?= $v['ten']?></a>

                    <?php if($source=='index'){?>

                </h3>

                <?php }?>

                <?php if(count($c2)>0){?>

                <ul>

                    <?php

                foreach($c2 as $key =>$vc2){

                    $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_cat=? order by stt asc,id desc",array($vc2['id']));

                ?>
                    <li class="p-relative">

                        <?php if($source=='index'){?>

                        <h4 class="mg0">

                            <?php }?>

                            <a href="<?= $v['type']?>/<?= $vc2['tenkhongdau']?>" rel="dofollow"
                                title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>

                            <?php if($source=='index'){?>

                        </h4>

                        <?php }?>

                        <?php if(count($c3)>0){ ?>

                        <ul>

                            <?php
                            foreach($c3 as $key =>$vc3){
                        ?>
                            <li>

                                <?php if($source=='index'){?>

                                <h5>

                                    <?php }?>

                                    <a href="<?= $v['type']?>/<?= $vc3['tenkhongdau']?>" role="link" rel="dofollow"
                                        title="<?= $vc3['ten']?>"><?= $vc3['ten']?></a>

                                    <?php if($source=='index'){?>

                                </h5>

                                <?php }?>

                            </li>

                            <?php } ?>

                        </ul>

                        <?php }?>

                    </li>

                    <?php } ?>

                </ul>

                <?php } ?>

            </li>

            <?php }?>

        </ul>

        <?php } ?>
    </li>
    <li class="p-relative">

        <?php if($source=='index'){?>

        <h2>

            <?php }?>

            <a href="qua-tang" title="Quà tặng khác" rel="dofollow" aria-label="Quà tặng khác" role="link">
                <span>Quà tặng khác</span>
            </a>

            <?php if($source=='index'){?>

        </h2>

        <?php }?>

        <?php  if(count($quatang_list)>0){?>

        <ul class="">

            <?php foreach($quatang_list as $k => $v){

                $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($v['id']));
            
            ?>
            <li class="p-relative">

                <?php if($source=='index'){?>

                <h3 class="mg0">

                    <?php }?>

                    <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>" role="link" rel="dofollow"
                        aria-label="<?=$v["ten"]?>" title="<?= $v['ten']?>"><?= $v['ten']?></a>

                    <?php if($source=='index'){?>

                </h3>

                <?php }?>

                <?php if(count($c2)>0){?>

                <ul>

                    <?php

                        foreach($c2 as $key =>$vc2){

                            $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_cat=? order by stt asc,id desc",array($vc2['id']));

                    ?>
                    <li class="p-relative">

                        <?php if($source=='index'){?>

                        <h4 class="mg0">

                            <?php }?>

                            <a href="<?= $v['type']?>/<?= $vc2['tenkhongdau']?>" rel="dofollow"
                                title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>

                            <?php if($source=='index'){?>

                        </h4>

                        <?php }?>

                        <?php if(count($c3)>0){ ?>

                        <ul>

                            <?php
                                foreach($c3 as $key =>$vc3){
                            ?>
                            <li>

                                <?php if($source=='index'){?>

                                <h5>

                                    <?php }?>

                                    <a href="<?= $v['type']?>/<?= $vc3['tenkhongdau']?>" role="link" rel="dofollow"
                                        title="<?= $vc3['ten']?>"><?= $vc3['ten']?></a>

                                    <?php if($source=='index'){?>

                                </h5>

                                <?php }?>

                            </li>

                            <?php } ?>

                        </ul>

                        <?php }?>

                    </li>

                    <?php } ?>

                </ul>

                <?php } ?>

            </li>

            <?php }?>

        </ul>

        <?php } ?>

    </li>
    <li class="<?php if($com=='dich-vu') echo ' active';?> p-relative">

        <?php if($source=='index'){?>

        <h2>

            <?php }?>

            <a href="dich-vu" title="Dịch vụ" rel="dofollow">
                <span>Dịch vụ</span>
            </a>

            <?php if($source=='index'){?>

        </h2>

        <?php }?>

    </li>

    <li class="<?php if($com=='blogs') echo ' active';?> p-relative">

        <?php if($source=='index'){?>

        <h2>

            <?php }?>

            <a href="blogs" title="Blogs" rel="dofollow">
                <span>Blogs</span>
            </a>

            <?php if($source=='index'){?>

        </h2>

        <?php }?>

    </li>
    <li class="<?php if($com=='tuyen-dung') echo ' active';?> p-relative">

        <?php if($source=='index'){?>

        <h2>

            <?php }?>

            <a href="tuyen-dung" title="Tuyển dụng" rel="dofollow">
                <span>Tuyển dụng</span>
            </a>

            <?php if($source=='index'){?>

        </h2>

        <?php }?>

    </li>

    <li class="<?php if($com=='lien-he') echo ' active';?> p-relative">

        <?php if($source=='index'){?>

        <h2>

            <?php }?>

            <a href="lien-he" title="Liên hệ" rel="dofollow">
                <span>Liên hệ</span>
            </a>

            <?php if($source=='index'){?>

        </h2>

        <?php }?>

    </li>

    <li class="p-relative items-lastchild">

        <a href="javascript:void(0)" class="d-flex align-items-center justify-content-center" title="Tìm kiếm">
            <span class="search-Click cs-pointer" id="SeachOnClick">

                <i style="font-size: 18px" class="fa-light fa-magnifying-glass"></i>

            </span>

            <div class="nav-menu__formsearchheader d-flex align-items-center">

                <input role="search-input" type="text" name="keywords" id="keywordspc" placeholder="Tìm kiếm...">

                <button class="nav-menu__formsearchheader-button" data-btn-search-pc type="submit"><i
                        class="fa-regular fa-magnifying-glass"></i></button>

            </div>
        </a>

    </li>

</ul>