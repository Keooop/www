<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
  <title><?$APPLICATION->ShowTitle()?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

 <?php
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/magnific-popup.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/jquery-ui.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.theme.default.min.css');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-datepicker.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/mediaelementplayer.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/animate.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/fonts/flaticon/font/flaticon.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/fonts/icomoon/style.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/fl-bigmug-line.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/aos.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/js/mediaelement-and-player.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");

?>
<?$APPLICATION->ShowHead();
define("NEED_AUTH", true);

?>
</head>

<body>
<?$APPLICATION->ShowPanel();?>
    <div class="site-loader"></div>

<div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div> <!-- .site-mobile-menu -->

  <div class="border-bottom bg-white top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 col-md-6">
          <p class="mb-0">
            <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                class="d-none d-md-inline-block ml-2"><?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/local/templates/Home site/include/tel.php",
						"COMPONENT_TEMPLATE" => ".default"
					),
					false
					);?>
				</span>
			</a>
            <a href="#"><span class="text-black fl-bigmug-line-email64"></span> 
			
				<span class="d-none d-md-inline-block ml-2">
					<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => "/local/templates/Home site/include/mail.php",
					"COMPONENT_TEMPLATE" => ".default"
						),
						false
					);?>
				</span>
			</a>
          </p>
        </div>
        <div class="col-6 col-md-6 text-right">
						<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/local/templates/Home site/include/icon.php",
						"COMPONENT_TEMPLATE" => ".default"
					),
					false
				);?>
        </div>
      </div>
    </div>

  </div>
  <div class="site-navbar">
    <div class="container py-1">
      <div class="row align-items-center">
        <div class="col-8 col-md-8 col-lg-4">
          <h1 class=""><?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/Home site/include/HomeSpace.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br></h1>
        </div>
        
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_multi2", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "7 775 999",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_multi2"
	),
	false
);?>


      </div>
    </div>
  </div>
</div>

<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>


<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center">
			<div class="col-md-10">
			<h1 class="mb-2"><? $APPLICATION->ShowTitle(false,false); ?></h1>
				 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"Nav", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "Nav"
	),
	false
);?>
			</div>
		</div>
	</div>
</div>
</div>
<? endif; ?>
