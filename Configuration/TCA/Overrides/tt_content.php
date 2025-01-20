<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

$pluginKey = ExtensionUtility::registerPlugin(
    'ViewFactory',
    'Viewfactory',
    'LLL:EXT:viewfactory/Resources/Private/Language/locallang.xlf:viewfactory.viewfactory',
);
