@extends('layout.main')

@section('content')

<div>
    <form action="{{ route('worker.store') }}" class="form" method="post">
        @csrf
        <!-- Имя -->
        <input type="text" name="name" placeholder="Введите имя" value="{{ old('name') }}">
        @error('name')
        {{ $message}}
        @enderror

        <!-- Фамилия -->
        <input type="text" name="surname" placeholder="Введите фамилию" value="{{ old('surname') }}">
        @error('surname')
        {{ $message }}
        @enderror

        <!-- Почта -->
        <input type="email" name="email" placeholder="Введите почту" value="{{ old('email') }}">
        @error('email')
        {{ $message }}
        @enderror

        <!-- Возраст -->
        <input type="number" name="age" placeholder="Введите возраст" value="{{ old('age') }}">

        <!-- О себе -->
        <textarea name="description" placeholder="О себе">
        {{ old('description') }}
        </textarea>

        <!-- Семейное положение -->
        <div>
            <input id="isMarried" type="checkbox" name="is_married"
                {{ old('is_married') ? 'checked' : ''}}>
            <label for="isMarried">Is Married</label>
        </div>

        <!-- Кнопка -->
        <button type="submit">Добавить</button>
    </form>
</div>

@endsection
