<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Curso;
use App\Area;
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
        $role->slug= 'admin';
        $role->name= 'Administrador';
        $role->save();
        
        $role = new Role;
        $role->slug= 'func';
        $role->name= 'Funcionario';

        $role->save();

        $role = new Role;
        $role->slug= 'faculdade';
        $role->name= 'Faculdade';

        $role->save();

        $curso = new Curso;
        $curso->designacao = 'Informática';

        $curso->save();

        $curso = new Curso;
        $curso->designacao = 'Pdministracão Pública';

        $curso->save();

        // $area = new Area;
        // $area->designacao ='Ciências Econômicas e Sociais';
        // $area->descricao = 'Bla bla bla';

        // $area->save();

        // $area = new Area;
        // $area->designacao ='Ciências Tecnológicas';
        // $area->descricao = 'Bla bla bla';
        
        // $area->save();

        // $area = new Area;
        // $area->designacao ='Ciências Jurídicas';
        // $area->descricao = 'Bla bla bla';
        
        // $area->save();
    }
}
