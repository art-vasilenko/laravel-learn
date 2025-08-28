<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = false;

    // ПОЛИМОРФНЫЕ ОТНОШЕНИЯ МНОГИЕ КО МНОГИМ
    public function workers()
    {
        return $this->morphedByMany(Worker::class, 'taggable');
    }

    // ПОЛИМОРФНЫЕ ОТНОШЕНИЯ МНОГИЕ КО МНОГИМ
    public function clients()
    {
        return $this->morphedByMany(Client::class, 'taggable');
    }
}
