<?php
/**
 * Loads the environment from the .env file in the root
 * directory
 */
$dotenv = new Dotenv\Dotenv('/app/web');
$dotenv->load();

/**
 * You have configuration from the environment available here
 * via getenv
 */

/**
 * NO EDITS BEYOND THIS POINT
 *
 * AutoConfiguration happens beyond this point
 */
if (file_exists(dirname(__FILE__) . '/AutoConfiguration.php')) {
    include_once dirname(__FILE__) . '/AutoConfiguration.php';
}
