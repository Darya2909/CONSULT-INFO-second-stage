<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if(!empty($arResult)): ?>
	<div class="header-nav">
		<nav class="nav-list">
    <?foreach($arResult as $arItem):?>
	    <a href="<?= $arItem['LINK']?>" class="nav-list__item"><?= $arItem['TEXT']?></a>
    <?endforeach?>
		</nav>
		<div class="header__phone">
			<a href="tel:+79114510616">+79114510616</a>
		</div>
	</div>
<?php endif; ?>

