<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Asingns_Orders extends Model{
    use HasFactory;

    protected $fillable = [
        'Descripcion',
        'Fecha_Asignación'
    ];

    public function Asingns_Orders()
    {
        return $this->belongsTo(Asingns_Orders::class);
    }
}
