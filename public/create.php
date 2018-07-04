<?php
require '../config.php';
require BASE_DIR . 'Datapipe.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Send data into InsightOps</title>
	<link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
	<form action="store.php" method="POST">
		{
		<table>
			<tr>
				<th>"id":</th>
				<td>"<input name="id" type="text" required value="<?php echo uniqid(); ?>" />",</td>
			</tr>
			<tr>
				<th>"data":</th>
				<td>"<textarea name="data" required><?php echo PLACEHOLDER_DATA; ?></textarea>",</td>
			</tr>
			<tr>
				<th>"target":</th>
				<td>"<select name="target">
					<?php foreach(TARGETS as $name => $value) {
						echo '<option value="' . $value . '">' . $name . '</option>' . PHP_EOL;
					}?>
				</select>",</td>
			</tr>
			<tr>
				<th>"token":</th>
				<td>"<input name="token" type="text" required />",</td>
			</tr>
			<tr>
				<th>"delay":</th>
				<td>"<input name="delay" type="number" required min="0.2" max="120" step="0.1" value="<?php echo rand(1, 5); ?>" />"
				<small>// Delay between log lines, in seconds.</small></td>
			</tr>
		</table>
		}

		<p><button class="button">Save</button></p>
	</form>
</body>
</html>