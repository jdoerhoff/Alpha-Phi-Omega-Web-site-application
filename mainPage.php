<html>
<head>
<script type="text/javascript" src="scripts/jquery-1.8.2.js"></script>
<script type="text/javascript" src="scripts/jquery.searchabledropdown.js"></script>
<script>
	$(document).ready(function() {
    $("#eventList").searchable();
    });
</script>
</head>
<body> 
<div id="main">	
<?php 
$form = '<form action="createEvent.php" method="post">';
$form .= '<input type="hidden" name ="username" value ="' . $_REQUEST['username'] . '" />';
$form .= '<input type="hidden" name ="PW" value ="' . $_REQUEST['PW'] . '" />';
$form .= '<input type="submit" value="Create New Event" ></form>';
echo $form;
include('connect.php');
$sql = "SELECT DISTINCT ename, edate FROM events ORDER BY edate";
$result = pg_query($link, $sql);
if (!$result) {
die("Error in SQL query: " . pg_last_error());
}       

// iterate over result set
// print each row
echo ('Please choose an event to display</br>');
echo('<select id="eventList">');
$count = 0;
$events = array();
while ($row = pg_fetch_array($result)) {
$events[$count] = $row[0];
$count++;
}
$events = quickSort($events, 0, NULL);
$a = 0;
while($a < $count) {
echo('<option value = ' . $events[$a] . '>' . $events[$a] .' </option>');
$a++;
}
echo('</select>'); 
echo('<input type="button" value="Go" onclick="displayEventPage()"/>');


function quickSort($eventsIn, $left = 0 , $right = NULL )
{
	static $eventsOut = array();
	if( $right == NULL ) {
		$eventsOut = $eventsIn;
		$right = count($eventsOut) - 1;
	} 
	$l = $left;
	$r = $right;
	$pivot = $eventsOut[(int)(($left + $right) / 2 )]; 
	do {
		while( $eventsOut[$l] < $pivot ) {
			$l++;
		}
		while( $pivot < $eventsOut[$r] ) {
			$r--;
		}
		if( $l <= $r ) {
			$temp = $eventsOut[$l];
			$eventsOut[$l] = $eventsOut[$r];
			$eventsOut[$r] = $temp;
			$l++;
			$r--;
		}
	}
	while( $l <= $r );
	if( $left < $r ) {
		quickSort(NULL, $left, $r);
	}
	if( $l < $right ) {
		quickSort(NULL, $l, $right);
	} 
	return $eventsOut;
}
?>
</body>
</html>