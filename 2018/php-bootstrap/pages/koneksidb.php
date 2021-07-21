<?php
        DEFINE ('DBUSER', 'alumni_sma');
        DEFINE ('DBPW', 'siskom1234');
        DEFINE ('DBHOST', 'fdb19.awardspace.net');
        DEFINE ('DBNAME', 'alumni_sma');
        
  $dbc = mysqli_connect(DBHOST, DBUSER, DBPW);
  
  if(!$dbc)
  {
          die("koneksi ke database gagal dilakukan : ". mysqli_error($dbc));
          exit();
   }
   
   $dbs = mysqli_select_db($dbc, DBNAME);
   if(!$dbs)
   {
          die("Nama database tidak dikenal : ". mysqli_error($dbc));
          exit();
   }
?>