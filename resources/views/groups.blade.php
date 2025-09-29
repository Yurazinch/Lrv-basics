<!DOCTYPE html>
<html>
    <head>
        <title>Список групп</title>
    </head>
    <body>
        <h1>Список групп</h1>
        @if(count($groups) > 0) 
            <ul>
            @foreach($groups as $group) 
                <li>{{$group->id}}, <a href="/groups/{{$group->id}}">{{$group->title}}</a>, {{$group->is_active}}</li>
            @endforeach
            </ul>
        @else       
            <p>Группы не добавлены</p>       
        @endif
        <a href="/groups/create"><button>Добавить группу</button></a>
    </body>
</html>
