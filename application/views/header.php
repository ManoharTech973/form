<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url()."index.php/welcome/index"?>">Form</a>
        </li>

				<li class="nav-item">
          <a class="nav-link" href="<?php echo base_url()."index.php/studentdetailsctrl/index"?>">Student Details</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Course
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url()."index.php/course/index"?>">Add Course</a>
		        </li>
						<li><hr class="dropdown-divider"></li>
						<li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url()."index.php/coursedetailsctrl/index"?>">Course Details</a>
		        </li>
          </ul>
        </li>

				<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Specialization
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url()."index.php/specialization/index"?>">Add Specialization</a>
		        </li>
						<li><hr class="dropdown-divider"></li>
						<li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url()."index.php/specializationdetailsctrl/index"?>">Specialization Details</a>
		        </li>
          </ul>
        </li>

				<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sports
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url()."index.php/sportsctrl/index"?>">Sports</a>
		        </li>
						<li><hr class="dropdown-divider"></li>
						<li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url()."index.php/sportsdetailsctrl/index"?>">Sports Details</a>
		        </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
