<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $table =  'employees'; 
     // Excluir _token de la asignación masiva
     protected $guarded = ['_token'];
    // protected $fillable = ['name', 'email','sex', 'area_id', 'boletin', 'description'];
    // En el modelo Area
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    // En el modelo Role
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'employee_roles');
    }
}
 