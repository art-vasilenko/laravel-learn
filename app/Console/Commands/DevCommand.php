<?php

namespace App\Console\Commands;

use App\Models\Avatar;
use App\Models\Client;
use App\Models\Departament;
use App\Models\Position;
use App\Models\Project;
use App\Models\Review;
use App\Models\Tag;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develop';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $this->prepareData();
        // $this->prepareManyToMany();

        // Через взаимодейсвия классов моделей один к одному

        // $worker = Worker::find(1);
        // $profile = Profile::find(1);

        // dd($profile->worker->toArray());
        // dd($worker->profile->toArray());


        // Через взаимодейсвия классов моделей один ко многим

        // $worker = Worker::find(1);
        // dd($worker->position->toArray());

        // $position = Position::find(2);
        // dd($position->workers->toArray());


        // Через взаимодейсвия классов моделей многие ко многим

        // $project = Project::find(1);
        // dd($project->workers->toArray());
        // $worker = Worker::find(2);
        // dd($worker->projects->toArray());


        // $projectWorkers = ProjectWorker::where('project_id', $project->id)->get();

        // $workersIds = $projectWorkers->pluck('worker_id')->toArray();

        // $workers = Worker::whereIn('id', $workersIds)->get();
        // dd($workers->toArray());

        // ОДИН К ОДНОМУ ЧЕРЕЗ

        // $departament = Departament::find(1);
        // dd($departament->boss->toArray());

        // $worker = Worker::find(2);
        // dd($worker->position->departament->toArray());

        // ОДИН КО МНОГИМ ЧЕРЕЗ

        // $departament = Departament::find(1);
        // dd($departament->workers->toArray());

        // КОНВЕНЦИЯ LARAVEL

        // $worker = Worker::find(2);
        // dd($worker->profile->toArray());
        // dd($worker->projects->toArray());

        // ПОЛИМОРФНЫЕ ОТНОШЕНИЯ ОДИН К ОДНОМУ

        // $worker = Worker::find(5);
        // $client = Client::find(2);

        // $avatar = Avatar::find(1);

        // dd($avatar->avatarable->toArray());

        // $worker->avatar()->create([
        //     'path' => 'some path_5',
        // ]);

        // $client->avatar()->create([
        //     'path' => 'some path_2',
        // ]);

        // ПОЛИМОРФНЫЕ ОТНОШЕНИЯ ОДИН КО МНОГИМ

        // $worker = Worker::find(5);
        // $client = Client::find(2);
        // $review = Review::find(3);

        // $worker->reviews()->create([
        //     'body' => 'text body worker 1',
        // ]);

        // $worker->reviews()->create([
        //     'body' => 'text body worker 2',
        // ]);

        // $client->reviews()->create([
        //     'body' => 'text body client 1',
        // ]);

        // $client->reviews()->create([
        //     'body' => 'text body client 2',
        // ]);

        // dd($client->reviews->toArray());
        // dd($review->reviewable->toArray());

        // ПОЛИМОРФНЫЕ ОТНОШЕНИЯ МНОГИЕ КО МНОГИМ

        // $worker = Worker::find(2);
        // $client = Client::find(1);
        // $tag = Tag::find(2);

        // $worker->tags()->attach([1, 2]);
        // $client->tags()->attach([2, 1]);

        // dd($tag->clients->toArray());

        // ОТНОШЕНИЯ С ВЫБОРКОЙ

        // $position = Position::find(1);
        // dd($position->queryWorker->toArray());

        return 0;
    }

    private function prepareData()
    {

        $departament1 = Departament::create([
            'title' => 'IT',
        ]);

        $departament2 = Departament::create([
            'title' => 'Analytics',
        ]);

        $positionData1 = [
            'title' => 'Developer',
            'departament_id' => $departament1->id
        ];

        $positionData2 = [
            'title' => 'Manager',
            'departament_id' => $departament1->id
        ];

        $positionData3 = [
            'title' => 'Designer',
            'departament_id' => $departament1->id
        ];

        $position1 = Position::create($positionData1);
        $position2 =  Position::create($positionData2);
        $position3 =  Position::create($positionData3);

        $workerData1 = [
            'name' => 'Fedya',
            'surname' => 'Fedotov',
            'email' => 'fedya@mail.ru',
            'position_id' => $position1->id,
            'age' => 33,
            'description' => 'Some desc',
            'is_married' => false,
        ];

        $workerData2 = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'ivan@mail.ru',
            'position_id' => $position2->id,
            'age' => 23,
            'description' => 'Some desc',
            'is_married' => true,
        ];

        $workerData3 = [
            'name' => 'Kate',
            'surname' => 'Kateva',
            'position_id' => $position1->id,
            'email' => 'kate@mail.ru',
            'age' => 27,
            'description' => 'Some desc',
            'is_married' => true,
        ];

        $workerData4 = [
            'name' => 'Roma',
            'surname' => 'Romanov',
            'position_id' => $position3->id,
            'email' => 'roma@mail.ru',
            'age' => 23,
            'description' => 'Some desc',
            'is_married' => false,
        ];

        $workerData5 = [
            'name' => 'Micha',
            'surname' => 'Michailov',
            'position_id' => $position1->id,
            'email' => 'micha@mail.ru',
            'age' => 34,
            'description' => 'Some desc',
            'is_married' => true,
        ];

        $workerData6 = [
            'name' => 'Vadik',
            'surname' => 'Vadikov',
            'position_id' => $position1->id,
            'email' => 'vadik@mail.ru',
            'age' => 44,
            'description' => 'Some desc',
            'is_married' => false,
        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);
        $worker4 = Worker::create($workerData4);
        $worker5 = Worker::create($workerData5);
        $worker6 = Worker::create($workerData6);

        $profileData1 = [
            'city' => 'Tula',
            'skill' => 'Coder',
            'experience' => 5,
            'finished_study_at' => '2022-06-01',
        ];

        $profileData2 = [
            'city' => 'Moskow',
            'skill' => 'Frontend',
            'experience' => 2,
            'finished_study_at' => '2021-06-01',
        ];

        $profileData3 = [
            'city' => 'Moskow',
            'skill' => 'Design',
            'experience' => 12,
            'finished_study_at' => '2014-06-01',
        ];

        $profileData4 = [
            'city' => 'Praga',
            'skill' => 'Junior',
            'experience' => 1,
            'finished_study_at' => '2021-06-01',
        ];

        $profileData5 = [
            'city' => 'Amsterdam',
            'skill' => 'Middle',
            'experience' => 3,
            'finished_study_at' => '2018-06-01',
        ];

        $profileData6 = [
            'city' => 'Roma',
            'skill' => 'Senior',
            'experience' => 6,
            'finished_study_at' => '2012-06-01',
        ];

        $worker1->profile()->create($profileData1);
        $worker2->profile()->create($profileData2);
        $worker3->profile()->create($profileData3);
        $worker4->profile()->create($profileData4);
        $worker5->profile()->create($profileData5);
        $worker6->profile()->create($profileData6);

        Client::create([
            'name' => 'Bob_client'
        ]);

        Client::create([
            'name' => 'Ropz_client'
        ]);

        Tag::create([
            'title' => 'sport'
        ]);

        Tag::create([
            'title' => 'travel'
        ]);

        return 0;
    }

    public function prepareManyToMany()
    {
        $workerManager = Worker::find(2);

        $workerBackend = Worker::find(1);
        $workerFrontend = Worker::find(3);

        $workerDesigner = Worker::find(4);

        $workerFullstack1 = Worker::find(5);
        $workerFullstack2 = Worker::find(6);

        $project1 = Project::create([
            'title' => 'Shop'
        ]);

        $project2 = Project::create([
            'title' => 'Blog'
        ]);

        // Конвенция laravel МНОГИЕ КО МНОГИМ

        $project1->workers()->attach([
            $workerManager->id,
            $workerBackend->id,
            $workerFrontend->id,
            $workerDesigner->id
        ]);

        $project2->workers()->attach([
            $workerManager->id,
            $workerDesigner->id,
            $workerFullstack1->id,
            $workerFullstack2->id,
        ]);
    }
}
