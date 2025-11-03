<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<title>Create Account</title>
</head>

<body>
	<h1><strong>Création de compte</strong></h1>
	<form method="post" action="./createaccount_traitement.php">
		<p><label for="pseudonyme_or_email">Entrer un pseudonyme ou une adresse email: </label><br>
			<input type="text" name="pseudonyme_or_email" value="Test" required />
		</p>
		<p><label for="password">Mot de passe:</label><br>
			<input type="password" name="password" value="test" required />
		</p>
		<p><label for="confirm_password">Confirmer le mot de passe:</label><br>
			<input type="password" name="confirm_password" value="test" required />
		</p>
		<button type="submit">Créer le compte</button>
	</form>
</body>

</html>
