<?php

namespace App\Models;

use http\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    public $fillable = [

        'name'=>'',
        'phone'=> '',
        'email' => '',
        'created_at' =>'',
    ];
    protected $table = 'clients';


    public function dbList()
    {
        return $this->hasManyThrough(Clients::class,Addresses::class, Deliveries::class, DeliveryLines::class,Routes::class);
    }
    public function deliveries()
    {
        return $this->hasMany(Deliveries::class);
    }
    public function addresses()
    {
        return $this->hasMany(Addresses::class);
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
