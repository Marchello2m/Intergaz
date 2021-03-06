<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Routes extends Model
{
    use HasFactory;
    protected $table = 'routes';
    public $fillable = [
        'routes_id',
        'date',
        'carNumber',
        'status',
        'driverName' ,
        'client_id' ,
    ];
    public static function getStatus()
    {
        return Routes::query()
            ->selectRaw("count(*) as all_statuses")
            ->selectRaw("count(case when status = 1 then 1 end) as Izveidots")
            ->selectRaw("count(case when status = 2 then 1 end) as Ieplānots")
            ->selectRaw("count(case when status  = 3 then 1 end) as Slēgts")

            ->first()
            ->toArray();

    }



    public function client()
    {
        return $this->belongsTo('Client')->select(['*']);
    }
}
