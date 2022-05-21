<?php

namespace Database\Seeders;

use App\Models\Cart;
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
        $users = [
            [
                'firstname' => 'Robin',
                'lastname' => 'FALCK',
                'email' => 'robin.falck57@gmail.com',
                'password' => '$2y$10$A33meaVfPeJghaL8krSjJOc7q2cnr5S/0J25taEEAGjvBedFAxvK2',
                'remember_token' => 'nj2ShrGVpyJs7iRTwheFePVnsCzURZhTJxv7pFyLYZQuZ533Cplp2ECONpYm',
                'role' => 'admin'
            ],
            [
                'firstname' => 'Rémi',
                'lastname' => 'CHAMPLON',
                'email' => 'test@test.com',
                'password' => '$2y$10$A33meaVfPeJghaL8krSjJOc7q2cnr5S/0J25taEEAGjvBedFAxvK2',
                'remember_token' => 'nj2ShrGVpyJs7iRTwheFePVnsCzURZhTJxv7pFyLYZQuZ533Cplp2ECONpYm',
                'role' => 'user'
            ]
        ];
        foreach ($users as $user) {
            try {
                $tmpUser = User::firstOrCreate([
                    'firstname' => $user['firstname'],
                    'lastname' => $user['lastname'],
                    'email' => $user['email'],
                    'password' => $user['password'],
                    'remember_token' => $user['remember_token'],
                    'role' => $user['role']
                ]);
                Cart::create([
                    'user_id' => $tmpUser->id,
                    'total' => 0
                ]);
            } catch (\Exception $exception) {
                if ($exception->getCode() == "23000") {
                    dump('User "' . $user['firstname'] . '" already exist');
                } else {
                    dump($exception->getMessage());
                }
            }
        }
    }
}
