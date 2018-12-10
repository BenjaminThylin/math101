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
		echo '<h2>' . $row['title'] . '</h2>';
		echo '<form oninput="x.value=parseInt(a.value)+parseInt(b.value)">
				<input type="text" id="a" placeholder="Number">
				+ <input type="text" id="b" placeholder="Number">
				= <output type="text" name="x" for="a b"></output>
				</form>';
		// echo '<input class="" type="text" name="term1" placeholder="Number"> + ';
		// //echo '<p> + </p>';
		// echo '<input class="" type="text" name="term2" placeholder="Number">';
		// echo'=<output name="x" for="a b"></output>';
		// echo '<br>';
    	echo $row['theory'];
	}
	//echo '</ul>';
}