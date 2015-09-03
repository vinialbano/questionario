<?php namespace Admin;

use BaseController;
use View;

class DashboardController extends BaseController {

    public function index(){
        return View::make('dashboard/index');
    }

    public function resetDatabase()
    {
        //Apaga as respostas
        \DB::table('answers')->delete();

        //Apaga os usuários e cria de novo
        \DB::table('users')->delete();

        $users = array(
            array(
                'username'          => 'Admin',
                'email'             => 'admin@example.org',
                'password'          => \Hash::make('ThamyrisTribit!'),
                'confirmed'         => 1,
                'confirmation_code' => md5(microtime().\Config::get('app.key')),
                'created_at'        => new \DateTime,
                'updated_at'        => new \DateTime,
            )
        );
        for ($i = 1; $i <= 350; $i++){
            array_push($users,
                array(
                    'username'          => 'Aluno' . sprintf('%03d', $i),
                    'email'             => 'aluno'. sprintf('%03d', $i) . '@example.org',
                    'password'          => \Hash::make('aluno' . sprintf('%03d', $i)),
                    'confirmed'         => 1,
                    'confirmation_code' => md5(microtime().\Config::get('app.key')),
                    'created_at'        => new \DateTime,
                    'updated_at'        => new \DateTime,
                )
            );
        }

        \DB::table('users')->insert( $users );

        //Apaga os papéis de usuário e cria de novo
        \DB::table('roles')->delete();

        $adminRole = new \Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $alunoRole = new \Role;
        $alunoRole->name = 'aluno';
        $alunoRole->save();

        $user = \User::where('username','=','Admin')->first();
        $user->attachRole( $adminRole );

        for ($i = 1; $i<=350; $i++){
            $user = \User::where('username','=','Aluno' . sprintf('%03d', $i))->first();
            $user->attachRole( $alunoRole );
        }

        //Apaga as permissões e cria de novo
        \DB::table('permissions')->delete();

        $permissions = array(
            array( // 1
                'name'         => 'manage_questions',
                'display_name' => 'manage questions',
                'created_at'        => new \DateTime,
                'updated_at'        => new \DateTime,
            ),
            array( // 2
                'name'         => 'manage_alternatives',
                'display_name' => 'manage alternatives',
                'created_at'        => new \DateTime,
                'updated_at'        => new \DateTime,
            ),
            array( // 3
                'name'         => 'manage_users',
                'display_name' => 'manage users',
                'created_at'        => new \DateTime,
                'updated_at'        => new \DateTime,
            ),
            array( // 4
                'name'         => 'manage_roles',
                'display_name' => 'manage roles',
                'created_at'        => new \DateTime,
                'updated_at'        => new \DateTime,
            ),
            array( // 5
                'name'         => 'post_answer',
                'display_name' => 'post answer',
                'created_at'        => new \DateTime,
                'updated_at'        => new \DateTime,
            ),
        );

        \DB::table('permissions')->insert( $permissions );

        \DB::table('permission_role')->delete();

        $role_id_admin = \Role::where('name', '=', 'admin')->first()->id;
        $role_id_aluno = \Role::where('name', '=', 'aluno')->first()->id;
        $permission_base = (int)\DB::table('permissions')->first()->id - 1;

        $permissions = array(
            array(
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 1
            ),
            array(
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 2
            ),
            array(
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 3
            ),
            array(
                'role_id'       => $role_id_admin,
                'permission_id' => $permission_base + 4
            ),
            array(
                'role_id'       => $role_id_aluno,
                'permission_id' => $permission_base + 5
            ),
        );

        \DB::table('permission_role')->insert( $permissions );

        return \Redirect::route('index');

    }

}
