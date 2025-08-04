<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/worker.css') }}">
    <title>create page</title>
</head>
<body>
    <div>
        <form action="{{ route('worker.update', $worker->id) }}" class="form" method="post">
            @csrf
            @method('Patch')
            <!-- Имя -->
            <input type="text" name="name" placeholder="Введите имя" value="{{ old('name') ?? $worker->name }}">
            @error('name')
                {{ $message }}
            @enderror

            <!-- Фамилия -->
            <input type="text" name="surname" placeholder="Введите фамилию" value="{{ old('surname') ?? $worker->surname }}">
            @error('surname')
                {{ $message }}
            @enderror

            <!-- Почта -->
            <input type="email" name="email" placeholder="Введите почту" value="{{ old('email') ?? $worker->email }}">
            @error('email')
                {{ $message }}
            @enderror

            <!-- Возраст -->
            <input type="number" name="age" placeholder="Введите возраст" value="{{ old('age') ?? $worker->age }}">

            <!-- О себе -->
            <textarea name="description" placeholder="О себе">
                {{ old('description') ?? $worker->description }}
            </textarea>

            <!-- Семейное положение -->
            <div>
                <input id="isMarried" type="checkbox" name="is_married"
                    {{ $worker->is_married ? 'checked' : ''}}
                >
                <label for="isMarried">Is Married</label>
            </div>

            <!-- Кнопка -->
            <button type="submit">Сохранить</button>
        </form>
    </div>
</body>
</html>
