<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {    
    protected $table = 'cliente';    
    protected $primaryKey = 'id';    
    protected $allowedFields = ['nombre', 'direccion','dui', 'telefono']; 
}