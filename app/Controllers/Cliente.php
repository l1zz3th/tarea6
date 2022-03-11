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
