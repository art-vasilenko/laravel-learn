<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'positions';

    protected $guarded = false;

    public function workers()
    {
        return $this->hasMany(Worker::class, 'position_id', 'id');
    }
}
