<?php
require '../config.php';
require BASE_DIR . 'Datapipe.php';

function error($message) : string {
	die('<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Send data into InsightOps</title>
	<link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
	<p class="error">' . htmlentities($message) . '</p>
</body>
</html>');
}

try {
	$pipe = Datapipe::load($_POST['id']);
	$pipe->update($_POST);
	$pipe->save();
} catch (Exception $ex) {
	error($ex->getMessage());
}

header('Location: /index.php');
die('Saved.');