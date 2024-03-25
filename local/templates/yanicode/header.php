<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
use Bitrix\Main\Page\Asset;
?>


<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta class="js-meta-viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<title><?$APPLICATION->ShowTitle();?></title>
	<?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/template_styles.css');
	?>
	<?$APPLICATION->ShowHead();?>
</head>

<body>
<div id="panel">
	<?$APPLICATION->ShowPanel();?>
</div>
<header class="header">
	<div class="container">
		<div class="header-wrapper">
			<a href="./index.html" class="header__logo">
				<img width="300" height="92" src="<?=SITE_TEMPLATE_PATH?>/assets/images/svg/logo-yanicode.svg" alt="yanicode">
			</a>
			<div class="header__burger header__burger_close">
				<span class="burger-line"></span>
				<span class="burger-line"></span>
				<span class="burger-line"></span>
			</div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "top_menu",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "top_menu"
                ),
                false
            ); ?>
		</div>
	</div>
</header>