<?php

namespace App\Models;

use App\Models\Reward;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TukarPoin extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reward()
    {
        return $this->belongsTo(Reward::class);
    }
}
