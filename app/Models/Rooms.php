<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use \Illuminate\Database\Eloquent\Relations\HasMany;
use Vinkla\Hashids\Facades\Hashids;

class Rooms extends Model
{
    use HasFactory;
    protected $fillable =[
        'Admin_id',
        'room_name',
        'short_room_name',
        'room_url'
    ];
   public  function User()  :BelongsTo
   {
        return $this->belongsTo(User::class);
   }

   public function messages() :HasMany
   {
      return $this->hasMany(messages::class);
   }

    public function participants() :HasMany
    {
        return $this->hasMany(participants::class);
    }

    public function requests()  :HasMany
    {
        return $this->hasMany(requests::class);
    }



}
