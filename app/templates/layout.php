<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" >


	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>



<div class="container">
		<header>
			<h1>www-]MURL.ly[-www</h1>
			<p>RaccourcisseURL</p>
			<h2><?= $this->e($title) ?></h2>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<section>
			<?= $this->section('side_content') ?>
		</section>

		<footer>
		</footer>
	</div>
	

</body>
</html>