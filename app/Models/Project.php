<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $guarded = false;

    // МНОГИЕ КО МНОГИМ
    public function workers()
    {
        return $this->belongsToMany(
        Worker::class
        );
    }
}
