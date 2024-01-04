<!doctype html>
<html>
    <head>
        <style>
            .sd{
                margin:auto;
            }

            p{
                display:flex;
                justify-content:space-evenly;
                
            }
            .ul{
               border:2px pink solid;
               border-radius:20px; 
               background: white;
               width: fit-content;
               padding-top:0;
               margin-top: 0;

            }
            .ul li {
                display:inline-block;
                margin-left: 20px;
                padding-top:0;
            }
            .ul li a{
                font:20px serif;
                text-decoration:none;
                marin-left: 10px;
                color:black;
            }
            .ul li a:hover{
                font:20px serif;
                text-transform: uppercase;
                background-color: pink;
                border-radius:10px;
            }
          img{
            width:100px;
            height:100px;
            border-radius:50%;
            margin-top:auto;
          }

          #aa{
            font-size:25px;
            border-radius:10px;
          }
        </style>
    </head>
    <body>
        <div class="sd">
<center>
    <p>
        <img src="logo.png" >
        <ul class="ul">
        
        <li>
            <a href="Acceuil.php">Acceuil</a>
        </li>
        <li>
            <a href="afficher.php">Service</a>
        </li>
        <li>
            <a href="contact.php">Contactez-nous</a>
        </li>
        <li>
            <a href="propos.php">à Propos</a>
        </li><li></li>
        </ul>
        </p>
            <br>
        <input id="aa" type="text" placeholder="rechercher" name="cherche">
        </center>
        </div>
    </body>
</html>

