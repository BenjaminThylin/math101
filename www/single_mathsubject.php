<?php

require 'includes/dbh.inc.php';
$mathsubject_id = $_GET['mathsubject_id'];
$sql = "SELECT * FROM mathsubject WHERE id=?;";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("Location: ../index.php?error=sqlerror");
	exit();
} else {
	mysqli_stmt_bind_param($stmt, "s", $mathsubject_id);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);

	// Ouput mathsubject info
	while($row = mysqli_fetch_assoc($result)) {
		echo '<h2 class="title">' . $row['title'] . '</h2>';
		include 'includes/' . $row['title'] . '.php';
		echo '<br>';
    	echo $row['theory'];
	}
	//echo '</ul>';
}