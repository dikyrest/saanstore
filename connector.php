<?php
require_once 'config/config.php';

$connector = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$connector) {
  die("Koneksi Error: " . $connector->connector_error);
}