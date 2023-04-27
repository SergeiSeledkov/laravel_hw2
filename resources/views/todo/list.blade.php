<!doctype html>
<html lang="en">
<link>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Todos</title>
</head>
<body>
<h1>Список задач</h1>

@foreach ($list as $item)
    <p>
    <ul style="list-style-type: none">
        <li>Название: <a href="{{ url('/todo/'.$item->id)}}">{{ $item->title }}</a></li>
    </ul>
    </p>
@endforeach

<a href="{{ url('/') }}">Вернуться на главную страницу</a>
</body>
</html>
