<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = false;

    // ПОЛИМОРФ ОДИН К ОДНОМУ
    public function avatar()
    {
        return $this->morphOne(Avatar::class, 'avatarable');
    }

    // ПОЛИМОРФ ОДИН КО МНОГИМ
    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    // ПОЛИМОРФ МНОГИЕ КО МНОГИМ
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
