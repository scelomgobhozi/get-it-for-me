<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class messages extends Model
{
    use HasFactory;
    public function User() :BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function Rooms():BelongsTo
    {
        return $this->belongsTo('App\Rooms');
    }
}
