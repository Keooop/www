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


<div class="rew-footer-carousel">
	<?foreach($arResult["ITEMS"] as $arItem):
	$Image = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 49, "height" => 49)); 
	?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
			<div class="item">							
											<div class="side-block side-opin">
										<div class="inner-block">
											<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="title">
												<div class="photo-block">
														
										<?if ($arItem["PREVIEW_PICTURE"]["SRC"]) {?>
											
											<img src="<?=$Image["src"]?>" alt="">
											<?}  {?>
												<img src="<?=SITE_TEMPLATE_PATH ?>/img/no_photo_left_block.jpg" alt="">
										<?}?>		
																				
												</div>
												<div class="name-block"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?= $arItem["NAME"]?></a></div>
												<div class="pos-block"><?=$arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]?>,<?=$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]?></div>
											</div>
											<div class="text-block"><?=TruncateText($arItem["PREVIEW_TEXT"], 150);?></div>
										</div>
									</div>
								</div>
							
	<?endforeach;?>
</div>


				
