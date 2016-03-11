<?php
header('Content-Tipe: text/html; charset=utf-8');

require_once __DIR__ . '/function.php';

//require_once __DIR__ . '/function.php';

$title = "Cruz.pro";


if (isset($_GET['page'])) {
	$selectedPage = $_GET['page'];
}
else {
	$selectedPage = '';
}

if ($selectedPage == 'login') {
	include __DIR__ . '/pages/_login.php';
}

if ($selectedPage == 'user') {
	include __DIR__ . '/pages/_user.php';
}

if ($selectedPage == 'sala') {
	include __DIR__ . '/pages/_sala.php';
}


//navbar
include __DIR__ . '/layout/navbar.php';


//switch ($selectedPage) {
//	case 'home':
//		include __DIR__ . '/layout/home.php';
	
//	default:
		# code...
//		break;
//}

