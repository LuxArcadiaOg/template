<?php

/**
 * Extension Manager/Repository config file for ext "template".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Template',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Arcadia\\Template\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'luxarcadia',
    'author_email' => 'michael.scharov@gmail.com',
    'author_company' => 'Arcadia',
    'version' => '1.0.0',
];
