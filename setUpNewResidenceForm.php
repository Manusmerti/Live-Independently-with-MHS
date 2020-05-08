<html>
	<head>
		<title> Set Up New Residence </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<body>
	<style>
		
      .bd-placeholder-img 
      {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) 
      {
        .bd-placeholder-img-lg 
        {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">

<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<body>
	<style>
		
      .bd-placeholder-img 
      {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) 
      {
        .bd-placeholder-img-lg 
        {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">

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

		<div class="container">
			<div class="setUp-box">
				<div class="row">
					<div class="col-md-6 col-lg-12">
						<h3> Set Up New Residence </h3>
							<form action="setUpNewResidence.php" method="post">
								<div class="form-group">
									<label>Address</label><br>
									<input type="text" name="address" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Number of Units Available</label><br>
									<input type="number" name="unitsNum" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Size of Each Unit</label><br>
									<input type="number" name="unitSize" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Monthly Rental</label><br>
									<input type="number" name="monthlyRental" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Housing Officer ID</label><br>
									<input type="number" name="officerID" class="setform-control" required><br>
								</div>
								<button type="submit" class="btn btn-success" name="save"> SUBMIT </button><br>
								<button class="btn btn-primary home" type="button">BACK </button><br>
							</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>