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
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	                        <div class="review-block">
							<div class="review-text">
								<div class="review-block-title"><span class="review-block-name">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></span>
									<span class="review-block-description"><?=$arItem["ACTIVE_FROM_X"]?>, 
									<?=$arItem["DISPLAY_PROPERTIES"]['COMPANY']['VALUE']?>,
									<?=$arItem["DISPLAY_PROPERTIES"]['POSITION']['VALUE']?></span></div>
								
								<div class="review-text-cont">
								<?=$arItem["PREVIEW_TEXT"]?>
								</div>
							</div>
							<div class="review-img-wrap">
							<?
if($arItem["PREVIEW_PICTURE"]['SRC']) {?>
	<img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>" alt="">
<?}
else{	?>
	<img src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg" alt="">
<?}
?>		
						
						
						</div>
						</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
