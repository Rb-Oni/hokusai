<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Robin',
            'email' => 'robin.falck57@gmail.com',
            'password' => '$2y$10$A33meaVfPeJghaL8krSjJOc7q2cnr5S/0J25taEEAGjvBedFAxvK2',
            'remember_token' => 'nj2ShrGVpyJs7iRTwheFePVnsCzURZhTJxv7pFyLYZQuZ533Cplp2ECONpYm'
        ]);
    }
}
