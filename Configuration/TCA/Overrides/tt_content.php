<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['altaahaccordion_accordion'] = 'tx_altaahaccordion_accordion';
$tempColumns = [
    'tx_altaahaccordion_acco' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'delete' => 1,
                    'dragdrop' => 1,
                    'hide' => 1,
                    'info' => 1,
                    'localize' => 1,
                    'new' => 1,
                    'sort' => 1,
                ],
                'levelLinksPosition' => 'top',
                'showAllLocalizationLink' => 1,
                'showNewRecordLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_altaahaccordion_acco',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahaccordion/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahaccordion_acco',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:altaahaccordion/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._altaahaccordion_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:altaahaccordion/Resources/Private/Language/locallang_db.xlf:tt_content.CType.altaahaccordion_accordion',
    'altaahaccordion_accordion',
    'tx_altaahaccordion_accordion',
];
$tempTypes = [
    'altaahaccordion_accordion' => [
        'columnsOverrides' => [
            'tx_altaahaccordion_acco' => [
                'label' => 'Next accordion item',
            ],
        ],
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        --palette--;;headers,
        tx_altaahaccordion_acco,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'altaahaccordion',
    'Configuration/TypoScript/',
    'altaahaccordion'
);

});
require(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:backgroundimage4ce/Configuration/TCA/Overrides/tt_content.php'));

