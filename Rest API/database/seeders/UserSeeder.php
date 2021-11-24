<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date =Carbon::now()->format('Y-m-d H:i:s');
        $user =array(
            array('role_id'=> 1,'name' => 'administrator','email'=>'admin@gmail.com','password'=> Hash::make('admin'),'created_at' => $date,'updated_at' => $date),
            array('role_id'=> 2,'name' => 'user','email'=>'user@gmail.com','password'=> Hash::make('user'),'created_at' => $date,'updated_at' => $date),
        );
        User::insert($user);
    }
}
