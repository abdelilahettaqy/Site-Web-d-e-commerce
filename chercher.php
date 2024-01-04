<html>
<head>
<title>CHERCHER</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php include('menu.php');
include('fonctions.php'); ?>
<center>
	<h3>Rechercher un produit</h3>
	<form action="chercher.php" method="POST">
		<table border="1" bgcolor="#FF9966">
		<tr><td>Mot Clé: </td><td><input type="text" name="mc"></td></tr>
		</table>
		<br>
		<input type="submit" value="Rechercher"> &nbsp;&nbsp;<input type="reset" value="Annuler">
	</form>
</center>
<?php
	if(isset($_POST['mc'])) // variable existant
	{
		if(!empty($_POST['mc'])) //champs non vide
		{
			connexion();
			$sql1="select * from produit where ref='".$_POST['mc'].
			"' or nom='".$_POST['mc']."' or marque='".$_POST['mc'].
			"' or prix='".$_POST['mc']."' or cat='".$_POST['mc']."'";
			$reponse = $bdd->query($sql1);
			$nbrDeLigne = $reponse->rowCount();
			echo "<center> <b>Il y a ".$nbrDeLigne." Produit(s)</b></center>";
?>
			<center><table border="1">
			    <tr bgcolor="#FF9966"><th>Catégorie</th><th>Réference</th><th>Nom</th><th>Prix</th><th>Marque</th><th>Modifier / Supprimer</th></tr>
			<?php
				while($enreg = $reponse->fetch())
				{//debut de while
				echo "<tr><td>".$enreg['cat']."</td>";
				echo "<td>".$enreg['ref']."</td>";
				echo "<td>".$enreg['nom']."</td>";
				echo "<td>".$enreg['prix']."</td>";
				echo "<td>".$enreg['marque']."</td>";
				echo "<td><a href='modifier.php?reference=".$enreg['ref']."'>Modifier</a> 
				&nbsp;<a href='supprimer.php?reference=".$enreg['ref']."'>Supprimer</a></td>";
				echo "</tr>";
				} // fin de while
			echo "</table>";
		} // fin de if de champs vide
				else // si le champs mc est vide
				alerte('Taper un mot cle');
	} //fin de if de variable existants
			?>
</body>
</html>