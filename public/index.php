<?php
require '../config.php';
require BASE_DIR . 'Datapipe.php';

$datapipes = Datapipe::all();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Send data into InsightOps</title>
	<link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
	<table class="index">
		<tr>
			<th></th>
			<th>token</th>
			<th>data</th>
			<th>target</th>
			<th>delay</th>
		</tr>
		<?php foreach($datapipes as $pipe) {
			echo $pipe->render('
			<tr>
				<td>
					<a class="button" href="/edit.php?id={:idEncoded:}">✏️</a>
					<a class="button" href="/remove.php?id={:idEncoded:}">🗑</a>
				</td>
				<td>{:token:}</td>
				<td>{:dataPreview:}</td>
				<td>{:target:}</td>
				<td>{:delay:}</td>
			</tr>
			');
		} ?>
	</table>

	<a class="button" href="create.php">➕</a>
</body>
</html>