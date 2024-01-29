<?php if(count($list_main)>0){
    $page_in=($deviceType=='computer') ? $row_setting["page_in"] : $row_setting["page_sp_m"];    
?>

<?php foreach($list_main as $k => $vl){
    
    $productForList=$db->rawQuery("select id,id_list,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,icon,type from #_baiviet where hienthi=1 and noibat<>0 and id_list=? and type=? order by id desc limit {$page_in}",[$vl['id'],$vl["type"]]);
    
    $countProductForList=$db->rawQueryOne("select COUNT(*) as `sum` from #_baiviet where hienthi=1 and noibat<>0 and id_list=? and type=? order by id desc",[$vl['id'],$vl["type"]]);

    $total_paging=(int)$countProductForList['sum'] - count($productForList);

?>

<section class="section--list--main pt30 pb30" 
<?php if($vl["banner"]){ ?> style="background:url('<?=_upload_baiviet_l.$vl["banner"]?>') center center/cover" <?php }?>>
    <div class="grid wide">
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <div class="res--bg--catalogue">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="res--title__modifier">
                            <a href="javascript:void(0)" title="<?=$vl["ten"]?>" aria-lable="<?=$vl["ten"]?>"
                                role="link" rel="dofollow"><?=$vl["ten"]?></a>
                        </div>
                        <div class="res--link__modifier--catalogue">
                            <div class="res--link--more">
                                <a class="d-flex align-items-center gap10"
                                    href="<?=$vl["type"]?>/<?=$vl["tenkhongdau"]?>" title="<?=$vl["ten"]?>">
                                    <span class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                                            viewBox="0 0 16 15" fill="none">
                                            <g clip-path="url(#clip0_0_9)">
                                                <path
                                                    d="M13.8207 7.16916V12.838H1.53819V1.50029H7.67947V0.0830688H0.00286865V14.2553H15.3561V7.16916H13.8207Z"
                                                    fill="white" />
                                                <path
                                                    d="M9.21359 0.0831909L11.4244 2.12399L7.07233 6.14133L8.79188 7.72861L13.144 3.71127L15.3549 5.75206V0.0831909H9.21359Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_0_9">
                                                    <rect width="15.3532" height="14.1722" fill="white"
                                                        transform="translate(0 0.0834961)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>
                                        Xem nhiều hơn
                                    </span>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="res--box--product__modifier mt30">
                    <div class="res--grid10--template gap20 now-loading" id="js--render<?=$vl["id"]?>">
                        <?=$layouts->getLayoutProduct($productForList,'h5')?>
                    </div>
                </div>
                <div class="res--link--view--more mt30 d-flex justify-content-center" id="js--render--load<?=$vl["id"]?>">
                    <?=$layouts->getLoadMore($total_paging,
                        [
                            'type' => 'san-pham',
                            'page' => $page
                        ],
                        'sản phẩm')
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php } ?>

<?php } ?>