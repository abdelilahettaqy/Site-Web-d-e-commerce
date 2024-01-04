<html>
<head>
<title>AJOUTER</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
	 .parent{
                width:50%;
				height:fit-content;
                border:5px solid gold;
				border-radius:14px;
				margin:auto;
                text-align:center;
               background-color:rgb(245, 238, 246);
               
            }
			.jk{
				font-size:25px;
				border-radius:5px;
			}
			table{
				
				margin:auto;
				border:orange 3px solid;
				border-radius:5px;
			}
			</style>
</head>
<body>
<div class="parent">
<?php 
include('include/nav.php');
include('database.php');
?>
<br>
<form action="ajouter.php" method="POST">
	<table >
	
		<tr><th>id:</th><td><input type="text" class="jk" name="id"></td></tr>
		<tr><th>libelle:</th><td><input type="text" class="jk" name="nom"></td></tr>
		<tr><th>Catégorie:</th><td><input type="text" class="jk" name="cat"></td></tr>
		<tr><th>Marque:</th><td><input type="text" class="jk" name="marque"></td></tr>
		<tr><th>Prix:</th><td><input type="text" class="jk" name="prix"></td></tr>
	</table>
<br>
<input type="submit" value="Ajouter"> &nbsp;&nbsp;<input type="reset" value="Effacer">
 &nbsp;&nbsp;<a href="Acceuil.php"><input type="button" value="Retour" onclick="fc()"></a>
</form>
</center>

<?php
	if( isset($_POST['cat']) and isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['marque']) and isset($_POST['prix']))
	{
		if( !empty($_POST['cat']) and !empty($_POST['id']) and !empty($_POST['nom']) and !empty($_POST['marque']) and !empty($_POST['prix']))
		{
		connexion();
		$sql1="select * from produits where id='".$_POST['id']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into produits(id, cat, libelle, prix,marque) values('".$_POST['id']."','".$_POST['cat']."','".$_POST['nom']."','".$_POST['prix']."','".$_POST['marque']."')";
				$bdd->exec($sql2);
				//deconnexion();
			echo "<center>Le produit << ".$_POST['nom']." >>est ajouté avec succés</center>";
			}
			else
			echo"ce poduit exist dans le stock ";
		}
		else
		echo"Attention quelque champ est vide";
	} 
	?>
	
	</div>
</body>
</html>