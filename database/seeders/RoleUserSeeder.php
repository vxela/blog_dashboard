<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $roles = explode(',', env('SYSTEM_ROLE', 'super,admin,reader'));

        foreach($roles as $role) {
            if (Role::create(['name' => $role])) {
                $this->command->info("Role ".$role." created");
            } else {
                $this->command->error("Create role ".$role." failed");
            }
        }
        
    }
}
