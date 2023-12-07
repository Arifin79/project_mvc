<?php

namespace App\Controllers;

use App\Core\Controller;

class Product extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Producty();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('product/index', $data);
     }

     public function input()
     {
          $this->dashboard('product/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/product');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('product/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/product');
     }
}
