<?php
/**
* @ Project: ID Account System 1.5.0
* @ Author: Yplitgroup (c)2012
* @ Email: yplitgroup@gmail.com
* @ Website: http://lemon9x.com 
* @ Phone: 0166.26.26.009
* @ Project ID: 876609683c4c7e392848e94d9f62e149
**/

// ############### CHECK ##############
if( !defined('IS_MAIN') ) die(" Stop!!! ");
if( defined( 'IS_USER' ) ) yplitgroupRedirectManager();
if( isset( $_SESSION['yplitgroupLostpassRecord'] ) and $_SESSION['yplitgroupLostpassRecord'] > 10 )
{
	//exit( 'Spam!!!' );
}

$yplitgroupPageTitle = $lang['lostpass_page_title'] . ' &middot; ' . $lang['page_title'];
$yplitgroupRightText = $lang['lostpass_page_title'];
$f->load( 'yplitgroupThemesHeader' );
require_once( DIR . '/skin/' . SKINDIR . '/lostpass_form.php' );
$f->load( 'yplitgroupThemesFooter' );

?>