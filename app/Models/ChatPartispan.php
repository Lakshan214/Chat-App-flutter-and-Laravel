<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatPartispan extends Model
{
    use HasFactory;

    protected $table ="chat_partispn";
    protected $quarded =['id'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
