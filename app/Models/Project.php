<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $guarded = false;

    public function workers()
    {
        return $this->belongsToMany(
        Worker::class,
        'project_workers',
        'project_id',
        'worker_id',
        );
    }
}
