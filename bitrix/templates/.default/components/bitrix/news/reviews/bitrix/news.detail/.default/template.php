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
<?php $arResult['META_TAGS']['TITLE'] = $arResult["IPROPERTY_VALUES"]['ELEMENT_META_TITLE'];?>

<?php if (is_array($arResult["DETAIL_PICTURE"])):?>
    <div class="review-block">
        <div class="review-text">
            <div class="review-text-cont">
                <?echo $arResult["DETAIL_TEXT"];?>
            </div>
            <div style="float: right; font-style: italic;">
                <?echo $arResult["NAME"] ?>
            </div>

        </div>

        <div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img"></div>
    </div>
<?php endif ?>

