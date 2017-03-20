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

       //roles devem ser inseridos manualmente.

        // $user= Sentinel::registerAndActivate([
        //         'email'      => 'sergio@sergio.com',
        //         'password'   => 'sergio',
        //         'permissions'=>  [''],
        //         'last_login' =>  ' ',
        //         'first_name' => 'Sérgio Fernando',
        //         'last_name'  => 'Bata'
        //         ]);
       
        // $rolex = Sentinel::findRoleBySlug('admin');
        // $rolex->users()->attach($user);


         $area = new Area;
         $area->designacao ='Ciências Tecnológicas';
         $area->descricao = 'Bla bla bla';
         $area->save();

         $curso = new Curso;
         $curso->designacao = 'Eng. Ambiental e Gestão de Desastres';
         $curso->area_id = $area->id;
         $curso->save();

         $curso = new Curso;
         $curso->designacao = 'Eng. e Gestão Industrial';
         $curso->area_id = $area->id;
         $curso->save();

         $curso = new Curso;
         $curso->designacao = 'Eng. e Gestão de TICs';
         $curso->area_id = $area->id;
         $curso->save();

         $curso = new Curso;
         $curso->designacao = 'Eng. e Gestão de EARPs';
         $curso->area_id = $area->id;
         $curso->save();

         $curso = new Curso;
         $curso->designacao = 'Eng. e Gestão de Construção Civil';
         $curso->area_id = $area->id;
         $curso->save();

         // $area = new Area;
         // $area->designacao ='lic. Ciências Jurídicas';
         // $area->descricao = 'Bla bla bla';
        
         // $area->save(); 
        //$curso = new Curso;
       //  $curso->designacao = 'Lic. Informática';

       //  $curso->save();

       //  $curso = new Curso;
       //  $curso->designacao = 'Lic. Administracão Pública';

       //  $curso->save();

       //  $curso = new Curso;
       //  $curso->designacao = 'Lic. Administracão Pública';

       //  $curso->save();

       // $curso = new Curso;
       //  $curso->designacao = 'Lic. Administração e Gestão de Empresas';

       //  $curso->save();
        
       //  $curso = new Curso;
       //  $curso->designacao = 'Lic. Gestão Financeira';

       //  $curso->save();
       
       //  $curso = new Curso;
       //  $curso->designacao = 'Lic. Gestão de Recursos Humanos';

       //  $curso->save();
       
       //  $curso = new Curso;
       //  $curso->designacao = 'Lic. Gestão de Marketing';

       //  $curso->save();
 
       //  $curso = new Curso;
       //  $curso->designacao = 'Lic. Contabilidade e Auditoria';

       //  $curso->save();

        
       //  $curso = new Curso;
       //  $curso->designacao = 'Lic. Relações Públicas';
       //  $area->descricao = 'Bla bla bla';
       //  $curso->save();

       
    }
}
