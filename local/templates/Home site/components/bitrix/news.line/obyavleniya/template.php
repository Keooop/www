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
  <div class="site-section site-section-sm bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <div class="site-section-title">
            <h2><?=GetMessage("NEW_PROPERTIES");?></h2>
          </div>
        </div>
      </div>
      <div class="row mb-5">
	  <?foreach($arResult["ITEMS"] as $arItem):?>	
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="col-md-6 col-lg-4 mb-4">
          <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="prop-entry d-block">
            <figure>
              <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
				
			  <span class="price rounded">₽ <?echo $arItem["PROPERTY_PRICE_VALUE"];?></span>
                <h3 class="title"><?echo $arItem['NAME'] ?></h3>
                <p class="location"><?echo $arItem["DETAIL_TEXT"]; ?></p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
				  <span><?=GetMessage("SQUARE");?></span>
				  <strong><?echo $arItem["PROPERTY_SQUARE_VALUE"] ?>м<sup>2</sup></strong>
                  </div>
                  <div class="col">
				  <span><?=GetMessage("BATH");?></span>
				  <strong><?echo $arItem["PROPERTY_BATH_VALUE"]; ?></strong>
                   </div>
                  <div class="col">
                    <span><?=GetMessage("BEDROOM");?></span>
                    <strong><?echo $arItem['PROPERTY_BEDROOM_VALUE']; ?></strong>
                  </div>
                  <div class="col">
                    <span><?=GetMessage("GARAGES");?></span>
					<strong><?echo $arItem["PROPERTY_GARAGES_VALUE"]; ?></strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
		<?endforeach;?>
			<? echo "<pre> Строка:[" . __LINE__ . "] \n " . print_r($arItem, 1) . "</pre>";?>
      </div>

    </div>
  </div>
