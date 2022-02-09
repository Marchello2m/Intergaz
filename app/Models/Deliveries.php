<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
    use HasFactory;
    public $fillable=[
        'routeId',
        'addressId',
        'type',
        'status',
        'client_id',
        'created_at',
    ];

    public function client()
    {
        return $this->belongsTo('Client')->select(['*']);
    }
}
