<?php 
try { 
  $dbh = new PDO("mysql:host=127.0.0.1; port=3306; dbname=mydb1; charset=utf8", 'user001', 'password');

  $sql = "SELECT * FROM users";

  $res = $dbh->query($sql);
  foreach( $res as $value ) {
    echo "$value[name]\n";
  }
} catch(PDOException $e) {  
  echo $e->getMessage();
} finally {
  $dbh = null;
  die();
}
