<?php
        // DEFINE ('DBUSER', '2603033_arduino');
        // DEFINE ('DBPW', 'siskom1234');
        // DEFINE ('DBHOST', 'fdb19.awardspace.net');
        // DEFINE ('DBNAME', '2603033_arduino');

        DEFINE ('DBUSER', 'root');
        DEFINE ('DBPW', '');
        DEFINE ('DBHOST', 'localhost');
        DEFINE ('DBNAME', 'alumni_sma');

  $dbc = mysqli_connect(DBHOST, DBUSER, DBPW);
  $koneksi = new mysqli(DBHOST, DBUSER, DBPW, DBNAME);

  if(!$koneksi)
  {
          die("koneksi ke database gagal dilakukan : ". mysqli_error($koneksi));
          exit();
   }

   $dbs = mysqli_select_db($koneksi, DBNAME);
   if(!$dbs)
   {
          die("Nama database tidak dikenal : ". mysqli_error($koneksi));
          exit();
   }
?>