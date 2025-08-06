@extends('layout.main')

@section('content')

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

@endsection
