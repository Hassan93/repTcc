<?php

use Illuminate\Database\Seeder;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $role = new Role;
        $role->slug= 'func';
        $role->name= 'Funcionario';

        $role->save();

        $role = new Role;
        $role->slug= 'faculdade';
        $role->name= 'Faculdade';

        $role->save();
    }
}
