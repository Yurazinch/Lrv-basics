<!DOCTYPE html>
<html>
    <head>
        <title>Карточка студента</title>
    </head>
    <body>
        <h1> Карточка студента </h1>
        <p> Фамилия: {{ $st[0]->surname }}</p>
        <p> Имя: {{ $st[0]->name }}</p>
        <p> Группа: {{ $gr[0]->title }} </p>
        <p> Номер группы: {{ $gr[0]->id }} </p>
        <p> Статус группы: {{ $gr[0]->is_active }} </p>
        <p> Группа создана: {{ $gr[0]->start_from }}</p>
        <a href="{{ route('student.index', ['group' => $gr[0]->id]) }}"><button>Назад в группу</button></a>
    </body>
</html>
