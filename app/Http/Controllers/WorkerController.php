<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return view('worker.index', compact('workers'));

        // foreach ($workers as $item) {
        //     dump($item->name);
        // }
        // dd($workers);

        // $worker = Worker::first();
        // $worker->news_attr = 'news_attr';
        // dd($worker);

        // $worker = Worker::find(2);
        // dd($worker);

    }

    public function show(Worker $worker)
    {
        // $worker = Worker::findOrFail($id);

        return view('worker.show', compact('worker'));

    }

    public function create()
    {
        $workers = [
            'name' => 'mark',
            'surname' => 'markov',
            'email' => 'markov@mail.ru',
            'age' => 31,
            'description' => 'I am mark',
            'is_married' => true,
        ];

        Worker::create($workers);

        return 'mark created';
    }

    public function delete()
    {
        $worker = Worker::find(2);

        $worker->delete();
        return 'work delete';
    }

    public function update()
    {
        $worker = Worker::find(2);

        $worker->name = 'New name';
        $worker->save();

        // $worker->update([
        //     'name' => 'Maaaark',
        // ]);

        return 'mark update';
    }
}
