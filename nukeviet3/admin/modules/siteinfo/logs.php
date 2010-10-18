<?php

/**
 * @Project NUKEVIET 3.0
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2010 VINADES.,JSC. All rights reserved
 * @Createdate 11-10-2010 14:43
 */
if (! defined ( 'NV_IS_FILE_SITEINFO' ))
	die ( 'Stop!!!' );
	
/* 
 * Eg: $id = nv_insert_logs('lang','module name','name key','note',1, 'link acess');
*/

$page_title = $lang_module ['logs_title'];

$page = $nv_Request->get_int ( 'page', 'get', 0 );
$per_page = 30;
$data = array ();
$array_userid = array ();

$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM `" . $db_config ['prefix'] . "_logs` ORDER BY ID";
$result = $db->sql_query ( "SELECT FOUND_ROWS()" );
list ( $all_page ) = $db->sql_fetchrow ( $result );

$base_url = NV_BASE_ADMINURL . "index.php?" . NV_NAME_VARIABLE . "=" . $module_name . "&" . NV_OP_VARIABLE . "=logs";
$sql .= " LIMIT " . $page . ", " . $per_page;
$result_query = $db->sql_query ( $sql );

while ( $data_i = $db->sql_fetchrow ( $result_query, 2 ) ) {
	if ($data_i ['userid'] != 0) {
		$temp = array_diff ( array ($data_i ['userid'] ), $array_userid );
		$array_userid = array_merge ( $array_userid, $temp );
	}
	$data_i ['time'] = nv_date ( "d-m-Y h:i:s A", $data_i ['log_time'] );
	$data [] = $data_i;
	unset ( $data_i );
}
if (! empty ( $array_userid )) {
	$array_userid = implode ( ",", $array_userid );
}

$sql = "SELECT userid, username FROM `" . $db_config ['prefix'] . "_users` WHERE userid IN (" . $array_userid . ")";
$result_users = $db->sql_query ( $sql );
$data_users = array ();
$data_users [0] = "system";
while ( $data_i = $db->sql_fetchrow ( $result_users, 2 ) ) {
	$data_users [$data_i ['userid']] = $data_i ['username'];
	unset ( $data_i );
}

$xtpl = new XTemplate ( "logs.tpl", NV_ROOTDIR . "/themes/" . $global_config ['module_theme'] . "/modules/" . $module_file );
$xtpl->assign ( 'LANG', $lang_module );
$xtpl->assign ( 'GLANG', $lang_global );
$xtpl->assign ( 'URL_DEL', $base_url . "&" . NV_OP_VARIABLE . "=logs_del" );
$a = 0;
foreach ( $data as $data_i ) {
	if (! empty ( $data_users [$data_i ['userid']] )) {
		$data_i ['username'] = $data_users [$data_i ['userid']];
	} else {
		$data_i ['username'] = "unknown";
	}
	if (! empty ( $lang_module [$data_i ['name_key']] )) {
		$data_i ['name_key'] = $lang_module [$data_i ['name_key']];
	} else {
		$data_i ['name_key'] = "unknown";
	}
	$xtpl->assign ( 'DATA', $data_i );
	$xtpl->assign ( 'CLASS', $a % 2 == 1 ? " class=\"second\"" : "" );
	$xtpl->assign ( 'DEL_URL', $base_url . "&" . NV_OP_VARIABLE . "=logs_del&id=" . $data_i ['id'] );
	$xtpl->assign ( 'BACK_URL', $base_url );
	$xtpl->parse ( 'main.row' );
	$a ++;
}
$generate_page = nv_generate_page ( $base_url, $all_page, $per_page, $page );
if (! empty ( $generate_page )) {
	$xtpl->assign ( 'GENERATE_PAGE', $generate_page );
	$xtpl->parse ( 'main.generate_page' );
}
$xtpl->parse ( 'main' );
$contents = $xtpl->text ( 'main' );

include (NV_ROOTDIR . "/includes/header.php");
echo nv_admin_theme ( $contents );
include (NV_ROOTDIR . "/includes/footer.php");

?>