<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Admin', 
            'slug' => 'admin',
            'permissions' => [
                'view-data' => true,
                'submit-data' => true,
                'edit-users' => true,
            ]
        ]);
        $scouter = Role::create([
            'name' => 'Scouter', 
            'slug' => 'scouter',
            'permissions' => [
                'submit-data' => true,
            ]
        ]);
        $viewer = Role::create([
            'name' => 'Viewer', 
            'slug' => 'viewer',
            'permissions' => [
                'view-data' => true,
            ]
        ]);
    }
}
