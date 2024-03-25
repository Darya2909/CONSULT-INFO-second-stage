<?

if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<?=$arResult["FORM_NOTE"]?>
<?if ($arResult["isFormNote"] != "Y")
{
    ?>
    <?=$arResult["FORM_HEADER"]?>
                   <?
                    if ($arResult["isFormTitle"]) { ?>
						<h3 class="popup__title"><?=$arResult["FORM_TITLE"]?></h3>
                    <?  } //endif ;?>

        <?
        foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
        {
            if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
            {
                echo $arQuestion["HTML_CODE"];
            }
            else
            {
                ?>
                <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
	            <span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
                <?endif;?>
                <? if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] === 'text'): ?>
	            <div class="popup-feedback__input-cover">
		            <label for="" class="popup-feedback__input-label"><?=$arQuestion["CAPTION"]?></label>
		            <input type="mail" class="popup-feedback__input js-validated-field" data-validated_name="mail" <?=$arQuestion["HTML_CODE"]?>/>
	            </div>
                <? elseif($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] === 'textarea'): ?>
	            <div class="popup-feedback__input-cover">
		            <label for="" class="popup-feedback__input-label"><?=$arQuestion["CAPTION"]?></label>
		            <textarea class="popup-feedback__textarea js-validated-field"  <?=$arQuestion["HTML_CODE"]?>></textarea>
	            </div>
            <? elseif($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] === 'checkbox'): ?>
	            <div class="popup-feedback__consent">
		            <div class="popup-feedback__consent-form-wrapper">
			            <?$arQuestion["HTML_CODE"] = str_replace('<input', '<input class="popup-feedback__consent-input" checked="checked"', $arQuestion["HTML_CODE"]); ?>
                        <?$arQuestion["HTML_CODE"] = str_replace('<label', '<label class="popup-feedback__consent-form"', $arQuestion["HTML_CODE"]); ?>
                        <?=$arQuestion["HTML_CODE"] = str_replace('</', $arQuestion["CAPTION"] . '</', $arQuestion["HTML_CODE"]); ?>
		            </div>
	            </div>
            <? else: ?>
				<tr>
					<td>
                        <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
							<span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
                        <?endif;?>
                        <?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?>
                        <?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""?>
					</td>
		            <td><?=$arQuestion["HTML_CODE"]?></td>
            <? endif; ?>
				</tr>
                <?
            }
        } //endwhile
        ?>
        <?
        if($arResult["isUseCaptcha"] == "Y")
        {
            ?>
			<tr>
				<th colspan="2"><b><?=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?></b></th>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" /><img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="180" height="40" /></td>
			</tr>
			<tr>
				<td><?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?><?=$arResult["REQUIRED_SIGN"];?></td>
				<td><input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" /></td>
			</tr>
            <?
        } // isUseCaptcha
        ?>
		</tbody>

	<div class="popup-feedback__button-cover">
		<input class="button button_modal-gold js-button-submit" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
	</div>

    <?=$arResult["FORM_FOOTER"]?>
    <?
} //endif (isFormNote)

