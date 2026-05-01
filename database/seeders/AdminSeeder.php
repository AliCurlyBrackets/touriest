<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $User = User::create([
            "first_name" => "admin",
            "last_name" => "tourist",
            "email" => "admin@admin.com",
            "password" => Hash::make("rootadmin"),
            "phone" => "123456789",
            "nationality" => "123456789",
        ]);


        $User->assignRole("admin");
    }
}
