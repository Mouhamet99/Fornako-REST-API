<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Loss extends Model
{
    use HasFactory, HasApiTokens;

    protected $with = ['object'];
    protected $guarded = ['id'];

    public function object()
    {
        return $this->belongsTo(ObjectRessource::class, 'object_ressource_id');
    }
}
