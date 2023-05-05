<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>
<body>
<h1>ToDo</h1>

<ul style="list-style-type: none">
    @foreach($todo as $item)
    <li>ID №: {{ $item->id }}</li>
    <li>Название: {{ $item->title }}</li>
    <li>Описание: {{ $item->description }}</li>
    <li>Создана: {{ $item->created_at }}</li>
    <li>Изменена: {{ $item->updated_at }}</li>
    @endforeach
</ul>

<a href="{{ url('/todo/create') }}">Создать список задач</a>
</body>
</html>
