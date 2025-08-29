<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'positions';

    protected $guarded = false;

    // ОДИН КО МНОГИМ
    public function workers()
    {
        return $this->hasMany(Worker::class);
    }

    // ОДИН К ОДНОМУ ЧЕРЕЗ
    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }

    // ОТНОШЕНИЯ С ВЫБОРКОЙ
    public function queryWorker()
    {
        // return $this->hasOne(Worker::class)->ofMany('age', 'max');
        return $this->hasOne(Worker::class)->where('surname', '=', 'Vadikov');
    }
}
