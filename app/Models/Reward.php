<?php

namespace App\Models;

use App\Models\TukarPoin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reward extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'image', 'stock', 'description'];

    public function tukar_poin()
    {
        return $this->hasMany(TukarPoin::class);
    }
}
