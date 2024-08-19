<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'ادمین',
            ],
            [
                'id'    => 3,
                'title' => 'مدرس',
            ],
            [
                'id'    => 4,
                'title' => 'دانشجو',
            ],
        ];

        Role::insert($roles);
    }
}
