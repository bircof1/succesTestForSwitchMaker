<?php
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create([
            'title'=>'SuperAdmin',
            'description'=>'SuperAdmin is the réel boss!',
        ]);
        Role::create([
            'title'=>'Admin',
            'description'=>'Admin is the second boss!',
        ]);
        Role::create([
            'title'=>'Client',
            'description'=>'Client is an sample user!',
        ]);
    }
}
