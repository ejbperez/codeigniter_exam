<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>TRI7 Exam</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?=base_url('assets/css/main.css')?>">
        <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?=base_url('assets/js/mdb.min.js')?>"></script>
        <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
        <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
	</head>
	<body>
        <nav class="navbar navbar-dark primary-color">
            <a class="navbar-brand" href="#">TRI7 Exam</a>
        </nav>
		<div class="container mt-5">
            <table class="table">
                <thead>
                    <tr>
                    <th class="font-weight-bold">#</th>
                    <th class="font-weight-bold">Firstname</th>
                    <th class="font-weight-bold">Lastname</th>
                    <th class="font-weight-bold">Position</th>
                    <th class="font-weight-bold">Create Date</th>
                    <th><button class="btn btn-success" data-toggle="modal" data-target="#basicExampleModal">Add</button></th>
                    </tr>
                </thead>
                <tbody id='user-data'>
                    
                </tbody>
            </table>
        </div>
			
    <?php
        include('formpage.php');
        include('editpage.php');
    ?>
    <script src="<?=base_url('assets/js/ajax_request/main.js')?>"></script>
	</body>
</html>