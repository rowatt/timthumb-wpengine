<?php

/**
 * Add any configurations in this file to avoid having to edit the main timthumb file
 */

//put timthumb cache in its own directory immediately inside wp-content
//you will need to change the path if WordPress is not installed in the web server root directory
define ('FILE_CACHE_DIRECTORY', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/cache_tt');

/* EOF */