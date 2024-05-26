<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $table = 'vaccines';
    protected $primaryKey = 'id';
    protected $fillable = [
        'v_id',
        'clinic_id',
        'v_name',
        'vac_date',


    ];
    use HasFactory;
}
