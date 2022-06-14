<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundLoss extends Model
{
    use HasFactory;
      protected $with = ['object'];

    public function object()
    {
        return $this->belongsTo(ObjectRessource::class);
    }
}
