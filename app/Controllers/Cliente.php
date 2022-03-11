<?php

namespace App\Controllers;

class Cliente extends BaseController
{
    public function index()
    {
        $model = new \App\Models\UserModel();

        $data = [
            'users' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        echo view('empresa/index', $data);
    }
}

function add()
{
    $data['main_title'] = 'Cliente';

    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('cliente/add');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->editoriales_model->add();
        $this->load->view('templates/header', $data);
        $this->load->view('cliente/success');
        $this->load->view('templates/footer');
    }
}

function delete()
{
    $id = $this->input->get('id');
    $resultado = $this->UserModel->get_cliente_by_id($id);
    if(count($resultado) > 0)
    {
        $this->UserModel->delete($id);
        $this->index();
    }
}

function edit()
{
    $this->load->helper('form');
    $data['main_title'] = 'Cliente';
    // Obtenemos el id del campo a editar
    $id = $this->input->get('id');
    $resultado = $this->editoriales_model->get_cliente_by_id($id);
    $nombre = $this->input->post('nombre');
    $data['nombre'] = $nombre;
    if($nombre == NULL)
    {
        if(count($resultado) > 0)
        {
            $data['nombre'] = $resultado[0];
            $this->load->view('templates/header', $data);
            $this->load->view('cliente/edit', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $data['mensaje'] = 'No ha ingresado dirección';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/error', $data);
            $this->load->view('templates/footer');
        }
    }
    else
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('cliente/edit');
            $this->load->view('templates/footer');

        }
        else
        {
            $id = $this->input->post('id');
            $this->editoriales_model->update($id, $nombre);
            $this->index();
        }
    }
}