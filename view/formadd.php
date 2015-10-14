<meta charset="UTF-8">
<form action="/addnews.php" method="POST">
    <p>
        Введите название новости:<br>
        <input type="text" name="title_news">
    </p>
    <p>
        Опишите событие:<br>
        <textarea name="body_news"></textarea>
    </p>
    <p>
        Ведите дату в виде ГГГГ-ММ-ДД:<br>
        <input type="text" name="date_news">
    </p>
    <input type="submit">
</form>
<a href="/">На главную</a>