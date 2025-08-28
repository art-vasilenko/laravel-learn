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
}
