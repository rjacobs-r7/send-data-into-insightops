<?php
require '../config.php';
require BASE_DIR . 'Datapipe.php';

$pipe = Datapipe::load($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Send data into InsightOps</title>
	<link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
	<form action="update.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $pipe->id; ?>" />
		{
		<table>
			<tr>
				<th>"id":</th>
				<td>"<?php echo htmlentities($pipe->id); ?>",</td>
			</tr>
			<tr>
				<th>"data":</th>
				<td>"<textarea name="data"><?php echo htmlentities($pipe->data); ?></textarea>",</td>
			</tr>
			<tr>
				<th>"target":</th>
				<td>"<select name="target">
					<?php foreach(TARGETS as $name => $value) {
						echo '<option ' . ($pipe->target == $value ? 'selected' : '') . ' value="' . $value . '">' . $name . '</option>' . PHP_EOL;
					}?>
				</select>",</td>
			</tr>
			<tr>
				<th>"token":</th>
				<td>"<input name="token" type="text" required value="<?php echo htmlentities($pipe->token); ?>" />",</td>
			</tr>
			<tr>
				<th>"delay":</th>
				<td>"<input name="delay" type="number" min="0.2" max="120" step="0.1" value="<?php echo htmlentities($pipe->delay); ?>" />"
				<small>// Delay between log lines, in seconds.</small></td>
			</tr>
		</table>
		}

		<p><button class="button">Save</button></p>
	</form>
</body>
</html>