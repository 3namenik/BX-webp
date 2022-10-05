<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if ($arResult['DETAIL_PICTURE']['WEBP_SRC']) {
?>
    <picture>
        <source srcset="<?= $arResult['DETAIL_PICTURE']['WEBP_SRC'] ?>" type="img/webp" />
        <source srcset="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" type="<?= $arResult['DETAIL_PICTURE']['CONTENT_TYPE'] ?>" />
        <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" width="<?= $arResult['DETAIL_PICTURE']['WIDTH'] ?>" height="<?= $arResult['DETAIL_PICTURE']['HEIGHT'] ?>"  alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>" loading="lazy" />
    </picture>
<?
} else {
?>
    <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" width="<?= $arResult['DETAIL_PICTURE']['WIDTH'] ?>" height="<?= $arResult['DETAIL_PICTURE']['HEIGHT'] ?>" alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>" loading="lazy" />
<?
} ?>