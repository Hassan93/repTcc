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

      // roles devem ser inseridos manualmente.

        // $user= Sentinel::registerAndActivate([
        //         'email'      => 'sergio@sergio.com',
        //         'password'   => 'sergio',
        //         'permissions'=>  [' '],
        //         'last_login' =>  ' ',
        //         'first_name' => 'Sérgio Fernando',
        //         'last_name'  => 'Bata',
        //         'faculdade'  => 0
        //         ]);
       
        // $rolex = Sentinel::findRoleBySlug('admin');
        // $rolex->users()->attach($user);


         $area = new Area;
         $area->designacao ='Ciências Econômicas e Sociais';
         $area->descricao = 'Bla bla bla';
         $area->save();

         $curso = new Curso;
         $curso->designacao = 'Lic. Administração e Gestão de Empresas';
         $curso->area_id = $area->id;
         $curso->save();

         $curso = new Curso;
         $curso->designacao = 'Lic. Gestão Financeira';
         $curso->area_id = $area->id;
         $curso->save();

         $curso = new Curso;
         $curso->designacao = 'Lic. Gestão de Recursos Humanos';
         $curso->area_id = $area->id;
         $curso->save();

         $curso = new Curso;
         $curso->designacao = 'Lic. Gestão de Marketing';
         $curso->area_id = $area->id;
         $curso->save();

         $curso = new Curso;
         $curso->designacao = 'Lic. Contabilidade e Auditoria';
         $curso->area_id = $area->id;
         $curso->save();

         $curso = new Curso;
         $curso->designacao = 'Lic. Administração Pública';
         $curso->area_id = $area->id;
         $curso->save();

         $curso->designacao = 'Lic. Relações Públicas';
         $curso->area_id = $area->id;
         $curso->save();

         //Comecam 

         $area1 = new Area;
         $area1->designacao ='Ciências Tecnológicass';
         $area1->descricao = 'Bla bla bla';
         $area1->save(); 
        
        $curso = new Curso;
        $curso->designacao = 'Lic. Eng. Ambiental e Gestão de Desastres';
        $curso->area_id = $area1->id;
        $curso->save();

        $curso = new Curso;
        $curso->designacao = 'Lic. Eng. e Gestão Industrial';
        $curso->area_id = $area1->id;
        $curso->save();

        $curso = new Curso;
        $curso->designacao = 'Lic. Eng. e Gestão de TICs';
        $curso->area_id = $area1->id;
        $curso->save();

        $curso = new Curso;
        $curso->designacao = 'Lic. Eng. e Gestão de EARPs';
        $curso->area_id = $area1->id;
        $curso->save();

        $curso = new Curso;
        $curso->designacao = 'Lic. Eng. e Gestão de Construção Civil';
        $curso->area_id = $area1->id;
        $curso->save();

         $area2 = new Area;
         $area2->designacao ='Ciências Jurídicas';
         $area2->descricao = 'Bla bla bla';
         $area2->save(); 
        
        $curso = new Curso;
        $curso->designacao = 'Lic. Jurídico – Forense';
        $curso->area_id = $area2->id;
        $curso->save();

        $curso = new Curso;
        $curso->designacao = 'Lic. Jurídico - Económico - Empresarial';
        $curso->area_id = $area2->id;
        $curso->save();

        $curso = new Curso;
        $curso->designacao = 'Lic. Jurídico - Político - Constitucional';
        $curso->area_id = $area2->id;
        $curso->save();
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
