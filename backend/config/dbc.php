<?php
require_once __DIR__ . '/Env.php';

// Load environment variables
Env::load(__DIR__ . '/../../.env');

if (!defined('DB_HOST'))
    define('DB_HOST', getenv('DB_HOST'));
if (!defined('DB_USER'))
    define('DB_USER', getenv('DB_USER'));
if (!defined('DB_PASS'))
    define('DB_PASS', getenv('DB_PASS'));
if (!defined('DB_NAME'))
    define('DB_NAME', getenv('DB_NAME'));

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>
