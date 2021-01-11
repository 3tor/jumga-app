<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id' => 1, 'name' => 'Admin', 'description' => 'Platform owner/admin'],
            ['id' => 2, 'name' => 'Merchant', 'description' => 'Platform merchant who sells items'],
            ['id' => 3, 'name' => 'User', 'description' => 'User of platform who purchases items put up for sale']
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(['id' => $role['id']], $role);
        }
    }
}
