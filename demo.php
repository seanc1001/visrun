<?php

define('DB_NAME', 'website');
define('DB_USER', 'root');
define('DB_Password, '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
    die('Can/'t use' . DB_NAME . ':' . mysql_error());
}

$value1 = $_POST['Booking_time'];
$value2 = $_POST['Booking_date'];
$value3 = $_POST['Booking_time'];
$value4 = $_POST['Student_ID'];
$value5 = $_POST['Student_name'];
$value6 = $_POST['Booking_equipment'];



$sql = "INSERT INTO bookings(Booking_time, Booking_date, Booking_time, Student_ID, Student_name, Booking_equipment) VALUES ('$value1', $value2, $value3, $value4, $value5, $value6)";

if (!mysql_query($sql)){
    die('Error: ' . mysql_error());
}

mysql_close();
?>
