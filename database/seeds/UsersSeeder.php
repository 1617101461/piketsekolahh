<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole ->name = "admin";
        $adminRole ->display_name = "Admin";
        $adminRole ->save();

        //membuat role member

        $memberRole = new Role();
        $memberRole ->name = "member";
        $memberRole ->display_name = "Member";
        $memberRole ->save();

        $petugasRole =new Role();
        $petugasRole ->name ="petugas";
        $petugasRole ->display_name ="Petugas";
        $petugasRole ->save();
        
        $Admin = new User();
        $Admin ->name = "admin";
        $Admin ->email = "Admin@gmail.com";
        $Admin ->password = bcrypt('rahasia');
        $Admin -> save();
        $Admin -> attachRole($adminRole);


        $member = new User();
        $member ->name = "sample member";
        $member ->email = "member@gmail.com";
        $member ->password = bcrypt('rahasia');
        $member -> save();
        $member -> attachRole($memberRole);

        $petugas =new User();  
        $petugas ->name ="sample petugas";
        $petugas ->email ="petugas@gmail.com";
        $petugas ->password =bcrypt('rahasia');
        $petugas ->save();
        $petugas ->attachRole($petugasRole);

    }
}
