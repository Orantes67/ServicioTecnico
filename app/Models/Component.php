<?php 


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $table = 'component';
    protected $fillable = [
        'name', 'mark', 'numSerie', 'fault', 'conditions',
        'idservice', 'idclient', 'pay', 'missing'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'idservice');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'idclient');
    }
}
