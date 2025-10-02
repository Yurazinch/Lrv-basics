<!DOCTYPE html>
<html>
    <head>
        <title>Список студентов группы</title>
    </head>
    <body>
        <h1>Список студентов группы</h1>
        @if(count($students) > 0) 
            <ul>
                @foreach($students as $student) 
                    <li>{{$student->id}}, группа {{$student->group_id}}, <a href="{{ route('student.show', [$group, $student->id]) }}">{{$student->surname}} {{$student->name}}</a></li>
                @endforeach
            </ul>
        @else       
            <p>Группа не заполнена</p>    
        @endif
        <a href="{{ route('student.create', [$group]) }}"><button>Добавить студента</button></a>
        <a href="/groups"><button>К списку групп</button></a>
    </body>
</html>
