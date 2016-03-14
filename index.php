<!DOCTYPE html>
<html>
<html lang="it">
	<head>
		<meta charset="utf-8">





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

if ($selectedPage == 'lista_sale') {
	include __DIR__ . '/layout/navbar.php';
	include __DIR__ . '/pages/_lista_sale.php';
	include __DIR__ . '/layout/footer.php';
}

if ($selectedPage == 'lista_utenti') {
	include __DIR__ . '/layout/navbar.php';
	include __DIR__ . '/pages/_lista_utenti.php';
	include __DIR__ . '/layout/footer.php';
}

?>




		<!-- cdn calendar-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.css"></script>
		<script src="https//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.print.css"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>

    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="assets/js/bootstrap.min.js"></script>




	</body>
</html>