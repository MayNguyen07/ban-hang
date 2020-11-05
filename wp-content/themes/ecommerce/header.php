<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title('|', true, 'right'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

</head>

<body>
<div id="page" class="container">

	<header id="header">
            <h1>
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo(get_template_directory_uri()); ?>/img/common/logo.png" alt="logo">
                </a>
            </h1>
            <div id="gNav">
                <nav>
                    <ul class="nav_list">
                        <li><a href="<?php echo home_url() ?>">TRANG CHỦ</a></li>
                        <li><a href="<?php echo home_url() ?>/company">SẢN PHẨM</a></li>
                        <li><a href="<?php echo home_url() ?>/product">LẮP ĐẶT</a></li>
                        <li><a href="<?php echo home_url() ?>/recruit">TIN TỨC</a></li>
						<li><a href="<?php echo home_url() ?>/recruit">LIÊN HỆ</a></li>
						<li><a href="<?php echo home_url() ?>/recruit">CHÍNH SÁCH MUA HÀNG</a></li>
						<li><a href="<?php echo home_url() ?>/recruit">TÌM ĐẠI LÝ PHÂN PHỐI</a></li>
                        
                    </ul>
                </nav>
            </div>
            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>
            <!-- End header-->
        </header>