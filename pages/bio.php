<?php
$user = getUserData();

?>
<h1>Ma bio</h1>
<h2><?= $user['first_name']?> <?= $user['name']?></h2>
<h3><?= $user['occupation'] ?></h3>
<ul><?php foreach ($user['experiences'] as $key => $value):?>
	
	<li><?= $value['company']?> ( <?= $value['year']?> )</li>
<?php endforeach ?>
</ul>




