<?php
    require __DIR__ . '/../model/model.php';
    $news = new Work_with_db();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Новостная лента</title>
</head>
<body>
<h1>Новостная лента, свежие события</h1>
<a href="/view/formadd.php">Добавить новость</a>

<?php// foreach (news_list_output() as $news): ?> <!--вывод новостей из массива -->
<?php foreach ($news->getAllNews_from_db() as $news): ?> <!-- вывод новостей из массива -->
    <h2><a href="view/file_news.php?link=<?php echo $news['id']; ?>"><?php echo $news['title_news']; ?></a></h2>
    <p><?php echo $news['body_news']; ?> <i><?php echo $news['date_news']; ?></i></p>
<?php endforeach; ?>

</body>



</html>