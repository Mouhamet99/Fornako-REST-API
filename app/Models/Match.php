<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    public function loss()
    {
        return $this->hasOne(Loss::class, 'id', 'loss_id');
    }

    public function foundLoss()
    {
        return $this->hasOne(FoundLoss::class, 'id', 'loss_id');
    }
}
