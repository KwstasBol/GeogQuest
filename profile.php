<h1>I AM IN!</h1>
<?php
session_start();
if(isset($_SESSION['login_user'])){
    echo ($_SESSION['login_user']);
}
else{
    echo('Not logined!');
}

?>
