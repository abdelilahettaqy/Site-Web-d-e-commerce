<!DOCTYPE html>
<html>
    <head>
        
<title>COMPTE</title>
    <style>
        body{
            display:flex ;
            justify-content:center ;
            align-items: center;
            width: 100%;
            height: 100vh;
            background:url(lg.jpeg);
        }
.parent{
                width:50%;
				height:fit-content;
                border:5px solid gold;
				border-radius:14px;
				margin:auto;
                text-align:center;
                background-color:#efd29c;
            }

            #ds,#dd,#ss{
                font: 25px serif;
				border-radius:14px;
            }
    </style>
    </head>
    <body>
        <div class="parent">
    <?php
    include('database.php')
    ?>
  <h1><i> <mark><marquee>Ajouter un nouveau compte </marquee></mark></i></h1>
  <hr><hr>
  
<?php
if(isset($_POST['login']) and isset($_POST['mp']))
{
if(!empty($_POST['login']) and !empty($_POST['mp']))
{
    connexion();
    $sql="select * from utilisateur where login='".$_POST['login']."'";
    $reponce=$bdd->query($sql);
    $donnees=$reponce->fetch();
    if(empty($donnees))
    {
        $sq="insert into utilisateur(login,password) values ('".$_POST['login']."','".$_POST['mp']."')";
        $bdd->exec($sq);
        echo" félicitation <'".$_POST['login']."'> vous avez inscrie";
    }
    else
   { echo"Monsieur <'".$_POST['login']."'> vous étes déjà s'inscrire";}
}
else

    echo" Veuillez remplir tout les champs";

}
?>
<br>
  <form action="compte.php" method="POST">
    <label id="ds" for="ss" align="left">Login :</label><br>
<input id="ss" name="login" type="text" placeholder="Login">
<br><br>
<label id="ds" for="dd" >Mot de Pass :</label><br>
<input id="dd" name="mp" type="password" placeholder="PassWord">

<br><br><br><br>
<input name="bt" id="vv" value="Ajouter" type="submit">
<input name="an" id="bb" value="Annuler" type="reset">
<a href="login.php"><input type="button" value="Retour" ></a>
<br>
</form>
</div>
    </body>
</html>
