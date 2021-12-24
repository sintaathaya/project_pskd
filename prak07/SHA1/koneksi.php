<?php
	//Menghubungkan ke database
	$conn = mysqli_connect("localhost", "root", "", "sha1");

	//Check connection
		if (mysqli_connect_errno()) {
    		echo "Gagal Menyambungkan ke Database : " .
    	mysqli_connect_error();
    }
?>