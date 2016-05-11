<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link href='https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" >


	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>


<!-- 
<div class="container"> -->
		<header>
			<h1><span>www-]</span>MURL.ly<span>[-www</span></h1>
			<p>RaccourcisseURL</p>
			<h2><?= $this->e($title) ?></h2>
		</header>



   <main class="wrapper">


       	<section class="content">

           	<h2>URL à réduire</h2>

			<?= $this->section('main_content') ?>

			<?= $this->section('side_content') ?>




           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nisi iusto, quis aspernatur numquam quas illo vitae provident, reiciendis neque quam placeat harum quae rerum hic ratione expedita vel, corrupti.</p>
       </section>

       <nav id="navigation">
           <a href="#">Liste</a>
           <a href="#">Login</a>
           <a href="#">Inscription</a>
           <a href="#">FAQ</a>
<!--            <a href="#">Picon bière</a> -->
       </nav>
       
       <aside>
           <h2>Liste des url</h2>

			<?= $this->section('side_content') ?>

           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ratione quis, consequatur quas nemo numquam excepturi nihil veniam, dolor eum dignissimos. Ipsam, non consectetur voluptatem quasi odit eos dolore ex!</p>
       </aside>
  </main>

		<footer>
		&copy; Yvan Le Brigand / thierry mézenge | WEBFORCE3
		</footer>
	</div>
	

</body>
</html>