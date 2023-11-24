<?php

namespace Database\Factories;

use App\Models\CreateEmployeeRolPivotTable;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CreateEmployeeRolPivotTable>
 */
class EmployeeRoleFactory extends Factory
{
    // protected $model = Employee::class;
    protected $model = CreateEmployeeRolPivotTable::class;

    public function definition()
    {
        return [
            'employee_id' => Employee::factory(),
            'role_id' => Role::factory(),
        ];
    }
}

