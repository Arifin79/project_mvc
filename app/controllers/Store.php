<?php

namespace App\Controllers;

use App\Core\Controller;

class Store extends Controller
{
    public object $model;

    public function __construct()
    {
        parent::cekLogin();

        $this->model = new \App\Models\Store();
    }

    public function index()
    {
        $data['rows'] = $this->model->show();
        $this->dashboard('store/index', $data);
    }

    public function input()
    {
        $data['optpro'] = $this->model->optPro();

        $this->dashboard('store/input', $data);
    }

    public function save()
    {
        $this->model->save();
        header('location:' . URL . '/store');
    }

    public function edit($id)
    {
        $data['row'] = $this->model->edit($id);

        $data['optpro'] = $this->model->optPro();

        $this->dashboard('store/edit', $data);
    }

    public function update()
    {
        $this->model->update();
        header('location:' . URL . '/store');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location:' . URL . '/store');
    }
}