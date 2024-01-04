<head>
<title>ACCEUIL</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
    body{
        background:url(back.webp);
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
           .parent #ppaa{
                border-radius: 10px;
                
               background-color:rgb(245, 238, 246);
                width: fit-content;
                height: fit-content;
                display: flex;
                justify-content: center;
                align-items: center;
                margin:auto;

            }
            .li:hover{
               
               font-size:28px;
               background:yellow;
                border-radius: 10px;
              
            }
                
            .lii:hover{
               font-size:28px;
               background:red;
                border-radius: 10px;
                
            }

            .li,.lii{
                margin: 0;
               padding: 2px 0;
               display:block;
               color:white;
               font-size:28px;
               background:white;
                border-radius: 10px;
            }

           a{
               font-size:38px;
               color:darkviolet;
              text-decoration:none;
           }

</style>
</head>
<body>
<div class="parent">
<?php
include 'include/nav.php'
?>	

<br>

<p id="ppaa">

    <ul>
        <li class="li"><a href="afficher.php" id="a1">Afficher les Produits</a></li>
        <br><li class="li"><a href="ajouter.php" id="a2">Ajouter un Produit</a></li>
        <br><li class="li"><a href="modifier.php" id="a3">Modifier un Produit</a></li>
        <br> <li class="li"><a href="supprimer.php" id="a4">Supprimer un Produit</a></li>
        <br><li class="lii"><a href="login.php" id="a5">Retour</a></li>
    </ul>
        </p>

</div>
<?php ?>
</body>
</html>