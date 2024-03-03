<?php

namespace App\Models;

use Spatie\Permission\Models\Role;

class Rol extends Role {

    const ROL_CLIENTE = 'cliente';
    const ROL_ADMIN = 'admin';

    const ROLES = [
        self::ROL_CLIENTE,
        self::ROL_ADMIN
    ];


}
