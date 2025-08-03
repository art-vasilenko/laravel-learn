<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    index
    <div>
        <hr>
        <div>
            <div>{{ $worker->name }}</div>
            <div>{{ $worker->surname }}</div>
            <div>{{ $worker->age }}</div>
            <div>{{ $worker->email }}</div>
            <div>{{ $worker->description }}</div>
            <div>{{ $worker->is_married }}</div>
            <div>
                <a href="{{ route('worker.index') }}">Назад</a>
            </div>
        </div>
    </div>
</body>

</html>
