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
    <link rel="stylesheet" href="operation.css">
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
                <li><a href="Administration.html" >Administration</a></li>
            </ul>
          </div>
    </nav>


<div class="container">    
    <div class="parents">
        <table>
            <tr>
                <th>Nom</th>
                <th>Preom</th>
                <th>Date de naissance</th>
                <th>N° de tél</th>
                <th>E-mail</th>
                <th>La maladie</th>
                <th>Action</th>
            </tr>
            <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "cabinet";
        
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT nom, prenom, dtn, tele, gmail, maladie FROM patient";
        $result = $conn->query($sql);
        

        foreach ($result as $value) {


            $v1 = $value['nom'];
            $v2 = $value['prenom'];
            $v3 = $value['dtn'];
            $v4 = $value['tele'];
            $v5 = $value['gmail'];
            $v6 = $value['maladie'];
    
                echo "    <tr>
               <td> $v1 </td>
               <td> $v2 </td>
               <td> $v3 </td>
               <td> $v4 </td>
               <td> $v5 </td>
               <td> $v6 </td>
                <td><div name='image' id='image'><a onclick='result()' href ='supp.php?gm=$value[gmail]'><input id='image1' type='image' src='action_supprimer.png'></a>
                <a href ='modifier.php?gm=$value[gmail] & nm=$value[nom] & pn=$value[prenom] & dn=$value[dtn] & tp=$value[tele] & md=$value[maladie]'><input type='image'  id='image2' src='action_ajouter.png'></a></div></td>
                </tr>";
            
            }
        
        
        $conn->close();
        ?>
                
            </tr>
            </table>
            
    </div>
<div id="result">
                <p>Le patient est supprimer <img src="Vector1.png" class="vec1"></p>
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
        setTimeout(function(){document.getElementById("result").style.display="none";},5000);   
    }
</script>
</body>
</html>