<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>E - Schedule</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>E - Schedule</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Data</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="managedosen.php">Dosen</a>
                        </li>
                        <li>
                            <a href="managekelas.php">Kelas</a>
                        </li>
                        <li>
                            <a href="managematkul.php">Mata Kuliah</a>
                        </li>
						<li>
                            <a href="manageruangan.php">Ruangan</a>
                        </li>
						<li>
							<a href="managewaktu.php">Waktu</a>
						</li>
					</ul>
				</li>
				<li>
                    <a href="scheduling.php">Scheduling</a>
                </li>
            </ul>
        </nav>
		
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="adddosen.php">Add</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="managedosen.php">Data</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

			<h3>Tambah Dosen</h3>
			<div class="col-6">
				<form action="simpandosen.php" method="POST">
				  <div class="form-group">
					<label for="id">Id</label>
					<input type="number" class="form-control" id="id" name="id" aria-describedby="emailHelp" placeholder="Enter Id">
				  </div>
				  <div class="form-group">
					<label for="id">Name</label>
					<input type="text" class="form-control" name="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
				  </div>
				  <div class="form-group">
					<label for="id">Password</label>
					<input type="varchar" class="form-control" password="password" name="password" aria-describedby="emailHelp" placeholder="Enter Password">
				  </div>
				  <div class="form-group">
					<label for="id">Email</label>
					<input type="email" class="form-control" email="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
				  </div>
				  <div class="form-group">
					<label for="id">Gender</label>
					<input type="text" class="form-control" gender="gender" name="gender" aria-describedby="emailHelp" placeholder="Enter Gender">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>

<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>

   