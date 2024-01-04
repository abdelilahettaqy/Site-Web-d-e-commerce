<!DOCTYPE html>
<html>
    <head>
        <style>
body{
        background:gray;
        display: flex;
        justify-content: center;
        align-items: center;
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
            #a1,#i1{
            width:100%;
				height:fit-content;
                border:0;
				border-radius:14px;
                background: rgba(29, 199, 156, 0.854);
                font-size: 35px;
            }
            
            #a2,#i2{
            width:100%;
				height:fit-content;
                border:0;
				border-radius:14px;
                background: rgb(248, 211, 22);
                font-size: 35px;
            }
            #i3{
            width:fit-content;
				height:fit-content;
                border:0;
				border-radius:14px;
                background:tomato;
                font-size: 35px;
            }
            h1{
                background-color: aqua;
            }
        </style>
     </head>
    <body>
<div class="parent">

    <h1>Paiement</h1><br><br>
    <h3>Veuillez choiser la mode de paiement</h3>
    <br>
    <p id="a1"><input id="i1" type="button" value="Carte Bancaire" onclick="ban()"></p>
    <p id="a2"><input id="i2" type="button" value="Espece" onclick="esp()" ></p>
    <a href="afficher.PHP"><p id="a3"><input id="i3" type="button" value="Retour" ></p></a>

    <script lang="JavaScript">

        function ban(){
            alert("Felicitation !! ,votre paiement est effectuer automatiquement ");
        }

        function esp(){
            alert("vous payez au moment de livrason ");
        }
    </script>
</div>
    </body>
</html>