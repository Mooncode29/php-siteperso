<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<body>
<h1>Zone resérvée à l'administrateur</h1>
<?php
	$json = file_get_contents(__DIR__.'/../data/last_message.json');
	$message = json_decode($json);
?>
<dl>
	<dt>Nom</dt>
	<dd><?= $message->name ?></dd>
	<dt>Message</dt>
	<dd><?= $message->message ?></dd>
</dl>
</body>
</html>