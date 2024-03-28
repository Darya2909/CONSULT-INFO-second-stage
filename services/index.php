<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Сервисы');
?>

		<section class="banner banner_before54" style="background-image: url(https://i.ibb.co/X48nk64/banner-services.jpg);">
			<div class="banner-wrapper">
				<div class="container">
					<div class="banner__content">
						<p><b class="text_gold">НАША МИССИЯ: </b>создаем и внедряем<br />
							инновационные ценностные<br />
							предложения и концепции, влияющие на<br />
							формирование рынка потребительских<br />
							предпочтений и способствующие<br />
							достижению бизнес-целей</p>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="stages">
					<div class="stages__item">
						<div class="stages__step">01</div>
						<div class="stages__desc-step">АУДИТ</div>
					</div>
					<div class="stages__item">
						<div class="stages__step">02</div>
						<div class="stages__desc-step">СТРАТЕГИЯ</div>
					</div>
					<div class="stages__item">
						<div class="stages__step">03</div>
						<div class="stages__desc-step">КОНЦЕПЦИЯ</div>
					</div>
					<div class="stages__item">
						<div class="stages__step">04</div>
						<div class="stages__desc-step">ДИЗАЙН</div>
					</div>
					<div class="stages__item">
						<div class="stages__step">05</div>
						<div class="stages__desc-step">КОММУНИКАЦИИ</div>
					</div>
				</div>
			</div>
		</section>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "services_news_list",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "1",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "100",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("",""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ID",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "Y"
    )
)
?>
	<a href="javascript:void(0)" onclick="openProjectPopup()">
	<div class="button-wrapper  button-wrapper_center">
		<div class="button button_gold button-open-calculate-project" data-popup="calculate-project-popup">
			РАССЧИТАТЬ ПРОЕКТ
		</div>
	</div>
	</a>

	<div id="popup-feedback" class="feedback">
	<div class="project-count">
        <?$APPLICATION->IncludeComponent("bitrix:form.result.new","countProject",Array(
                "SEF_MODE" => "Y",
                "WEB_FORM_ID" => "1",
                "LIST_URL" => "",
                "EDIT_URL" => "",
                "SUCCESS_URL" => "/services/success.php",
                "CHAIN_ITEM_TEXT" => "",
                "CHAIN_ITEM_LINK" => "",
                "IGNORE_CUSTOM_TEMPLATE" => "Y",
                "USE_EXTENDED_ERRORS" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "SEF_FOLDER" => "/",
                "VARIABLE_ALIASES" => Array(
                )
            )
        );?>
	</div>
	</div>
	<script>
		let projectPopup = null;

		function openProjectPopup() {
			if (projectPopup && projectPopup.isShown()) {
				projectPopup.close();
				return;
			}

			projectPopup = BX.PopupWindowManager.create("Popup", null, {
				autoHide: true,
				offsetLeft: 0,
				offsetTop: 0,
				resizable: false,
				draggable: false,
				closeByEsc: false,
				closeIcon: { right: "12px", top: "10px" },
				zIndex: 0,
				minWidth: 400,
				content: BX("popup-feedback"),
				className: 'popup-wrapper'
			});

			projectPopup.show();
		}

		document.addEventListener("DOMContentLoaded", function() {
			document.addEventListener('click', function(event) {
				if (projectPopup && !projectPopup.container.contains(event.target)) {
					projectPopup.close();
				}
			});
		});
	</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>