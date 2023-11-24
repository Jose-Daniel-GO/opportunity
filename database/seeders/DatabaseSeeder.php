<?php
namespace Database\Seeders;

use App\Models\Employee;
use Database\Factories\AreaFactory;
use Database\Factories\EmployeeFactory;
use Database\Factories\EmployeeRoleFactory;
use Database\Factories\RoleFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        AreaFactory::new()->count(5)->create();
        EmployeeRoleFactory::new()->count(5)->create();
        RoleFactory::new()->count(5)->create();
        EmployeeFactory::new()->count(5)->create();
        // AreaFactory::new()->factory(5)->create();
        // RoleFactory::new()->factory(5)->create();
        // EmployeeFactory::new()->factory(5)->create();
    }
}
