<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedOrder extends Model
{
    use HasFactory;

    protected $table = 'assigned_orders';
    protected $fillable = ['idclient', 'idcomponent', 'idservice', 'iduser'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'idclient');
    }

    public function component()
    {
        return $this->belongsTo(Component::class, 'idcomponent');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'idservice');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }
}
