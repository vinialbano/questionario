<?php

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();

        $permissions = array(
            array( // 1
                'name'         => 'manage_questions',
                'display_name' => 'manage questions',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime,
            ),
            array( // 2
                'name'         => 'manage_alternatives',
                'display_name' => 'manage alternatives',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime,
            ),
            array( // 3
                'name'         => 'manage_users',
                'display_name' => 'manage users',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime,
            ),
            array( // 4
                'name'         => 'manage_roles',
                'display_name' => 'manage roles',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime,
            ),
            array( // 5
                'name'         => 'post_answer',
                'display_name' => 'post answer',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime,
            ),
        );

        DB::table('permissions')->insert( $permissions );

        DB::table('permission_role')->delete();

        $role_id_admin = Role::where('name', '=', 'admin')->first()->id;
        $role_id_teste = Role::where('name', '=', 'teste')->first()->id;
        $role_id_aluno = Role::where('name', '=', 'aluno')->first()->id;
        $permission_base = (int)DB::table('permissions')->first()->id - 1;

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
                'role_id'       => $role_id_teste,
                'permission_id' => $permission_base + 5
            ),
            array(
                'role_id'       => $role_id_aluno,
                'permission_id' => $permission_base + 5
            ),
        );

        DB::table('permission_role')->insert( $permissions );
    }

}
