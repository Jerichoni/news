<?php
require __DIR__ . '/../functions/functions.php';

/*function news_list_output() //формирование массива новостей
{
    sql_connect();
    $sql = 'SELECT * FROM news_list ORDER BY date_news DESC';
    $res = mysql_query($sql);
    $news[] = (mysql_fetch_array($res));
    while ($news[] = mysql_fetch_array($res));
    return $news;
}*/

function get_oneNews($link)
{
    sql_connect();
    $sql = 'SELECT * FROM news_list WHERE id=' . $link;
    $res = mysql_query($sql);
    $news = mysql_fetch_array($res);
    return $news;
}

/*function add_news($news)
{
    sql_connect();
    $new_title_news = $news['title_news'];
    $new_body_news = $news['body_news'];
    $new_date_news = $news['date_news'];
    $sql = "INSERT INTO news_list (title_news, body_news, date_news) VALUES ('$new_title_news', '$new_body_news', '$new_date_news')";
    mysql_query($sql);
}*/

class Work_with_db {
    public function __construct() {
        sql_connect();
    }
    public function getAllNews_from_db() {
        $sql = 'SELECT * FROM news_list ORDER BY date_news DESC';
        $res = mysql_query($sql);
        $news[] = (mysql_fetch_array($res));
        while ($news[] = mysql_fetch_array($res));
        return $news;
    }
    public function add_news($news) {
        $new_title_news = $news['title_news'];
        $new_body_news = $news['body_news'];
        $new_date_news = $news['date_news'];
        $sql = "INSERT INTO news_list (title_news, body_news, date_news) VALUES ('$new_title_news', '$new_body_news', '$new_date_news')";
        mysql_query($sql);
    }
}