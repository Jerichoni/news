<?php
function sql_connect()
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('news_db');
}