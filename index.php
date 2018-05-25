
<?php
   
   
?>
 <html>
 <head>
 <title>
 GeoQuest
 </title>
 </head>
 
 <body>     
 <h1>Welcome to GeoQuest</h1>
 <div>
 <h3><a href="./register.php">Εγγραφή</a></h3>
 </div>
 <div>
 <h3><a href="./login.php">Σύνδεση</a></h3>
 </div>
 <div>
 <h3  id="h3_logout" style="visibility:hidden"><a href="./logout.php">Αποσύνδεση</a></h3>
 </div>

 <script>
   if(isset($_SESSION['login_user'])){
        document.getElementById("h3_logout").style.visibility = "visible";
    }
 </script>
 </body>
 
 </html>