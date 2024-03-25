<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult['ID'])):?>
<main class="website-workarea">
	<section class="">
		<div class="container blog_article">
			<img width="100%" height="100%" src="<?= $arResult['DETAIL_PICTURE']['SRC']?>" alt="">
			<h1>
                <?= $arResult['PROPERTIES']['detail_title']['VALUE']?>
			</h1>
            <?= $arResult['DETAIL_TEXT']?>
		</div>
	</section>
</main>
    <?php endif;?>