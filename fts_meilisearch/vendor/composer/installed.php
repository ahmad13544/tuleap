<?php return array(
    'root' => array(
        'name' => 'tuleap/plugin-fts_meilisearch',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'cdf574e839af588afeb62066ec9a46388c2fb404',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'meilisearch/meilisearch-php' => array(
            'pretty_version' => 'v1.0.0',
            'version' => '1.0.0.0',
            'reference' => '11f12a2e36a6c616ffa5c6ed32272f8c870aaf69',
            'type' => 'library',
            'install_path' => __DIR__ . '/../meilisearch/meilisearch-php',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'php-http/client-common' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '^2.0',
            ),
        ),
        'php-http/discovery' => array(
            'pretty_version' => '1.14.3',
            'version' => '1.14.3.0',
            'reference' => '31d8ee46d0215108df16a8527c7438e96a4d7735',
            'type' => 'library',
            'install_path' => __DIR__ . '/../php-http/discovery',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'php-http/httplug' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '^2.1',
            ),
        ),
        'tuleap/plugin-fts_meilisearch' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'cdf574e839af588afeb62066ec9a46388c2fb404',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
