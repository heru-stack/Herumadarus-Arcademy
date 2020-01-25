<?php  

	if (isset($_SESSION['login'])) {
		if ($_SESSION['level'] == "admin") {
			header("location:/apppln/admin/index.php");
		} else if ($_SESSION['level'] == "admin1"){
			header("location:admin1/index.php");
		} else if ($_SESSION['level'] == "admin2"){
			header("location:admin2/index.php");
		} else if ($_SESSION['level'] == "admin3"){
			header("location:admin3/index.php");
		} else if ($_SESSION['level'] == "admin4"){
			header("location:admin4/index.php");
		} else if ($_SESSION['level'] == "admin5"){
			header("location:admin5/index.php");
		} else if ($_SESSION['level'] == "admin6"){
			header("location:admin6/index.php");
		} else {
			header("location:index.php");
		}
	}

?>