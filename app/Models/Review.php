<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = false;

    // ПОЛИМОРФНЫЕ ОТНОШЕНИЯ ОДИН КО МНОГИМ
    public function reviewable()
    {
        return $this->morphTo();
    }
}
