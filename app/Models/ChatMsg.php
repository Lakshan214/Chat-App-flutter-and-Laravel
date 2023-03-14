<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatMsg extends Model
{
    use HasFactory;

    protected $table ="chat_msg";
    protected $quarded =['id'];

    protected $touches=['chat'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function chat():BelongsTo
    {
        return $this->belongsTo(chat::class,'chat_id');
    }
}
