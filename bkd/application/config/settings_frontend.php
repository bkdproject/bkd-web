<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Settings Fronteend Config
|--------------------------------------------------------------------------
*/

/*$config['doc_root'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['doc_root'] .= "://".$_SERVER['HTTP_HOST'];
$config['doc_root'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
*/

if($_SERVER['HTTP_HOST']=='localhost:8888')
{
	$config['doc_root'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
	$config['doc_root'] .= "://".$_SERVER['HTTP_HOST'];
	$config['doc_root'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

	//foto start
	$config['showphoto']    = 'http://'.$_SERVER['HTTP_HOST']. 'bkdana/data-bkd/';
	//foto end

	$config['data_dir']    = FCPATH . "../../../data-bkd/";
	// $config['data_dir']    = $_SERVER['DOCUMENT_ROOT'] . '/bkdana/data-bkd/';
	// $config['attach_dir']  = FCPATH . '../../../data-file-bkd/';
	$config['attach_dir']    = $_SERVER['DOCUMENT_ROOT'] . '/bkdana/data-file-bkd/';

}else{	// LIVE
	$config['doc_root'] = "https://".$_SERVER['HTTP_HOST'];
	$config['doc_root'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

	//foto start
	$config['showphoto']    = 'https://'.$_SERVER['HTTP_HOST']. '/data-bkd/';
	//foto end

	$config['data_dir']    = FCPATH . "../../data-bkd/";
	$config['attach_dir']  = FCPATH . '../../data-file-bkd/';
}

// upload path
$config['images_dir']         = $config['data_dir'];
$config['kilat_images_dir']   = $config['images_dir'] . 'pinjaman/kilat/';
$config['mikro_images_dir']   = $config['images_dir'] . 'pinjaman/mikro/';
$config['pendana_images_dir'] = $config['images_dir'] . 'pendana/';
$config['member_images_dir']  = 'member/';

$config['img_baseurl']  = $config['doc_root'];
$config['images_uri']   = $config['showphoto'];
$config['page_img_uri'] = $config['images_uri'] . 'pages/';

$config['template_frontend'] = 'version1';
$config['id_order']          = date("ymdHis");
$config['template_uri']      = $config['doc_root'] . 'assets/';

// Email setting
$config['mail_username']      = 'bkdanafinansial@gmail.com';
$config['mail_password']      = 'master177';

// akun fb developer BATAVIA 
// $config['fb_app_id']          = '1733360370088297';
// $config['fb_kit_secret']      = 'd827d9e9c9802d140f27a96751fb9811';
// $config['fb_kit_token']       = '0fa9339955b3ac6efbb5f3bb7738dd02';

// akun fb developer
$config['fb_app_id']          = '315069215875926';
$config['fb_kit_secret']      = '3fef03e1ab59e1a6f91629a670f14d28';
$config['fb_kit_token']       = '8a063b7e438dfc2aa76fe573d86e9aca';

$config['minimum_topup']      = '100000';
$config['minimum_grade']      = '95';
$config['bkd_telp']           = '+62 21 83784354';
$config['bkd_email']          = 'cs@bkdana.id';

// Veritrans API 
$config['vMerchant_id'] = 'G077099250';
$config['vClient_key']  = 'SB-Mid-client-3L-CVOaUEZHeshIs'; // Sandbox
$config['vServer_key']  = 'SB-Mid-server-7UDjQBASCcq-WJdzM-nJBPZZ'; // sandbox

// Alibaba OSS
$config['oss_access_key_id'] = 'LTAIJbwb8rmv5ptU';
$config['oss_access_key_secret'] = 'CSwic1up6VGQtlg4bp2DLQc731n5Re';
$config['oss_endpoint'] = 'https://oss-ap-southeast-5.aliyuncs.com';
$config['oss_bucket_bkd_user'] = ($_SERVER['HTTP_HOST']=='localhost' OR $_SERVER['HTTP_HOST'] =='149.129.248.46') ? 'bkd-development' : 'bkd-production';


