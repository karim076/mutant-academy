<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function leader() {
        return $this->belongsTo(Superhuman::class);
    }

    public function teamMembers() {
        return $this->belongsToMany(Superhuman::class);
    }

    public function missions() {
        return $this->belongsToMany(Mission::class);
    }


}
