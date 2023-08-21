<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>form</title>
</head>
<body>
    <form method = "post" action = "/form/submit">
        @csrf
        <div class = "mb-3">
            <label class = "form-label"><h1>Email</h1></label>
            <input type = "email" name = "email" id = "email" placeholder = "Введите email" autocomplete="off" class = "form-control">
        </div>
        <div class = "mb-3">
            <label class = "form-label"><h1>Task</h1></label>
            <input type = "text" name = "task" id = "task" placeholder = "Введите task" autocomplete="off" class = "form-control">
        </div>
        <div class = "mb-3" class = "form-floating">
            <label class = "form-label"><h1>Description</h1></label>
            <textarea name="description" id="description" placeholder = "Введите task's description" class = "form-control"></textarea>
        </div>
        <button type = "submit" class = "btn btn-success">Отправить данные</button>
    </form>
</body>
</html>