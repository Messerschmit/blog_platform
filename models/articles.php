<?php
	function articles_all($link){
            //запрос на получение все колонок из базы
            $query =  "SELECT * FROM `articles` ORDER BY id DESC";
            $result = mysqli_query($link, $query);
            //проверка успешного запроса
            if (!$result){
                die ("Error: ".mysqli_error($link));
            }
            //извлечение из БД
            $n = mysqli_num_rows($result);
            
            $articles = array();
            
            for ($i = 0; $i < $n; $i++){
                $row = mysqli_fetch_assoc($result);
                $articles[] = $row;
            }
            
            return $articles;
            
        }
        
        function articles_get($link, $id_article){
            //Запрос
            $query = sprintf("SELECT * FROM `articles` WHERE id=%d", 
                              (int)$id_article);
            
            $result = mysqli_query($link, $query);
            
            if (!result){
                die("Error: ". mysqli_error($link));
            }
            
            //Извлекает результирующий ряд в виде ассоциативного массива            
            $article = mysqli_fetch_assoc($result);
            
            return $article;
        }
        
        function articles_new($link, $title, $date, $content){
            
            //Prepare
            
            $title = trim($title);
            $content = trim($content);
            
            //Check
            
            if (title == ''){
                return false;
            }
            
            //Query
            
            $current_query = "INSERT INTO `articles` (`title`, `date`, `content`) VALUES ('%s', '%s', '%s')";
            
            $query = sprintf($current_query, mysqli_real_escape_string($link, $title), 
                        mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content));
            
            
            $result = mysqli_query($link, $query);
            
            if(!$result){
                die('Error: ' . mysqli_error($link));
            }
            
            return true;
        }
        
        function articles_edit($link, $id, $title, $date, $content){
            //Prepare
            $title = trim($title);
            $content = trim($content);
            $date = trim($date);
            $id = (int)$id;
            
            //Check
            if ($title == ''){
              return false;
            }
            
            //Query
            
            $current_query = "UPDATE `articles` SET `title` = '%s', `content` = '%s', `date` = '%s' WHERE `articles`.`id` = '%d'";
            
            $query = sprintf($current_query, mysqli_real_escape_string($link, $title),
                                             mysqli_real_escape_string($link, $content),
                                             mysqli_real_escape_string($link, $date),
                                             $id);
            
            //$query = "UPDATE `articles` SET `title` = 'hi there', `content` = 'hi there', `date` = '2016-02-15' WHERE `articles`.`id` = 10";
            
            $result = mysqli_query($link, $query);
            
            if(!$result){
                die("Error: ". mysqli_error($link));
            }
            //Возвращает число затронутых прошлой операцией рядов (0 || 1)
            return mysqli_affected_rows($link);
        }
        
        function articles_delete($link, $id){
          
            $id = (int)$id;
            
            //Check
            if ($id == 0){
                return false;
            }
            
            //Query
            $query = sprintf("DELETE FROM articles WHERE id = '%d'", $id);
            $result = mysqli_query($link, $query);
            
            if(!$result){
                die("Error: ". mysqli_error($link));
            }
            
            return mysqli_affected_rows($link);
        }
        
        function articles_intro($text, $len = 500){
            return mb_substr($text, 0 ,$len);
        }
?>
