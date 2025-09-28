<!DOCTYPE html>
<html>
    <head>
        <title>Список групп</title>
    </head>
    <body>
        <h1>Список групп</h1>
        @if(count($groups) > 0) 
        {
        <ul>
        @foreach($groups as $group) 
        {
            <li><a href="/groups/{{$group->id}}">{{$group->id}}, {{$group->title}}, {{$group->is_active}}</a></li>;
        }
        @endforeach
        </ul>
        }
        @else       
            <p>Группы не добавлены</p>       
        @endif
        <a href="/groups/create"><button>Добавить группу</button></a>
    </body>

</html>
