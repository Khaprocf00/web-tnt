<?php 

    $doitac = $func->AllDataPhoto("ten_$lang as ten,mota_$lang as mota,link,",'doi-tac','','array');

?>

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

<section class="mt40 mt-m-20">

    <div class="grid wide">
        
        <div class="row">

            <?php /* <div class="col l-12 m-12 c-12 mb-m-40 mt-m-30">

                <div class="title-default t-center mb40 p-relative">

                    <h1>

                        <span>

                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>

                        </span>

                    </h1>

                </div>

            </div> */ ?>

            <?php if($seo->getSeo('subject')!=''){ ?>

            <div class="col l-12 m-12 c-12">

                <div class="box-description mt20">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>

            </div>

            <?php }?>

        </div>

        <div class="mt30 mt-m-20">

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <?php if(count($doitac)>0){?>

                    <div class="row" id="wrap__product">  

                        <?php foreach($doitac as $k => $v) {?>
                            <div class="col l-2-4 m-3 c-6 mb20 mb-m-8">
                                <div class="wrap__partner">
                                    <div class="wrap__partner-images">
                                        <a target="_blank" href="<?=$v["link"]?>" title="<?=$v["ten"]?>" aria-label="<?=$v["ten"]?>" role="link"
                                            rel="dofollow" img-width="200" img-height="100"
                                            class="d-block ratio-cover ratio-img hover-left">

                                            <img class="ratio-img__content img-scale scale-down" width="200" height="100" src="<?=$imgDefault?>" data-src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="<?=$v["ten"]?>">

                                        </a>
                                    </div>
                                </div>
                            </div> 
                        <?php }?>                   

                    </div>

                    <div class="row">

                        <div class="col l-12 m-12 c-12 justify-content-center mb20 mt20">

                            <div id="paging" class="t-center"><?=$func->getLoadMore($total_paging,$per_page,$page,'bài viết')?></div>

                        </div>

                    </div>

                    <?php }?>

                </div>

            </div>

            <?php if($seo->getSeo('content')!=''){ ?>

            <div class="row">

                <div class="wrapper-toc mt10">

                    <div class="content ul-list-detail">

                        <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                    </div>

                </div>

            </div>

            <?php }?>

        </div>

    </div>

</section>