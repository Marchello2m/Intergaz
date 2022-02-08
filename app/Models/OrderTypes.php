<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTypes extends Model
{
    use HasFactory;
    protected $table = 'clients';
    public function client()
    {
        return $this->belongsTo('Client');
    }

}
