<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?php $APPLICATION->ShowHead();
    $APPLICATION->SetAdditionalCSS('/bitrix/templates/.default/template_styles.css');
    $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-1.8.2.min.js');
    $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/functions.js');
    ?>
    <title><?php $APPLICATION->ShowTitle()?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../bitrix/templates/.default/favicon.ico">
    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
        <?php include_once($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/header.php") ?>
        
    </div>

    <!--- // end header area --->
    <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "nav"
	),
	false
);?>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title"><?php $APPLICATION->ShowTitle(false) ?></p>
                    </div>

                    <!-- workarea -->
