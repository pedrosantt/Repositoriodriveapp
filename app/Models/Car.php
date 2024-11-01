<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'year',
        'license_plate',
        'user_id',
    ];

    // Defina a relação com o modelo User, se necessário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
