
<?php
include_once('../Sudoku/header.php');
require_once('Metier/Joueur.class.php');

	if(isset($_POST['login']) and isset($_POST['pass']))
	{
		$joueur = Joueur::getJoueur($_POST['login'],$_POST['pass']);
		$_SESSION['nom']=$joueur->getNom();
	}
	if(isset($joueur) or isset($_SESSION['nom']))
	{
			
?>
	<div class="row span6">
		<form class="form" action="?page=jeu" method="post">
			<pre>
			Veuillez choisir entre : 
			<select name="choix"> 
				<option value="9">9x9</option>
				<option value="16">16x16</option>
			</select> pour commencer une partie

			<input type="submit" value="Valider" />

			</pre>
					
		</form>

	</div>		
<?php
	}
	else
	{
		echo '<h1>Accès refusé</h1>';
	}


?>
