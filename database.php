<?php
  require_once 'secure/secure.php';

  function db_connect(){
      $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or
      die('Error: '.mysqli_error($link) );


      if(!mysqli_set_charset($link, "utf8") ){
          print('Error: '.mysqli_error($link) );
      }

      return $link;
  }
?>
