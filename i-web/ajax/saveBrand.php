<?php
	require_once 'ajaxConfig.php';
	$id = $_POST['id'];
	$value = $_POST['value'];
    $data['id_brand']=$value;
	$db->where('id', $id);
	$db->update('baiviet_list',$data);


?>
	
	