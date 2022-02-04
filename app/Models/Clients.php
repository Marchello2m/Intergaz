<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $table = 'addresses';

    public function addreses()
    {
        return $this->hasMany(Addresses::class);
    }
}
