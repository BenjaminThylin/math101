<?php 
	require "header.php"
?>

	<main>

		<?php  
		if (isset($_SESSION['userId'])) {
		//	echo '<p>You are logged in!</p>';
			
		}
		else {
		//	echo '<p>You are logged out!</p>';
		};
		?>

		<!-- Main Content -->
		<div id="main-content">
		  <div class="row">
		    <div class="col-md-1.5">
		      	<div id="sidemenu">
					<?php require "sidemenu.php" ?>
				</div>
		    </div>
		    <div id="mathsubject_info" class="col-md-10"></div>
		  </div>
		</div>

	</main>

<?php 
	require "footer.php"
?>