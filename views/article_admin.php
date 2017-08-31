<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <title>Blog_example</title>
</head>
<body>
  <div class="container">
    <h1 class="main-header">Мой первый блог</h1>
    <div class="form-add">
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
        <label for="title">Название статьи</label>
        <input class="form-item" type="text" name="title" value="<?=$article['title']?>" required autofocus>
        <label for="date">Дата написания</label>
        <input class="form-item" type="date" name="date" value="<?=$article['date']?>" required>
        <label for="content">Содержимое статьи</label>
        <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
        <input class="btn" type="submit" name="" value="Сохранить">
      </form>
    </div>
    <footer class="footer">
      <p class="footer-header">Мой первый блог</p>
      <p class="footer-copyright">Copyright &copy; 2017</p>
    </footer>
  </div>
</body>
</html>
