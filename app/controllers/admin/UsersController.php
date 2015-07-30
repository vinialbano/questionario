<?php namespace Admin;

use Illuminate\Support\Facades\Redirect;

class UsersController extends \BaseController {

    protected $model;

    public function __construct(\User $user)
    {
        parent::__construct();
        $this->model = $user;
    }

    public function create() {
        $title = "Cadastro de Usuários";
        return \View::make('users.create', compact('title'));
    }

    public function store() {
        $username = \Input::get('user');
        $password = \Input::get('password');
        $passwordConfirm = \Input::get('passwordConfirm');

        if (is_null($this->model->where('username', '=', $username)->first())) {

            if ($password === $passwordConfirm && $password != '') {
                $newUser = array(
                    'username'          => $username,
                    'email'             => $username . '@example.org',
                    'password'          => \Hash::make($password),
                    'confirmed'         => 1,
                    'confirmation_code' => md5(microtime() . \Config::get('app.key')),
                    'created_at'        => new \DateTime,
                    'updated_at'        => new \DateTime,
                );
                \DB::table('users')->insert($newUser);
                $user = \User::where('username','=', $username)->first();
                $alunoRole = \Role::where('name', '=', 'aluno')->first();
                $user->attachRole( $alunoRole );

                return Redirect::action('Admin\UsersController@create')->with('success', 'Usuário criado com sucesso!');
            }

            return Redirect::action('Admin\UsersController@create')
                           ->withInput(\Input::except('password'))
                           ->with('error', 'Desculpe, as senhas não conferem. Tente novamente');
        }
        return Redirect::action('Admin\UsersController@create')
                       ->withInput(\Input::except('password'))
                       ->with('error', 'Usuario já existe');
    }


}