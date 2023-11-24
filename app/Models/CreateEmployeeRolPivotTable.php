<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateEmployeeRolPivotTable extends Model
{
    use HasFactory;
    protected $table = 'employee_role'; 
    // protected $fillable = ['employee_id', 'role_id'];
}
