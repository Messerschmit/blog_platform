<?php
    require_once 'models/articles.php';
    require_once 'database.php';
    
    $link = db_connect();
    
            
/* @var $articles array */
$articles = articles_all($link);

    
    include 'views/articles.php';
?>
