<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Zizaco\Entrust\HasRole;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements ConfideUserInterface
{
    use SoftDeletingTrait;
    use HasRole;
    use ConfideUser;

    protected $dates = ['deleted_at'];
}
