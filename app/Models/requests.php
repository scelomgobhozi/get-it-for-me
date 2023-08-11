<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class requests extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'from_id',

    ];
    public  function User()  :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
