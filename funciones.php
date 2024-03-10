<?php 
function get_row($table,$row, $id, $equal){
	global $con;
	$query=mysqli_query($con,"select $row from $table where $id='$equal'");
	$rw=mysqli_fetch_array($query);
	$value=$rw[$row];
	return $value;
}
?>

<?php

// se define la funcion
function url($text)
{
	$text = html_entity_decode($text);
	$text = " ".$text;
	$text = preg_replace('/(https{0,1}:\/\/[\w\-\.\/#?&=]*)/','<a href="$1" target="_black">$1</a>',$text);
	return $text;
}

?>
