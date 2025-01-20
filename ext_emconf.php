<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'View Factory Codebreak',
    'description' => 'Shows the usage of the ViewFactory which was introduced in TYPO3 v13',
    'category' => 'example',
    'author' => 'Manuel Schnabel',
    'author_email' => 'service@passionweb.de',
    'author_company' => 'PassionWeb Manuel Schnabel',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];