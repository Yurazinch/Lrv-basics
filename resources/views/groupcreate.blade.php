<!DOCTYPE html>
<html>
    <head>
        <title>Добавить группу</title>
    </head>
    <body>
        <h1>Добавить группу</h1>
        <form method="post" action="/groups/">
            @csrf
            <p>Название группы: <input type="text" name="title" /></p>
            <p>Начало обучения: <input type="date" name="start_from" /></p>
            <p><input type="checkbox" name="is_active" value="false" />
                Группа активна</p>
            <p><input type="submit" value="Добавить" />
        </form>
        <a href="/groups">К списку групп</a>
    </body>
</html>