<?php

require 'includes/dbh.inc.php';

$sql = "SELECT * FROM mathsubject;";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("Location: ../index.php?error=sqlerror");
	exit();
} else {
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);

	// Ouput sidemenu
	/*
<ul class="list-group">
  <li class="list-group-item mathsubject" id="1">Circle</li>
  .
  .
  .
  </ul>
	*/
  if(isset($_SESSION['userId'])) {
	echo '<ul class="list-group">';
	while($row = mysqli_fetch_assoc($result)) {
    	echo '<li class="list-group-item mathsubject btn btn-outline-danger my-2 my-sm-0" '. 'id="' . $row['id'] .'"' . '>' . $row['title'] . '</li>';
		}
		echo '</ul>';
	}
}