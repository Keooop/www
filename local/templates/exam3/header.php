<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Page\Asset;?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<?
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/reset.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.css');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");

Asset::getInstance()->addString(' <link rel="icon" type="image/vnd.microsoft.icon"  href="/img/favicon.ico">');  
Asset::getInstance()->addString('  <link rel="shortcut icon" href="/img/favicon.ico">');  
?>
    <?$APPLICATION->ShowHead();?>
</head>


<body>
<?$APPLICATION->ShowPanel();?>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">

<?if (date('H')>='09' && date('H')<'18'){?>
                    <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
<?}else{?>
                    <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
<?}?>

                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"demo", 
	array(
		"FORGOT_PASSWORD_URL" => "/ex3/login/?forgot_password=yes",
		"PROFILE_URL" => "/ex3/login/user.php",
		"REGISTER_URL" => "/ex3/login/?register=yes",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "demo"
	),
	false
);?>
                   
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <nav class="nav">
        <div class="inner-wrap">
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
);?>
            </div>
            </nav>
        <!-- /nav -->
        <!-- breadcrumbs -->
        <div class="breadcrumbs-box">
        <div class="inner-wrap">
<?if($APPLICATION->GetCurDir()!='/ex3/'){?>

    <div class="inner-wrap">
    <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"Nav", 
	array(
		"PATH" => "",
		"SITE_ID" => "X3",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "Nav"
	),
	false
);?>         
         </div>
         <?}?>
            
            </div>
            </div>

        <!-- /breadcrumbs -->
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                <div class="cnt">
            <?if($APPLICATION->GetCurDir() =='/ex3/'){?>

<p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
</p>

   
<!-- index column -->
<div class="cnt-section index-column">
    <div class="col-wrap">

        <!-- main actions box -->
        <div class="column main-actions-box">
            <div class="title-block">
                <h2>Новинки</h2>
                 <hr>
            </div>
              <div class="items-wrap">
                <div class="item-wrap">
                    <div class="item">
                        <div class="title-block att">
                            Угловой диван!
                        </div>
                        <br>
                        <div class="inner-block">
                            <a href="" class="photo-block">
                                <img src="<?=SITE_TEMPLATE_PATH ?>/img/new01.jpg" alt="">
                            </a>
                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                            <a href="" class="btn-arr"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="item">
                        <div class="title-block att">
                            Угловой диван!
                        </div>
                        <br>
                        <div class="inner-block">
                            <a href="" class="photo-block">
                                <img src="<?=SITE_TEMPLATE_PATH ?>/img/new02.jpg" alt="">
                            </a>
                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                            <a href="" class="btn-arr"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="item">
                        <div class="title-block att">
                            Угловой диван!
                        </div>
                        <br>
                        <div class="inner-block">
                            <a href="" class="photo-block">
                                <img src="<?=SITE_TEMPLATE_PATH ?>/img/new03.jpg" alt="">
                            </a>
                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                            <a href="" class="btn-arr"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="btn-next">Все новинки</a>
        </div>
        <!-- /main actions box -->
        <!-- main news box -->
        <div class="column main-news-box">
            <div class="title-block">
                <h2>Новости</h2>
            </div>
            <hr>
            <div class="items-wrap">
                <div class="item-wrap">
                    <div class="item">
                        <div class="title"><a href="">29 августа 2012</a>
                        </div>
                        <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                        </div>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="item">
                        <div class="title"><a href="">29 августа 2012</a>
                        </div>
                        <div class="text"><a href="">Мастер-класс дизайнеров  из Италии для производителей мебели </a>
                        </div>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="item">
                        <div class="title"><a href="">29 августа 2012</a>
                        </div>
                        <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                        </div>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="item">
                        <div class="title"><a href="">29 августа 2012</a>
                        </div>
                        <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="btn-next">Все новости</a>
        </div>
        <!-- /main news box -->

    </div>
</div>
<!-- /index column -->

<!-- afisha box -->
<div class="cnt-section afisha-box">
    <div class="section-title-block">
        <h2 class="second-ttile">Ближайшие мероприятия</h2>
        <a href="" class="btn-next">все мероприятия</a>
    </div>
    <hr>
    <div class="items-wrap">
        <div class="item-wrap">
            <div class="item">
                <div class="title"><a href="">29 августа 2012, Москва</a>
                </div>
                <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
                </div>
            </div>
        </div>
        <div class="item-wrap">
            <div class="item">
                <div class="title"><a href="">29 августа 2012, Москва</a>
                </div>
                <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
                </div>
            </div>
        </div>
        <div class="item-wrap">
            <div class="item">
                <div class="title"><a href="">29 августа 2012, Москва</a>
                </div>
                <div class="text"><a href="">Открытие нового магазина в нашей  дилерской сети.</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /afisha box -->

<?}?>
<?if($APPLICATION->GetCurDir() !='/ex3/'){?>

                    <header>
                            <h1><?$APPLICATION->ShowTitle(false)?></h1>
                        </header>      
                          <?}?>
