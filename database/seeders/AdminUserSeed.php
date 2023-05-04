<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminUser = new User();
        $adminUser->name = "Administrador";
        $adminUser->email = "mrivera@rc-consulting.org";
        $adminUser->password = Hash::make("Rcconsulting2661067");
        $adminUser->save();
    }
}
