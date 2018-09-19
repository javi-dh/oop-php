<?php
	require_once 'autoload.php';

	$avatar = new Movie('Avatar', 6.5);
	$laMonja = new Movie('La Monja', -100, '2018-09-14');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Digital Movies</title>
	</head>
	<body>
		<p>
			<?php echo $avatar->getTitleYear() ?>
		</p>
		<p>
			<?php echo $laMonja->getTitleYear() ?>
		</p>
	</body>
</html>
