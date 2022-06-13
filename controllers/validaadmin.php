<?php
if (!isset($_SESSION['vsCodigo'])) {
	echo '<script>
	alert("Favor inicia session");
	window.location = "../sign-in.php";
	</script>';

	session_destroy();
	die();
}
if ($_SESSION['vsTipo'] != 'admin') {
	echo '<script>
	alert("Favor inicia session");
	window.location = "../sign-in.php";
	</script>';

	session_destroy();
	die();
}
