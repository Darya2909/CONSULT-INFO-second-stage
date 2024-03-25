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

<section class="container">
	<div class="blog-list">
<?php if(!empty($arResult["ITEMS"])): ?>
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
		<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="blog">
		<div class="blog__img">
			<img width="100%" height="100%" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
		</div>
		<div class="blog__desc">
			<div class="blog__title">
                <?= $arItem['NAME'] ?>
			</div>
			<div class="blog__date">
                <?= $arItem['ACTIVE_FROM'] ?>
			</div>
			<div class="blog_article">
                <?= $arItem['PREVIEW_TEXT'] ?>
			</div>
		</div>
		</a>
    <?php endforeach; ?>
<?php endif; ?>
	</div>
</section>
