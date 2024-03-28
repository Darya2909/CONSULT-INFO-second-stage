<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if(!empty($arResult)): ?>
	<div class="header-nav">
		<nav class="nav-list">
    <?foreach($arResult as $arItem):?>
	    <a href="<?= $arItem['LINK']?>" class="nav-list__item"><?= $arItem['TEXT']?></a>
    <?endforeach?>
		</nav>
		<div class="header__phone">
			<a href="tel:<?php $APPLICATION->IncludeFile(SITE_DIR . 'include/header/phone.php', [], ['SHOW_BORDER' => false, 'MODE' => 'php']); ?>" class="contacts__mail contacts__list-a" itemprop="telephone">
                <?php $APPLICATION->IncludeFile(SITE_DIR . 'include/header/phone.php', [], ['MODE' => 'php']); ?>
			</a>
		</div>
	</div>
<?php endif; ?>

