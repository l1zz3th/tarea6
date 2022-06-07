<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {    
    protected $table = 'cliente';    
    protected $primaryKey = 'id';    
    protected $allowedFields = ['nombre', 'direccion','dui', 'telefono']; 
}

function add()
{
    $data = array(
        'nombre'   => $this->input->post('nombre'),
        'direccion'   => $this->input->post('direccion'),
        'dui'   => $this->input->post('dui'),
        'telefono'   => $this->input->post('telefono'),
    );
    return $this->db->insert('cliente', $data);
}

function delete ($id)
{
    $this->db->delete('cliente', array('id' => $id));
}

function update($id, $nombre)
{
    $this->db->where('id', $id);
    $this->db->set('nombre', $nombre);
    return $this->db->update('editoriales');
}