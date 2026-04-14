<?php 
var_dump ($_POST[ 'username']);
var_dump ($_POST['pasword']);

$db_username = 'dating_socks';// de la db
$db_password = 'fXEeSX]O23.Y6ZE_';// de la db

if ( $db_username ===$_POST['username'] && $db_password ===$_POST['password'] ){
        header ('Location: dashboard.php');
}
else{ header ('Location: login.php?error=1');

}
    //aller sur login avec message erreur




?>