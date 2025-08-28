<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    use HasFactory;
    protected $guarded = false;

    // ПОЛИМОРФМНЫЕ ОТНОШЕНИЯ ОДИН К ОДНОМУ

    public function avatarable()
    {
        return $this->morphTo();
    }
}
