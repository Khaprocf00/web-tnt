<?php if($banner_tpl){ ?>

<section class="starceiling-banner__allpage p-relative" style="background:url('<?=_upload_hinhanh_l.$banner_tpl["photo"]?>') no-repeat center center/cover;background-attachment: fixed;">

    <div class="starceiling-title__tpl">

         <h1 class="mg0">

            <span>

                <?php if($seo->getSeo('h1') != ""){?>
                <?=$seo->getSeo('h1')?>
                <?php }else{ echo $title_seo;}?>

            </span>

        </h1>

    </div>

    <div class="starceiling-banner__breadcumb">

        <div class="grid wide">

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <div class="breadcumb">

                        <?=$str_breadcrumbs?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php }?>

<section class="mt30 mt-m-20">

    <div class="grid wide">
        
        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="title-default t-center mb30 p-relative">

                    <h1>

                        <span>

                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>

                        </span>

                    </h1>

                </div>

            </div>

            <?php if($seo->getSeo('subject')!=''){ ?>

            <div class="col l-12 m-12 c-12">

                <div class="box-description mt20">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>

            </div>

            <?php }?>

        </div>

        <div class="mt10">

            <div class="row">

                <?php if(count($list_tags)>0){ ?>

                <div class="col l-12 m-12 c-12 mb20">

                    <div class="row align-items-center justify-content-center">
                        <span class="list_tags-nav" data-prev><i class="fa-light fa-caret-left"></i></span>
                        <ul class="d-flex align-items-center list_tags">

                            <?php foreach($list_tags as $key => $value) {?>

                                <li class="<?php if($com=="bo-mon" && $idl==$value['id']) echo 'active';?>">
                                    <h3>
                                        <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" title="<?=$value["te"]?>"
                                            aria-label="<?=$value["ten"]?>"
                                            role="link" rel="dofollow"><?=$value["ten"]?>
                                        </a>
                                    </h3>
                                </li>

                            <?php }?>

                        </ul>
                        <span class="list_tags-nav" data-next><i class="fa-light fa-caret-right"></i></span>

                    </div>

                </div>

                <?php }?>

                <div class="col l-12 m-12 c-12">

                    <?php if(count($tintuc)>0){?>

                    <div class="wrapper-form-right__title wrapper-form-right__title--product">

                        <span>DANH SÁCH SẢN PHẨM</span>

                    </div>

                    <div class="row" id="wrap__product">  

                        <?php
                            
                        /**
                         * 
                         * Function gridTemplateProduct(data, classBem, Column(Chia cột), thẻ H, ratio Width, ratio H, class để chỉnh sửa tách css(mặc định null))
                         * 
                        */    
                            
                        ?>

                        <?=$func->gridTemplateProduct($tintuc,'section','col l-2-4 m-2-4 c-6 mb20 mb-b-16 mb-m-8 d-flex flex-column','h3','253','253')?>

                    </div>

                    <div class="row">

                        <div class="col l-12 m-12 c-12 justify-content-center mb20 mt20">

                            <div id="paging" class="t-center"><?=$func->getLoadMore($total_paging,$per_page,$page,'sản phẩm')?></div>

                        </div>

                    </div>

                    <?php }?>

                </div>

            </div>

            <?php if($seo->getSeo('content')!=''){ ?>

            <div class="row">

                <div class="col l-12 m-12 c-12">

                   <div class="wrapper-toc mt10">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

                </div>
            </div>

            <?php }?>

        </div>

    </div>

</section>