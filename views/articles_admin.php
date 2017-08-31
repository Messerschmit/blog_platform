<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <title>Blog_example</title>
</head>

<body>
    <a href="index.php?action=add">Добавить статью</a>
    <table class="table table-striped" border="1">

    <tr>
      <th>Дата</th>
      <th>Заголовок</th>
      <th></th>
      <th></th>
    </tr>
    <?php foreach ($articles as $value):?>
    <tr>
      <td><?=$value['date']?></td>
      <td><?=$value['title']?></td>
      <td><a href="index.php?action=edit&id=<?=$value['id']?>">Редактировать</a></td>
      <td><a href="index.php?action=delete&id=<?=$value['id']?>">Удалить</a></td>
    </tr>
    <?php endforeach;?>
  </table>
  <footer class="footer">
    <p class="footer-header">Мой первый блог</p>
    <p class="footer-copyright">Copyright &copy; 2017</p>
  </footer>
</body>

</html>
