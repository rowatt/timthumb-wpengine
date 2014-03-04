<?php

/**
 * To make changes to TimThumb config without affecting any files in this repo, create a file called 'timthumb-config.php'
 * in the directory above this one. Alternatively, you can edit this file or edit the main timthumb.php file
 * but this will mean changes are overwritten if you ever pull changes down from the repo.
 */
$timthumb_config = dirname( dirname(__FILE__) ) . '/timthumb-config.php';
if( file_exists( $timthumb_config )	) require_once( $timthumb_config );

/* EOF */