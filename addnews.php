<?php
require __DIR__ . '/model/model.php';
$object_news = new Work_with_db();
if (!empty($_POST)) {
    $news = [];
    if (!empty($_POST['title_news']) && !empty($_POST['body_news'] && !empty($_POST['date_news']) )) {
        $news['title_news'] = $_POST['title_news'];
        $news['body_news'] = $_POST['body_news'];
        $news['date_news'] = $_POST['date_news'];
        $object_news->add_news($news);
        header ('Location: /');
    }
    else {
        echo 'что-то не ввели';
    }
}