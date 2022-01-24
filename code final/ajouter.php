<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Aclonica&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ajouter.css">
    <title>Document</title>
</head>
<body>

    <nav>
        <div>
        <a href="Acceuil.html"><img src="logo.png" alt="logo" id="logo"></a>
        </div>
        <div class="menu">
            <ul>  
                <li><a href="Cabinet.html">Cabinet</a></li>
                <li><a href="Acceuil.html">Acceuil<img src="Vector.png" class='vec'></a></li>
                <li><a href="Administration.html" class="active">Administration</a></li>
            </ul>
        </div>
        <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-menu">
                <li><a href="Cabinet.html">Cabinet</a></li>
                <li><a href="Acceuil.html">Acceuil</a></li>
                <li><a href="Administration.html"  >Administration</a></li>
            </ul>
          </div>
    </nav>
<div class="container">    
    <form class="parents" action="ajouter.php" method="post">


    <div>
        <h1>Ajouter un patient</h1>

    <div class="first_row">
        <div class="div1">
            <p>Nom</p>
            <input class="in" id="nom" type="text" name="Nom" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" required>
        </div>
        <div class="div2">
            <p>Prenom</p>
            <input class="in" id="prenom"  type="text" name="Prenom" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" required>
        </div>
    </div>

    <div class="second_row">
        <div class="div1">
            <p>Date de naisance</p>
            <input id="date" id="date"  class="in" type="date" name="Date_de_naissance"  max="" required>
        </div>
        <div class="div2">
            <p>Numero de télephone</p>
            <input class="in" id="tele"  type="text" name="Numero_de_télephone" pattern="[0-9]{10}" title="ex : 0612345678"  required>
        </div>
    </div>

    <div class="third_row">
        <div class="div1">
            <p>E-mail</p>
            <input class="in"  id="gmail" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="ex : exemple@exemple.ex" required>
        </div>
        <div class="div2">
            <p>La maladie</p>
            <input class="in" id="malad"  type="text" name="LaMaladie" pattern="[a-zA-Zàâæçéèêëîïôœ ùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" required>
        </div>
    </div>

    <input class="button" type="submit" value="Enregistrer" />

    </div>
    </form>



    <div id="result">
        <p>Le patient est enregistrer <img src="Vector1.png" class="vec1"></p>
    </div>   
    </div>
</div>

    <div class="footer">
        <div class="firstP">
            <p>+212 123 - 456 - 7890</p>
            <p>DrRahbaniRafik@gmail.com</p>
        </div>
            <p id="centerP">© 2022 D.Rahbani Rafik</p>
            <ul>
                <li><img src="facebook.png" alt="facebook_cabinet dr Rahbani Rafik"></li>
                <li><img src="insta.png" alt="instagrame_cabinet dr Rahbani Rafik"></li>
                <li><img src="twitter.png" alt="twitter_cabinet dr Rahbani Rafik"></li>
            </ul>
    </div>
<script>
    function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
    }

    function result(){
        document.getElementById("result").style.display="block";
        setTimeout(function(){document.getElementById("result").style.display="none";},2000);   
    }


var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("date").setAttribute("max", today);


</script>
</body>
</html>

<?php
    error_reporting(0);
    $lastName = $_POST['Nom'];
    $firstName = $_POST['Prenom'];
    $Date_de_naissance = $_POST['Date_de_naissance'];
    $Numero_de_télephone = $_POST['Numero_de_télephone'];
    $email = $_POST['email'];
    $LaMaladie = $_POST['LaMaladie'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cabinet";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
        $stmt = $conn->prepare("insert into patient(nom, prenom, dtn, tele, gmail, maladie) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $lastName, $firstName, $Date_de_naissance, $Numero_de_télephone, $email, $LaMaladie);
        $execval = $stmt->execute();

        echo "<script> result(); </script>";
        $stmt->close();
        $conn->close();
    ?>