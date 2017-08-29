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
<h1>Formulaire</h1>
	<form action="check.php" method="POST">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Nom</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Votre nom">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Mot de passe</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
	  </div>

	  <button type="submit" class="btn btn-default">Connexion</button>
	</form>

</div>

</body>
</html>