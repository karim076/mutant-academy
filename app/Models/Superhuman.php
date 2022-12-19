<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhuman extends Model
{
    use HasFactory;

    public function types() {
        return $this->belongsToMany(Type::class);
    }

    public function groups() {
        return $this->belongsToMany(Group::class);
    }
}
