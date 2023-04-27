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
<h1>Информация о задаче</h1>

<p>
<ul style="list-style-type: none">
    <li>ID №: {{ $item->id }}</li>
    <li>Название: {{ $item->title }}</li>
    <li>Описание: {{ $item->description }}</li>
    <li>Создана: {{ $item->created_at }}</li>
    <li>Изменена: {{ $item->updated_at }}</li>
</ul>
</p>

<a href="{{ url('/') }}">Вернуться на главную страницу</a>
<a href="{{ url('/todo') }}">Вернуться к списку задач</a>
</body>
</html>
