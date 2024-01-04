<!DOCTYPE html>
<html>
    <head>
        <title>AFFICHER</title>
        <style>
body{
        background:gray;
    }
  .parent{
                width:50%;
				height:fit-content;
                border:5px solid gld;
				border-radius:14px;
				margin:auto;
                text-align:center;
               background:rgba(421,432,214,.4);
               
            }
            .produit{
                display: inline-block;
                background-color:white;
                width:40%;
				height:40;
                border:5px solid gld;
				border-radius:14px;
				margin:5px ;
            }
            .produit a{
                text-decoration:none;
                color:black;
            }
            #i3{
            width:fit-content;
				height:fit-content;
                border:0;
				border-radius:14px;
                background:tomato;
                font-size: 35px;
                text-decoration:none;
            }
        </style>
    </head>
    <body>
        <div class="parent">

        <?php include('include/nav.php');
	include('database.php');
?>
<br><br>
    <?php
connexion();
					$sql1="select * from produits ";
					$reponse = $bdd->query($sql1);
					while($enreg = $reponse->fetch())
					{ ?>


<div class="produit"><a href="acheter.php">
<h2><?php echo $enreg['libelle']; ?></h2>
<h3>marque :<?php echo $enreg['marque']; ?></h3>
<h4>prix :<?php echo $enreg['prix']; ?> dh</h4>
                    </a>
                    
        </div>
        <?php
                    }
            ?>
            
    <a href="acceuil.PHP" id="i3"><p id="a3"><input id="i3" type="button" value="Retour" ></p></a>
            </div>
    </body>
</html>
