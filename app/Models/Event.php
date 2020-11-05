<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function participants() {
        return $this->hasMany('App\Models\EventParticipant');
    }

    public function suscribers() {
        return $this->belongsToMany('App\Models\Suscriber');
    }
}
