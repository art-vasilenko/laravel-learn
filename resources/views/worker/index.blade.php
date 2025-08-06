@extends('layout.main')

@section('content')

<div>
    <hr>
    <div>
        <form action="{{ route('worker.index') }}">
            <input type="text" name="name" placeholder="имя" value="{{ request()->get('name') }}">
            <input type="text" name="surname" placeholder="фамилия" {{ request()->get('surname') }}>
            <input type="text" name="email" placeholder="почта" {{ request()->get('email') }}>
            <input type="number" name="from" placeholder="от" {{ request()->get('from') }}>
            <input type="number" name="to" placeholder="до" {{ request()->get('to') }}>
            <input type="text" name="description" placeholder="описание" {{ request()->get('description') }}>
            <input id="isMarried" type="checkbox" name="is_married"
                {{ request()->get('is_married') == 'on' ? 'checked' : ''}}>
            <label for="isMarried">Семейное положение</label>

            <button type="submit">Найти</button>
            <a href="{{ route('worker.index') }}">Сбросить</a>
        </form>
    </div>
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
        {{ $workers->withQueryString()->links() }}
    </div>
</div>

@endsection
