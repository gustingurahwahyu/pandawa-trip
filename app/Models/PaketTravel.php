<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketTravel extends Model
{
    use HasFactory;

    protected $table = 'paket_travel';

    protected $fillable = [
        'name',
        'description',
        'image',
        'capacity',
        'duration',
        'price',
        'discount',
    ];

    public function destinasis()
    {
        return $this->hasMany(Destinasi::class, 'paket_travel_id');
    }
}
