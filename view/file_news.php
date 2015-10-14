<meta charset="UTF-8">
<?php require __DIR__ . '/../model/model.php';
$news = get_oneNews($_GET['link']);
?>

<h1><?php echo $news['title_news']; ?></h1>
<p><?php echo $news['body_news']; ?></p>
<p><i><?php echo $news['date_news']; ?></i></p>
