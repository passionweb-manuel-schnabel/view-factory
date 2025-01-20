<?php

use Passionweb\ViewFactory\Controller\ViewFactoryController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'ViewFactory',
    'Viewfactory',
    [
        ViewFactoryController::class => 'init'
    ],
    [
        // Non-cached actions
        ViewFactoryController::class => 'init'
    ],
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'viewfactory',
    'setup',
    '@import "EXT:viewfactory/Configuration/TypoScript/setup.typoscript"'
);