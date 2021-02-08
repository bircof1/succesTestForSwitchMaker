<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'role_id' =>1,
            'name' =>'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'image' => 'IMG_20210202_104550.jpg',
            'email_verified_at' => now(),
            'password'=>Hash::make('SuperAdmin'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'role_id' =>2,
            'name' =>'Admin',
            'email' => 'admin@gmail.com',
            'image' => 'IMG_20210202_104550.jpg',
            'email_verified_at' => now(),
            'password'=>Hash::make('Admin'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'role_id' =>3,
            'name' =>'Client',
            'email' => 'client@gmail.com',
            'image' => 'IMG_20210202_104550.jpg',
            'email_verified_at' => now(),
            'password'=>Hash::make('client'),
            'remember_token' => Str::random(10),
        ]);
    }
}
