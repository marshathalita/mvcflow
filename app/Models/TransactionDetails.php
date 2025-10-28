<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
   public function item()
   {
    return $this->belongsTo(Item::class);
   }
}
