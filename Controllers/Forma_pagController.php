<?php
  class Forma_pagController extends Controller {
    function listar() {
      $model = new Forma_pag();
      $forma_pags = $model->read();
      $this -> view("listagemForma_pag", compact('forma_pags'));
    }

    function novo() {
      $forma_pag = array();
      $forma_pag['id'] = 0;
      $forma_pag['tipo'] = "";
    
      $this->view("frmForma_pag", compact('forma_pag'));
    }

    function salvar() {
      $forma_pag = array();
      $forma_pag['id'] = $_POST['id'];
      $forma_pag['tipo'] = $_POST['tipo'];
   
      $model = new Forma_pag();
      if ($forma_pag['id'] == 0) {
        $model->create($forma_pag);
      } else {
        $model->update($forma_pag);
      }
      $this -> redirect("forma_pag/listar");
    }

    function editar($id) {
      $model = new Forma_pag();
      $forma_pag = $model->getById($id);
      $this -> view("frmForma_pag", compact('forma_pag'));
    }

    function excluirFP($id) {
      $model = new Forma_pag();
      $forma_pag = $model -> getById($id);
      $forma_pag['ativo'] = 'false';
      $model->update($forma_pag);
      $this -> redirect("forma_pag/listar");
    }
  }
 ?>