<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            ['name'=>'user', 'email'=>'user@gmail.com', 'password'=>bcrypt('password')],
            ['name'=>'Editor', 'email'=>'editor@gmail.com', 'password'=>bcrypt('password')],
            ['name'=>'Author', 'email'=>'author@gmail.com', 'password'=>bcrypt('password')],
        ]);

        Role::insert([

            ['name'=>'Editor', 'slug'=>'editor'],
            ['name'=>'Author', 'slug'=>'author'],
        ]);

        Permission::insert([

            ['name'=>'Add Post', 'slug'=>'add-post'],
            ['name'=>'Delete Post', 'slug'=>'delete-post'],
        ]);
    }
}
