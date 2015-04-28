<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $alunoRole = new Role;
        $alunoRole->name = 'aluno';
        $alunoRole->save();

        $testeRole = new Role;
        $testeRole->name = 'teste';
        $testeRole->save();

        $user = User::where('username','=','admin')->first();
        $user->attachRole( $adminRole );

//        $user = User::where('username','=','teste')->first();
//        $user->attachRole( $testeRole );

        for ($i = 1; $i<=170; $i++){
            $user = User::where('username','=','Aluno' . sprintf('%03d', $i))->first();
            $user->attachRole( $alunoRole );
        }
    }

}
