<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    use HasFactory;
    public $fillable = [
        'routes_id',
        'date',
        'carNumber',
        'status',
        'driversName' ,
        'client_id' ,
    ];
    public function client()
    {
        return $this->belongsTo('Client')->select(['*']);
    }
}
