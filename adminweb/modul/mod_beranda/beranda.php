    <!-- jQuery Visualize Plugin (Grafik berbentuk Bar) -->
    <link href="css/visualize.css" rel="stylesheet" type="text/css" />
	
    <script src="js/jquery.min.js"></script>		
	  <script src="js/visualize.jQuery.js"></script>		
	  <script type="text/javascript">
	  $(function(){
	     $('#grafik').visualize({type: 'bar', width: '450px'});
    });
    </script>    

<?php
// Apabila user belum login
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
  echo "<link href=\"../../css/style_login.css\" rel=\"stylesheet\" type=\"text/css\" />
        <div id=\"login\"><h1 class=\"fail\">Untuk mengakses modul, Anda harus login dulu.</h1>
        <p class=\"fail\"><a href=\"../../index.php\">LOGIN</a></p></div>";  
}
// Apabila user sudah login dengan benar, maka terbentuklah session
else{
  $tgl=date("Y-m-d");
  $tanggal=tgl_indo($tgl);
  echo "<h2>Selamat Datang di Halaman Administrator</h2>
        <p>Hai, <b>$_SESSION[namalengkap]</b> Anda login saat ini pada tanggal <b>$tanggal</b>.</p> ";
}
?>
