<?php

/**
 * Version:    1.0
 * Author:     Alfred Bez <alfred.bez@gmail.com>
 * Author URI: http://www.alfredbez.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'ab_dummy',
    'title'        => 'Alfred Bez :: Dummy-Modul',
    'description'  => 'macht nichts sinnvolles, dafür kann man hiermit aber mal travis-Builds mit phpunit testen',
    'version'      => '1.0',
    'author'       => 'Alfred Bez',
    'url'          => 'http://www.alfredbez.de',
    'email'        => 'alfred.bez@gmail.com',
    'extend'       => array(
        'ab_dummy_core'  => 'ab_dummy/core/ab_dummy_core'
    )
);
