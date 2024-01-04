<html>
<head>
<title>SUPPRIMER</title>
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
				border-radius:14px;
			}
	</style>
</head>
<body>
	<div class="parent">
	<?php
	
	include('include/nav.php');
		include('database.php');?>
	<center>
<h3>le ID de produit qui veut supprimer</h1>
	<form action="supprimer.php" method="GET">

<h1>id</h4>
<br>
	<input type="text" class="jk" name="id">

<br><br><br>
<input type="submit" value="Supprimer"> &nbsp;&nbsp;<input type="reset" value="Effacer">
 &nbsp;&nbsp;<a href="Acceuil.php"><input type="button" value="Retour" onclick="fc()"></a>
	</form>
	</center>
<br><br><br>
	
	<?php
		if(isset($_GET['id']))
		{
			if(!empty($_GET['id']))
			{
				
		connexion();
		$sql="delete from produits where id='".$_GET['id']."'";
		$reponse = $bdd->query($sql);
		echo "<center> Le produit de id : <strong><i>".$_GET['id']."</i></strong> est supprimé avec succés</center>";
			}
			else
			echo" ce produit n'exist pas dans le stock";
		}
		else
		echo" Veuillez entrer le ID";
		
	?>
	</div>
</body>
</html>