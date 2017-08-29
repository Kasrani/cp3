<!DOCTYPE html>
<html>
<head>
	<title>app</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">


<nav class="navbar navbar-inverse"> 
	<div class="container-fluid"> 
		<div class="navbar-header"> 
			<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> 
				<span class="sr-only">Toggle navigation</span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
			</button> 
			<a href="#" class="navbar-brand"><img src="assets/images/logo.png" alt="Wayk Now"></a> 
		</div> 
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9"> 
			<ul class="nav navbar-nav"> 
				<li class="<?php echo ($section == 'home')? 'active':''; ?>"><a href="index.php?section=home">Home</a></li> 
				<li class="<?php echo ($section == 'categories')? 'active':''; ?>"><a href="index.php?section=categories">Gestion des categories</a></li> 
				<li class="<?php echo ($section == 'actualites')? 'active':''; ?>"><a href="index.php?section=actualites">Gestion des actualités</a></li> 
			</ul> 
		</div> 
	</div> 
</nav><!--Fin nav-->
<h3><?php echo $titrePage ?></h3>
<section>
	<div>
		<?php echo $content; ?>
	</div>
</section>

</div><!--Fin container-->

</body>
</html>