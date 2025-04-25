<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $table = 'destinasi';

    protected $fillable = [
        'name',
        'paket_travel_id',
        'image',
        'description',
        'price',
        'location',
    ];

    public function paketTravel()
    {
        return $this->belongsTo(PaketTravel::class, 'paket_travel_id');
    }
}
