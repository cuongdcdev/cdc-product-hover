<?php 
/**
Plugin Name: Woocommerce Product Hover Show Info ToolTip
Author: cuongdcdev@gmail.com
Plugin URI: https://hobasoft.com
Author URI: https://hobasoft.com
Description: Cho phép hover hiển thị thông tin sản phẩm dạng tooltip
**/

defined( 'ABSPATH' ) or die( 'Nope :v' );
//register assets
add_action( 'wp_enqueue_scripts' , function(){
    wp_enqueue_script('cdc_mainjs' , plugin_dir_url(__FILE__) . 'asset/main.js' , 'jquery' , '' , true );
    wp_enqueue_style('cdc_maincss' , plugin_dir_url(__FILE__) . 'asset/main.css' );
});

// custom shop style product 
add_action("woocommerce_after_shop_loop_item" , function(){
    global $product;
    require("inc/product-hover-template.tpl");
});