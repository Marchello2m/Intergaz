<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;
    protected $table = 'addresses';
    public $fillable =[
        'title',
        'client_id',
        'created_at',
    ];






    public function client()
    {
        return $this->belongsTo('Client')->select(['id','title']);
    }

}
