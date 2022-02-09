<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryLines extends Model
{
    use HasFactory;
    protected $table = 'delivery_lines';
    public $fillable=[
        'deliveryId',
        'item',
        'price',
        'quantity',
        'client_id',
        'created_at',
    ];


    public function client()
    {
        return $this->belongsTo('Client')->select(['*']);
    }
}
