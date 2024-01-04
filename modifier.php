<html>
<head>
<title>MODIFIER</title>
<style>
	  .parent{
                width:50%;
				height:fit-content;
                border:5px solid gld;
				border-radius:14px;
				margin:auto;
                text-align:center;
               background:rgba(421,432,214,.4);
               
            }
	.jh{
		font-size:25px;
		font-family:serif;
		color:red;
	}
	.jjh{
		
		font-size:25px;
		border-radius:10px;
	}
	</style>
</head>
<body>
	<div class="parent">
	<?php include('include/nav.php');
	include('database.php');
	?>
	<br>
	<form action="modifier.php" method="POST">
			<center>
		<span class="jh">Id  :</span>
		<input type="text" class="jjh" name="id">
		<br>
			<input type="submit"  class="jjh"  value="Selectionner"> 
			<br>
			</form>
</center>
<?php
	
		
				if(isset($_POST['id']))
				{
					connexion();
					$sql1="select * from produits where id='".$_POST['id']."'";
					$reponse = $bdd->query($sql1);
					while($enreg = $reponse->fetch())
					{ ?>

<center>
			
			<h2><u>   Modification  :<u> </h2>
			<form action="modifier.php" method="POST">
			<table>
			<tr><td><span class="jh">Id  :</span></td><td><input  class="jjh" type="text" name="id" value="<?php echo $enreg['id']; ?>" ><br></td></tr>
			<tr><td><span class="jh">Categorie  :</span></td><td><input  class="jjh" type="text" name="cat" value="<?php echo $enreg['cat']; ?>" ><br></td></tr>
			<tr><td><span class="jh">Libelle  :</span></td><td><input  class="jjh" type="text" name="libelle" value="<?php echo $enreg['libelle']; ?>"><br> </td></tr>
			<tr><td><span class="jh">Prix  :</span></td><td><input  class="jjh" type="text" name="prix" value="<?php echo $enreg['prix']; ?>"><br></td></tr>
			<tr><td><span class="jh">Marque  :</span></td><td><input  class="jjh" type="text" name="marque" value="<?php echo $enreg['marque']; ?>"><br></td></tr>
			<br><br>
			<tr><td><input type="submit" class="jjh" value="Modifier" > </td><td><input type="reset" class="jjh" value="Annuler"></td><td>
 <a href="Acceuil.php"><input type="button" class="jjh" value="Retour" onclick="fc()"></a></td></tr>
			
			</form>
	</center>




	
						
    <?php
	// mise à jour de produit
	if ( isset($_POST['libelle']) and isset($_POST['prix']) and isset($_POST['cat'])and isset($_POST['marque']))
	
	{
		
		$sql="update produits set libelle='".$_POST['libelle']."',marque='".$_POST['marque']."',prix='".$_POST['prix']."',cat='".$_POST['cat']."' where id= '".$_POST['id']."'";
		$bdd->exec($sql);
		echo '<center><mark> Modification du produit <strong>'.$_POST['id'].'</strong> opperation du modification est effuctue avec succer </center>' ; //alerte('Modification du produit'.$_POST['nom'].' effectué avec succés');
	
	


	}


}
}

?>
</div>
</body>
</html>