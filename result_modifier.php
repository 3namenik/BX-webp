<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/* Для разделов */
foreach ($arResult['ITEMS'] as &$item) {
    $item['PREVIEW_PICTURE'] = Webp::getWebp($item['PREVIEW_PICTURE']);
}

/* Для деталок */
$arResult['DETAIL_PICTURE'] = Webp::getWebp($arResult['DETAIL_PICTURE']);

/* Для списка разделов */
foreach ($arResult['SECTIONS'] as &$item) {
    $item['PICTURE'] = Webp::getWebp($item['PICTURE']);
}
