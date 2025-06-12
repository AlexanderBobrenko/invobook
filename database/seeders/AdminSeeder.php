
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Администратор',
            'email' => 'admin@example.com',
            'password' => Hash::make('Jingle2018'),
            'email_verified_at' => now(),
        ]);
    }
}
