<!DOCTYPE html>
<html>
<html lang="it">
<head>
	<meta charset="utf-8">





	<!-- stylesheet bootstrap -->
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<title>Cruz.pro</title>


	<!-- Date picker -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker-standalone.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" rel="stylesheet">
	<!-- Gliphs -->
	
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.css"/>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.print.css" media="print"/>
	


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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

	if ($selectedPage == 'user_admin') {
		include __DIR__ . '/layout/navbar.php';
		include __DIR__ . '/pages/_user_admin.php';
		include __DIR__ . '/layout/footer.php';
	}

	if ($selectedPage == 'sala') {
		include __DIR__ . '/layout/navbar.php';
		include __DIR__ . '/pages/_sala.php';
		include __DIR__ . '/layout/footer.php';
	}

	if ($selectedPage == 'sala_admin') {
		include __DIR__ . '/layout/navbar.php';
		include __DIR__ . '/pages/_sala_admin.php';
		include __DIR__ . '/layout/footer.php';
	}

	if ($selectedPage == 'lista_sale') {
		include __DIR__ . '/layout/navbar.php';
		include __DIR__ . '/pages/_lista_sale.php';
		include __DIR__ . '/layout/footer.php';
	}

		if ($selectedPage == 'lista_sale_admin') {
		include __DIR__ . '/layout/navbar.php';
		include __DIR__ . '/pages/_lista_sale_admin.php';
		include __DIR__ . '/layout/footer.php';
	}

	if ($selectedPage == 'lista_utenti') {
		include __DIR__ . '/layout/navbar.php';
		include __DIR__ . '/pages/_lista_utenti.php';
		include __DIR__ . '/layout/footer.php';
	}

	if ($selectedPage == 'lista_utenti_admin') {
		include __DIR__ . '/layout/navbar.php';
		include __DIR__ . '/pages/_lista_utenti_admin.php';
		include __DIR__ . '/layout/footer.php';
	}

    if ($selectedPage == 'lista_eventi') {
		include __DIR__ . '/layout/navbar.php';
		include __DIR__ . '/pages/_lista_eventi.php';
		include __DIR__ . '/layout/footer.php';
	}

	if ($selectedPage == 'lista_eventi_admin') {
		include __DIR__ . '/layout/navbar.php';
		include __DIR__ . '/pages/_lista_eventi_admin.php';
		include __DIR__ . '/layout/footer.php';
	}



	?>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment-with-locales.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js" ></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/lang/it.js" ></script>

	
	<script src="assets/js/stylecruz.js"></script>
	

</body>
</html>