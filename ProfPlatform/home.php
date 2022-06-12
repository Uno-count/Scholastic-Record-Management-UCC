<?php
session_start();
if (isset($_SESSION['uname'])) {
	$profid = $_SESSION['uname'][1]; //call prof id
	$profname = $_SESSION['uname'][2]; // call name of prof
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>UCC|SRM</title>
		<link rel="icon" href="../assets/image/csd.png" type="image/x-icon">
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
	</head>

	<body>


		<!--//////////////////////////////////////////////////////
                         NAVBAR SECTION
    ////////////////////////////////////////////////////// -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-blue-dark fixed-top">
			<div class="container-fluid">
				<a href="#" class="logo">
					<img src="../assets/image/csd.png" alt="logo image" />
				</a>
				<a class="navbar-brand" href="https://ucc-caloocan.edu.ph/">
					Scholastic Record Management
				</a>


				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="topNavBar">
					<ul class="navbar-nav d-flex ms-auto my-3 my-lg-0">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle ms-2 mb-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-person-fill"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li><a class="dropdown-item" href="#"> <?php echo $profname ?></a></li>
								<br>

								<li><a class="dropdown-item" href="./changepass.php">Change Password</a></li>
								<li>
									<a class="dropdown-item" href="./plogout.php">Log out</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- second navbar -->
		<div>
			<nav class="navbar navbar-expand-md mb-1 " id="main-bar">
				<div class="collapse navbar-collapse" id="topNavBar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="home.php" class="nav-link">Faculty Load</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<!-- cards -->
		<!-- query -->

		<div class="container py-5" id="viewload">
			<div class="row mt-5 pt-5">
				<?php
				include('../includes/dbconn.php');
				$sql = "SELECT * FROM srms_tblmanagesubcombi INNER JOIN srms_tblclasses ON srms_tblmanagesubcombi.class_id = srms_tblclasses.class_id 
				INNER JOIN srms_tblsubject ON srms_tblmanagesubcombi.sub_id = srms_tblsubject.sub_id
				WHERE srms_tblmanagesubcombi.prof_id = $profid ";
				$query = mysqli_query($conn, $sql);
				$check_handled = mysqli_num_rows($query);
				if ($check_handled) {
					while ($row = mysqli_fetch_assoc($query)) {
				?>

						<div class="col-md-4">
							<div class="card" id="viewload">
								<div class="card-body">
									<a href="viewload.php?combi_id=<?php echo $row['combi_id']; ?>">
										<img src="../assets/image/bg.jpg" class="card-img-top" alt="..." />
										<div class="card-body">
											<h1 class="card-title"><?php echo $row['SubjectDescription'] ?></h1>
											<h5 class="card-title"><?php echo $row['Course'] ?></h5>

											<p class="card-text">
											<h3 class="card-title"><?php echo $row['Year'] ?>-<?php echo $row['Section'] ?></h3>
											</p>
										</div>
									</a>
								</div>
							</div>
						</div>
				<?php

					}
				} else {
					echo "No Class Adminitered Found";
				}
				?>
			</div>
		</div>
		</div>

		<!-- cards -->

	<?php
} else {
	header("location:loginprof.php");
}
	?>

	<script src="..//node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="..//node_modules/bootstrap/dist/js/bootstrap.bundle.min.js.map"></script>

	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

	<script src="..//node_modules/jquery/dist/jquery.js"></script>
	<script src="..//assets/js/script.js"></script>
	<!-- <script src=".//assets/js/dataTables.bootstrap5.min.js"></script>
    <script src=".//assets/js/jquery.dataTables.min.js"></script> -->

	<!-- for datatables -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	</body>

	</html>