<?php
    $query = "SELECT judul_website FROM identitas";
    $hasil = mysqli_query($konek, $query);
    $data  = mysqli_fetch_array($hasil);
	  echo "$data[judul_website]";
?>
