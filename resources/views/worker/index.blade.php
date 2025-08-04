<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/worker.css') }}">
    <title>Document</title>
</head>
<body>
    <div>
        <hr>
        <div>
            <a href="{{ route('worker.create') }}">Добавить</a>
        </div>
        <hr>
        @foreach ($workers as $worker)
            <div>
                <div>{{ $worker->name }}</div>
                <div>{{ $worker->surname }}</div>
                <div>{{ $worker->age }}</div>
                <div>{{ $worker->email }}</div>
                <div>{{ $worker->description }}</div>
                <div>{{ $worker->is_married }}</div>
                <div>
                    <a href="{{ route('worker.show',$worker->id) }}">Просмотреть</a>
                    <a href="{{ route('worker.edit',$worker->id) }}">Редактировать</a>
                </div>
                <div>
                    <form action="{{ route('worker.delete', $worker->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Удалить</button>
                    </form>
                </div>
            </div>
            <hr>
        @endforeach
        <div class="myNav">
            {{ $workers->links() }}
        </div>
    </div>
</body>
</html>
