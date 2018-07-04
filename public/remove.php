<?php
require '../config.php';
require BASE_DIR . 'Datapipe.php';

if (!ctype_alnum($_GET['id']) || empty($_GET['id'])) {
	die('Nope.');
}

@unlink(DATA_DIR . $_GET['id']);

header('Location: /index.php');
die('Removed.');