<html>
	<head>
		<title> View Residences </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

		<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">MHS for Officer House</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home </a></li>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="setUpNewResidence.php"> Set Up New Residence </a></li>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="viewResidences.php"> View Residence </a></li>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">View application <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    

    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>

  </div>
</nav>
	</head>	
	
	<body>
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<div class="container">
			<div class="view-box">
				<div class="row">
					<h2>View Residences</h2>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Residence ID</th>
									<th>Address</th>
									<th>Number of Units Available</th>
									<th>Size of Each Unit</th>
									<th>Monthly Rental</th>
									<th>Housing Officer</th>
									<th> </th>
								</tr>
								<?php
								include "viewResidences.php";
								$residenceID = 1;
								$view = mysqli_query($con, "SELECT * FROM setupnewresidence");
								while($row=mysqli_fetch_array($view)){
								?>
								<form action="submitApplication.php" method="get">
									<tr>
										<td> <input type="checkbox" name="residenceID"> <?php echo $residenceID++; ?> </td>
										<td> <?php echo $row['address']; ?> </td>
										<td> <?php echo $row['unitsNum']; ?> </td>
										<td> <?php echo $row['unitSize']; ?> </td>
										<td> <?php echo $row['monthlyRental']; ?> </td>
										<td> <?php echo $row['officerID']; ?> </td>
										<td> <a href="submitApplication.php?residenceID=residenceID"><button type="submit" class="btn btn-primary">Submit Application</button></a></td>
									</tr>
								</form>
								<?php } ?>
							</thead>
						</table>
				</div>
			</div>
		</div>
	</body>
</html>