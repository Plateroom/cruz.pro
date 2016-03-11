<!DOCTYPE html>
<html>
<html lang="it">
	<head>
		<meta charset="utf-8">



		<!--stylesheet calendar -->
		<link href="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.css" rel="stylesheet" />
		<link href="http://arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.print.css" rel="stylesheet" />


		<!-- stylesheet bootstrap -->
		<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
		<title>Cruz.pro</title>


        <!-- Custom CSS -->
        <link href="./assets/css/stylecruz.css" rel="stylesheet">

	</head>
	<body id="page-top">

<?php
//switch ($selectedPage) {
//	case 'home':
//		include __DIR__ . '/layout/home.php';
	
//	default:
		# code...
//		break;
//}



if (isset($_GET['page'])) {
	$selectedPage = $_GET['page'];
}
else {
	$selectedPage = '';
}

if ($selectedPage == 'login' || $selectedPage == '') {
	include __DIR__ . '/pages/_login.php';
}

if ($selectedPage == 'user') {
	include __DIR__ . '/layout/navbar.php';
	include __DIR__ . '/pages/_user.php';
	include __DIR__ . '/layout/footer.php';
}

if ($selectedPage == 'sala') {
	include __DIR__ . '/layout/navbar.php';
	include __DIR__ . '/pages/_sala.php';
	include __DIR__ . '/layout/footer.php';
}
?>

		

    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="assets/js/bootstrap.min.js"></script>


		 <!-- jQuery calendar-->
		<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>

	</body>
</html>