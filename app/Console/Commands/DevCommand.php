<?php

namespace App\Console\Commands;

use App\Models\Profile;
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

        // Получаем рабочего из профиля
        // $profile = Profile::find(1);
        // $worker = Worker::find($profile->worker_id);

        // dd($worker->toArray());


        //Получаем профиль из рабочег0
        // $worker = Worker::find(1);
        // $profile = Profile::where('worker_id', $worker->id)->first();

        // dd($profile->toArray());

        // Через взаимодейсвия классов моделей
        $worker = Worker::find(1);
        $profile = Profile::find(1);

        dd($profile->worker->toArray());
        dd($worker->profile->toArray());

        return 0;
    }

    private function prepareData()
    {
        $workerData = [
            'name' => 'Fedya',
            'surname' => 'Fedotov',
            'email' => 'fedya@mail.ru',
            'age' => 33,
            'description' => 'Some desc',
            'is_married' => false,
        ];

        $worker = Worker::create($workerData);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'Tula',
            'skill' => 'Coder',
            'experience' => 5,
            'finished_study_at' => '2022-06-01',
        ];

        $profile = Profile::create($profileData);

        dd($profile->id);

        return 0;
    }
}
