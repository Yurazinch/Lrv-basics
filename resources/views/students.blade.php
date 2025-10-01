<!DOCTYPE html>
<html>
    <head>
        <title>Список студентов группы</title>
    </head>
    <body>
        <h1>Список студентов группы</h1>
        @if(empty($students) > 0) 
            <ul>
                @foreach($students as $person) 
                    <li>
                        {{$person->id}},
                        группа {{$person->group_id}},
                        {{$person->name}} {{$person->surname}}
                    </li>
                @endforeach
            </ul>
        @else       
            <p>Группа не заполнена</p>       
        @endif
        <a href="{{ route('student.create', [$group]) }}"><button>Добавить студента</button></a>
        <a href="/groups"><button>К списку групп</button></a>
    </body>
</html>
