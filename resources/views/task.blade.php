<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>tasks</title>
</head>
<body>
    <ol class="list-group list-group-numbered">
        @foreach ($tasks as $el)
            <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">{{$el->task}}</div>
                    {{$el->description}}
                </div>
                <span class="badge bg-success rounded-pill">{{$el->email}}</span>
            </li>
        @endforeach
    </ol>
</body>
</html>