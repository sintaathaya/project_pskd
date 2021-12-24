<?php
	//Menghubungkan ke database
	$conn = mysqli_connect("localhost", "root", "", "skd_login");

	//Check connection
		if (mysqli_connect_errno()) {
    		echo "Gagal Menyambungkan ke Database : " .
    	mysqli_connect_error();
    }
?>