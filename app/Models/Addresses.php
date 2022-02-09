<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;
    public $fillable =[
        'title',
        'client_id',
        'created_at',
    ];


    public function __construct(string $title)
    {
      $this->title=$title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function client()
    {
        return $this->belongsTo('Client')->select(['id','title']);
    }

}
