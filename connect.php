<?php
$user = 'root';
$pass = '';
$db = 'website';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect);

echo"great work!!!";



?>