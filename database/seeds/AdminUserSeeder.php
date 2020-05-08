<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'          => 'admin',
            'email'         => 'admin@admin.com',
            'password'      => bcrypt('123123')
        ]);
        
        $user->assignRole('admin');
    }
}
