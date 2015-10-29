<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            array(
                'username'          => 'Admin',
                'email'             => 'admin@example.org',
                'password'          => Hash::make('admin!'),
                'confirmed'         => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime,
            )
//            array(
//                'username'          => 'Teste',
//                'email'             => 'teste@example.org',
//                'password'          => Hash::make('teste'),
//                'confirmed'         => 1,
//                'confirmation_code' => md5(microtime().Config::get('app.key')),
//                'created_at'        => new DateTime,
//                'updated_at'        => new DateTime,
//            )
        );

        DB::table('users')->insert( $users );
        $users = array();
        for ($i = 1; $i <= 350; $i++){
            array_push($users,
                array(
                    'username'          => 'Aluno' . sprintf('%03d', $i),
                    'email'             => 'aluno'. sprintf('%03d', $i) . '@example.org',
                    'password'          => Hash::make('aluno' . sprintf('%03d', $i)),
                    'confirmed'         => 1,
                    'confirmation_code' => md5(microtime().Config::get('app.key')),
                    'created_at'        => new DateTime,
                    'updated_at'        => new DateTime,
                )
            );
        }

        DB::table('users')->insert( $users );
    }

}
