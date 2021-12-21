<?php
	error_reporting(error_reporting() & ~E_NOTICE);
	include "koneksi.php";

	if ($_GET['page']=="add"){
		include "add.php";
	}
	else if ($_GET['page'] == "read"){
		include "read.php";
	}
	else if ($_GET['page']=="create"){
		include "create.php";
	}
	else if ($_GET['page']=="edit"){
		include "edit.php";
	}
	else if ($_GET['page']=="update"){
		include "update.php";
	}
	else if ($_GET['page']=="delete"){
		include "delete.php";
	}
	else if ($_GET['page']=="readBuku"){
		include "readBuku.php";
	}
	else if ($_GET['page']=="addBuku"){
		include "addBuku.php";
	}
	else if ($_GET['page']=="createBuku"){
		include "createBuku.php";
	}
	else if ($_GET['page']=="deleteBuku"){
		include "deleteBuku.php";
	}
	else if ($_GET['page']=="editBuku"){
		include "editBuku.php";
	}
	else if ($_GET['page']=="updateBuku"){
		include "updateBuku.php";
	}
	else{
		include "dashboard.php";
	}
