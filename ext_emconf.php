<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "oauth2_server"
 *
 * Auto generated by Extension Builder 2021-02-15
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'OAuth2 Server',
    'description' => 'OAuth2 server for TYPO3 based on PHP League\'s OAuth2 Server.',
    'category' => 'fe',
    'author' => 'R3 H6',
    'author_email' => 'r3h6@outlook.com',
    'state' => 'beta',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'scheduler' => '10.4.0-10.4.99',
        ],
    ],
];
