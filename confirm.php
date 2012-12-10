<?php
include('connect.php');
$eName = $_REQUEST['eventName'];
$eName = str_replace(array('\'',':',';','(',')','"'),'', $eName);
$eName = ucFirst($eName);
$date = $_REQUEST['month_start'] . "/" . $_REQUEST['day_start'] . "/" . $_REQUEST['year_start'];
$location = $_REQUEST['location'];
$location = str_replace(array('\'',':',';','(',')','"'),'', $location);
$eventType = $_REQUEST['eventType'];
$contact = $_REQUEST['contactName'];
$contact = str_replace(array('\'',':',';','(',')','"'),'', $contact);
$hours = $_REQUEST['hours'];
$addtInfo = $_REQUEST['addtInfo'];
$addtInfo = str_replace(array('\'',':',';','(',')','"'),'', $addtInfo);
$nameTrimmed = str_replace(' ', '', $eName);
$nameTrimmed = strtolower($nameTrimmed);
$primKey = substr($nameTrimmed, 0, 10) . "_" . $_REQUEST['month_start'] . "/" . $_REQUEST['day_start'];
$sql = "INSERT INTO events VALUES('" . $primKey . "', '" . $eName . "', '" . $location . "', '" . $date . "', '" . $eventType . "', '" . $contact . "', " . $hours . ", '" . $addtInfo . "')";
$result = pg_query($link, $sql);
if (!$result) {
die("Error in SQL query: " . pg_last_error());
} 
if ($result) {
echo('Event Created');
}
$form = '<form action="mainPage.php" method="post">';
$form .= '<input type="hidden" name ="username" value ="' . $_REQUEST['username'] . '" />';
$form .= '<input type="hidden" name ="PW" value ="' . $_REQUEST['PW'] . '" />';
$form .= '<input type="submit" value="Return to Main Page" ></form>';
echo $form;

