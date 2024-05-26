<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Growt_Chart extends Model
{
    use HasFactory;

    protected $table = 'growthcharts';
    protected $primaryKey = 'id';
    protected $fillable = [

        'weight',
        'date',
        'height',
    ];
}
