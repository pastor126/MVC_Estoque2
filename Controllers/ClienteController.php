<?php
  class ClienteController extends Controller {
    function listar() {
      $model = new Cliente();
      $clientes = $model->read();
      $this -> view("listagemCliente", compact('clientes'));
    }

    function novo() {
      $cliente = array();
      $cliente['id'] = 0;
      $cliente['nome'] = "";
    
      $this->view("frmCliente", compact('cliente'));
    }

    function salvar() {
      $cliente = array();
      $cliente['id'] = $_POST['id'];
      $cliente['nome'] = $_POST['nome'];
   
      $model = new Cliente();
      if ($cliente['id'] == 0) {
        $model->create($cliente);
      } else {
        $model->update($cliente);
      }
      $this -> redirect("cliente/listar");
    }

    function editar($id) {
      $model = new Cliente();
      $cliente = $model->getById($id);
      $this -> view("frmCliente", compact('cliente'));
    }

    function excluirC($id) {
      $model = new Cliente();
      $cliente = $model -> getById($id);
      $cliente['ativo'] = 'false';
      $model->update($cliente);
      $this -> redirect("cliente/listar");
    }
  }
 ?>