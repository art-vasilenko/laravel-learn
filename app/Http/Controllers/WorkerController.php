<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\FilterRequest;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(FilterRequest $request)
    {
        // $workers = Worker::all();

        $data = $request->validated();

        $workerQuery =  Worker::query();

        if(isset($data['name'])) {
            $workerQuery->where('name', 'like', "%{$data['name']}%");
        }

        if(isset($data['surname'])) {
            $workerQuery->where('surname', 'like', "%{$data['surname']}%");
        }

        if(isset($data['email'])) {
            $workerQuery->where('name', 'like', "%{$data['email']}%");
        }

        if(isset($data['from'])) {
            $workerQuery->where('age', '>', $data['from']);
        }

        if(isset($data['to'])) {
            $workerQuery->where('age', '<', $data['to']);
        }

        if(isset($data['description'])) {
            $workerQuery->where('description', 'like', "%{$data['description']}%");
        }

        if(isset($data['is_married'])) {
            $workerQuery->where('is_married', true);
        }

        $workers =  $workerQuery->paginate(2);

        // $workers = Worker::paginate(2);

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
        // $workers = [
        //     'name' => 'mark',
        //     'surname' => 'markov',
        //     'email' => 'markov@mail.ru',
        //     'age' => 31,
        //     'description' => 'I am mark',
        //     'is_married' => true,
        // ];

        // Worker::create($workers);

        return view('worker.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset( $data['is_married']) ?  true : false;

        Worker::create($data);

        return redirect()->route('worker.index');
    }

    public function edit(Worker $worker)
    {
        return view('worker.edit', compact('worker'));
    }

    public function update(UpdateRequest $request, Worker $worker)
    {
        // $worker = Worker::find(2);

        // $worker->name = 'New name';
        // $worker->save();

        // $worker->update([
        //     'name' => 'Maaaark',
        // ]);

        $data = $request->validated();
        $data['is_married'] = isset( $data['is_married']) ?  true : false;

        $worker->update($data);

        return redirect()->route('worker.show', $worker->id);
    }

    public function delete(Worker $worker)
    {
        // $worker = Worker::find(2);

        $worker->delete();
        return redirect()->route('worker.index');
    }

}
