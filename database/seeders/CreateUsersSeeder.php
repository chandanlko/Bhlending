<?php
  
use Illuminate\Database\Seeder;
use App\Models\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
           
            [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],

             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
             [
               'name'=>'User'.rand(0,9),
               'email'=>rand(0,9).'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

?>