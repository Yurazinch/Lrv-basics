<!DOCTYPE html>
<html>
    <head>
        <title>Добавить студента</title>
    </head>
    <body>
        <h1>Добавить студента</h1>
            <form method="post" action="{{ route('student.store', [$group]) }}">
            @csrf
            <p>Группа: <input type="number" name="group_id" value="{{ $group }}" /></p>
            <p>Имя: <input type="text" name="name"/></p>
            <p>Фамилия: <input type="text" name="surname" /></p>
            <p><input type="submit" value="Добавить" />
        </form>
        <a href="/groups/{{ $group }}">Вернуться в группу</a>
    </body>
</html>