<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    use HasFactory;
    protected $table = 'babies';
    protected $primaryKey = 'baby_id';
    protected $fillable = [
        'emp_id',
        'b_name',
        'clinic_id',
        'address',
        'b_age',
        'gender',
        'born_weight',
        'bdy',

    ];


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
