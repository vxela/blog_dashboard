<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class SuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $name = $this->command->ask('Super user name?', 'John Doe');
        $email = $this->command->ask('Super user email?', explode(' ', $name)[0].'@mail.com');
        $password = $this->command->ask('Super user password?', Str::random(8));


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->command->error($email." not an email format");
            exit();
        }

        $spuser = User::create([
            'name' => strval($name),
            'email' => strval($email),
            'password' => Hash::make(strval($password))
        ]);
        
        $spuser->assignRole('super');

        if ($spuser) {
            $this->command->info("super user : ".$spuser->name."\nEmail : ".$spuser->email."\nPassword : ".$password);
        } else {
            $this->command->error("Failed create super user :(");
        }

    }
}
