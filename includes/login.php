
	<?php
	if(!isset($_SESSION['nom']))
	{
	?>
	<fieldset>
		<legend>Authentification :</legend>
	<form action="?page=panel" method="post">
		<pre>
			Login        : <input type="text"  name="login" />
			
			Mot de passe : <input type="password" name="pass" />
			
				           <input type="submit" value="Valider" />
		
		</pre>
	
	</form>
	</fieldset>
	<?php
	}
	else
	{
	?>
	<p>Vous êtes déjà connecté, veuillez accéder au panel pour jouer une partie, ou bien vous déconnecter si vous souhaitez se connecter avec un autre compte</p>
	<a href="?page=panel">Accéder au panel</a><br/>
	<a href="?page=deconnexion">Se deconnecter</a>
	
	<?php
	}
	?>