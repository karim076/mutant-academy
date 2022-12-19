<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    use HasFactory;

    public function superhumans() {
        return $this->hasMany(Superhuman::class);
    }

    public function groups() {
        return $this->belongsToMany(Group::class);
    }

    public function missions() {
        return $this->belongsToMany(Mission::class);
    }
}
