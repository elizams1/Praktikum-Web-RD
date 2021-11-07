<?php 
$username = 'faradila';
$password = '444';
if ($_POST['uname']==$username && $_POST['pass']==$password ) {
    header('Location: ./welkam.php');
}
?>