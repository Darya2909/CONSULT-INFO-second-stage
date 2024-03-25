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


<div class="container">
	<h1 class="container-title">
		НАШИ УСЛУГИ
	</h1>
	<div class="services-cover">
<?foreach ($arResult["SECTIONS"] as $arSection):?>
		<div class="services">
			<h2 class="services__title">
                <?=$arSection["NAME"]?>
			</h2>
			<div class="services-category">
        <?foreach ($arSection["ITEMS"] as $arItem):?>
	        <div class="services__item" data-description="<?=$arItem["DETAIL_TEXT"]?>"   data-name = "<?=$arItem["NAME"]?>" data-category_name = "<?=$arSection["NAME"]?>" ><?=$arItem["NAME"]?></div>
        <?endforeach?>
			</div>
		</div>
<?endforeach?>
	</div>
</div>
   <div id="popup-services" class="feedback">
	<div class="popup-services-cover project-count">
		<div class="popup-services__title" id="popup-services-title">
		</div>
		<div class="popup-services__category" id="popup-services-category">
		</div>
		<div class="popup-services__desc" id="popup-services-desc">
		</div>
	</div>
   </div>

<script>
	document.querySelectorAll('.services__item').forEach(item => {
		item.addEventListener('click', function() {
			const itemCategoryName = this.dataset.category_name;
			const itemName = this.dataset.name;
			const itemDescription = this.dataset.description;
			descPopup(itemCategoryName, itemName, itemDescription);
		});
	});

	let descriptionPopup = null;

	function descPopup(itemCategoryName, itemName, itemDescription) {
		const titleElement_category = document.getElementById('popup-services-title');
		const titleElement_name = document.getElementById('popup-services-category');
		const titleElement_description = document.getElementById('popup-services-desc');

			titleElement_category.textContent = itemCategoryName;
			titleElement_name.textContent = itemName;
			titleElement_description.innerHTML = itemDescription;

			const popupCoverElement = document.getElementById('popup-services');
			if (popupCoverElement) {
				if (descriptionPopup && descriptionPopup.isShown()) {
					descriptionPopup.close();
					return;
				}

				descriptionPopup = BX.PopupWindowManager.create("descriptionPopup", null, {
					autoHide: true,
					offsetLeft: 0,
					offsetTop: 0,
					resizable: false,
					draggable: false,
					closeByEsc: false,
					closeIcon: { right: "12px", top: "10px" },
					zIndex: 0,
					minWidth: 400,
					overlay: false,
					content: popupCoverElement,
					className: 'popup-wrapper2'
				});
				descriptionPopup.show();
			} else {
				console.error('Элемент с id "popup-services-cover" не найден.');
			}
	}

	document.addEventListener("DOMContentLoaded", function() {
		document.addEventListener('click', function(event) {
			if (descriptionPopup && !descriptionPopup.container.contains(event.target)) {
				descriptionPopup.close();
			}
		});
	});

</script>