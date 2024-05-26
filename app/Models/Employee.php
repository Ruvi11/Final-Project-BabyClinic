<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'emp_name',
        'clinic_id',
        'phone',
        'reg_date',
        'address',
        'email',
        'password',

    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [

        'password' => 'hashed',
    ];


    public function babies()
    {
        return $this->hasMany(Baby::class);
    }
}
