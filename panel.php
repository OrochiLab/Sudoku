<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
<?php
require_once('Metier/Joueur.class.php');

	if(isset($_POST['login']) and isset($_POST['pass']))
	{
		$joueur = Joueur::getJoueur($_POST['login'],$_POST['pass']);
		if(isset($joueur))
		{
		?>
			<h1>Bonjour : <?php echo $joueur->getNom();?></h1>
			<form action="jeu.php" method="post">
<pre>
Veuillez choisir entre : <select name="choix"> 
<option value="9">9x9</option>
<option value="16">16x16</option>

</select> pour commencer une partie

<input type="submit" value="Valider" />

</pre>
			
			</form>
		
		<?php
		}
		else
			echo '<h1>Authentification echouée</h1>';
	}
	else
	{
		echo '<h1>Accès refusé</h1>';
	}


?>
</body>
</html>