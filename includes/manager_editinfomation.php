<?php
/**
* @ Project: ID Account System 1.5.0
* @ Author: Yplitgroup (c)2012
* @ Email: yplitgroup@gmail.com
* @ Website: http://lemon9x.com 
* @ Phone: 0166.26.26.009
* @ Project ID: 876609683c4c7e392848e94d9f62e149
**/

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// @ Power by Yplitgroup               @
// @ ID Account System for Vbb4        @
// @ Email: yplitgroup@gmail.com       @
// @ Website: http://lemon9x.com       @
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

 
// ############### CHECK ##############
if( !defined( 'IS_MAIN' ) ) die(" Stop!!! ");
if( !defined( 'IS_USER' ) ) yplitgroupRedirectLogin( $_SERVER['REQUEST_URI'] );

if( 
	    !empty( $_POST['username'] ) 
	and !empty( $_POST['email'] )
)
{

}
else
{
	require pathinfo( __FILE__, PATHINFO_DIRNAME ) . '/manager_infouser.php'
}

?>