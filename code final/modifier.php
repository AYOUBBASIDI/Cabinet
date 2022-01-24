<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "cabinet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
error_reporting(0);
$in = $_GET['gm'];
$gm = $_GET['gm'];
$nm = $_GET['nm'];
$pn = $_GET['pn'];
$dn = $_GET['dn'];
$md = $_GET['md'];
$tp = $_GET['tp'];



?>

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
    <link rel="stylesheet" href="modifier.css">
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
                <li><a href="Administration.html">Administration</a></li>
            </ul>
          </div>
    </nav>


    <form class="parents" action="change.php" method="post">
        <div>
            <h1>Modification</h1>

        <div class="first_row">
            <div class="div1">
                <p>Nom</p>
                <input type="text" name="nom" value="<?php echo $nm ?>">
            </div>
            <div class="div2">
                <p>Prenom</p>
                <input type="text" name="prenom" value="<?php echo $pn ?>">
            </div>
        </div>
    
        <div class="second_row">
            <div class="div1">
                <p>Date de naisance</p>
                <input type="text" name="dtn" value="<?php echo $dn ?>">
            </div>
            <div class="div2">
                <p>Numero de télephone</p>
                <input type="text" name="tele" value="<?php echo $tp ?>">
            </div>
        </div>
    
        <div class="third_row">
            <div class="div1">
                <p>E-mail</p>
                <input type="text" name="gmail" value="<?php echo $gm ?>">
            </div>
            <div class="div2">
                <p>La maladie</p>
                <input type="text" name="malad" value="<?php echo $md ?>">
            </div>
            <input type="text" style='display:none;' name="in" value="<?php echo $gm ?>">
        </div>
        <input class="btn" onclick="result()" type="submit" value="Enregistrer" />
        
    
        </div>
</form>
        
    
    
        <div id="result">
            <p>La modification est enregistrer <img src="Vector1.png" class="vec1"></p>
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
</script>
</body>
</html>


