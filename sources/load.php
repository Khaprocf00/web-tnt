<?php

    @$id =  htmlspecialchars($_GET['id']);

    @$idl =  htmlspecialchars($_GET['idl']);

    @$idc =  htmlspecialchars($_GET['idc']);

    @$idi =  htmlspecialchars($_GET['idi']);

    @$ids =  htmlspecialchars($_GET['ids']);

    @$type =  htmlspecialchars($_GET['type']);

    $where="";

    if(!empty($idl)){

        $where.=" and id_list=".$idl;

    }

    if(!empty($idc)){

        $where.=" and id_cat=".$idc;

    }

    if(!empty($idi)){

        $where.=" and id_item=".$idi;

    }

    if(!empty($ids)){

        $where.=" and id_sub=".$ids;

    }

    $order_by = ' order by id desc';

    $per_page=($deviceType=='computer') ? $row_setting["page_in"] : $row_setting["page_sp_m"];

    $page=(int)$_GET['page'];

    $count_per=($page * $per_page);

    $startpoint =  $count_per - $per_page;

    $sql="select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1$where and type=? $order_by limit $startpoint,$per_page";

    $tintuc=$db->rawQuery($sql,array($type));

    $count=$db->rawQueryOne("select COUNT(*) as `numb` from #_baiviet where hienthi=1$where and type=?", array($type));

    $total=$count['numb'];

    $total_paging=$total-$count_per;

    if($func->isAjax()){

        echo json_encode([

            'sql' => $sql,

            'html' => $layouts->getLayoutProduct($tintuc,'h5'),

            'paging' => $layouts->getLoadMore($total_paging,[
                'idl' => $idl,
                'idc' => $idc,
                'idi' => $idi,
                'ids' => $ids,
                'type' => $type,
                'page' => $page
            ],'sản phẩm')

        ]);

        exit;

    }

?>