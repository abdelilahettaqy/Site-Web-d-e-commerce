<html>
<head>
<title>LOGIN</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>

    body{
        width: 100%;
        height: 100%;
        color:gold;
        background :url(lg.jpeg);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    div{
        background: rgba(245, 255, 255,0.4);
        border-radius: 10px;
        width: fit-content;
        height: fit-content;
        text-align: center;
        padding:30px;
        bordr:2px dotted red;
    }
    #ss,#dd,label,#vv,#bb{
        font-size: 25px;
        border-radius: 10px;
    }
    #bb{
        background-color: red;
        color: azure;
        border-radius: 10px;
       
    }
    #vv{
        background-color: greenyellow;
        color: azure;
        border-radius: 10px;
    }
    #kl{
        font-size: 25px ;
        font-family:serif;
    }
    h3{
       color:red;
    }
</style>
</head>
<body>
 
<div>
   
<h1>Authentification :</h1><br>
<form action="login.php" method="POST" align="center">
    <br>
    
<label for="ss" align="left">Login :</label><br>
<input id="ss" name="login" type="text" placeholder="Login">
<br><br>
<label for="dd" >Mot de Pass :</label><br>
<input id="dd" name="mp" type="password" placeholder="PassWord">

<br><br><br><br>
<input name="bt" id="vv" value="S'inscrire" type="submit">

<input name="bt" id="vv" value="S'inscrire" type="hidden">
<input name="an" id="bb" value="Annuler" type="reset">

<br>
</form>

<?php

include('database.php');
if(isset($_POST['bt']) ){
   // if(!empty($_POST['login']) and !empty($_POST(['pw']))){
        
    connexion();
    $login="select * from utilisateur where login='".$_POST['login']."' and password='".$_POST['mp']."'";
   $rep=$bdd->query($login);
   if($dlogin=$rep->fetch())
    header( "location: Acceuil.php");
    
    else{
       

        echo"<center><h3>le login ou Mot de passe est incorrecte</h3> </center> ";
        ?>
        <br>
        <a href="compte.php">créer nouveau compte</a>
    
        <?php
    }}

?>

</div>
</body>
</html>