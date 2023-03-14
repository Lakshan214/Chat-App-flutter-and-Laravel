<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class chat extends Model
{
    use HasFactory;

    protected $table ="chats";
    protected $quarded =['id'];

    public function parents(): HasMany
   {
    return $this->hasMany(ChatPartispan::class,'chat_id');
   }

   public function msg():HasMany
   {
    return $this->hasMany(ChatMsg::class,'chat_id');
   }

   public function Lastmsg(): HasOne
   {
    return $this->hasOne(ChatMsg::class,'chat_id')->Latest('updated_at');
   }
}
