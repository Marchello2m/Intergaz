<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    public $fillable = [
        'client_id'=> '',
        'name'=>'',
        'phone'=> '',
        'email' => '',
        'created_at' =>'',
    ];
    protected $table = 'clients';

    public function addreses()
    {
        return $this->hasMany(Addresses::class);
    }
    public function deliveries()
    {
        return $this->hasMany(Deliveries::class);
    }
    public function deliveryLines()
    {
        return $this->hasMany(DeliveryLines::class);
    }
    public function routes()
    {
        return $this->hasMany(Routes::class);
    }
    public function orderType()
    {
        return $this->hasMany(OrderTypes::class);
    }
}
