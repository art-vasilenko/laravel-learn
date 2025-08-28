<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    use HasFactory;

    protected $table = 'departaments';

    protected $guarded = false;

    //  ОДИН К ОДНОМУ ЧЕРЕЗ
    public function boss()
    {
        return $this->hasOneThrough(
            Worker::class,
            Position::class
        )->where('position_id', 2);
    }

    //  ОДИН КО МНОГИМ ЧЕРЕЗ
    public function workers()
    {
        return $this->hasManyThrough(
            Worker::class,
            Position::class
        );
    }
}
