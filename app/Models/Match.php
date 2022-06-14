<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $with = ['loss', 'found_loss'];

    public function loss()
    {
        return $this->hasOne(Loss::class);
    }

    public function foundLoss()
    {
        return $this->hasOne(FoundLoss::class);
    }
}
