<?php
  class FabricanteController extends Controller {
    function listar() {
      $model = new Fabricante();
      $fabricantes = $model->read();
      $this -> view("listagemFabricante", compact('fabricantes'));
    }

    function novo() {
      $fabricante = array();
      $fabricante['id'] = 0;
      $fabricante['nome'] = "";
      $fabricante['cnpj'] = "";
      $this->view("frmFabricante", compact('fabricante'));
    }

    function salvar() {
      $fabricante = array();
      $fabricante['id'] = $_POST['id'];
      $fabricante['nome'] = $_POST['nome'];
      $fabricante['cnpj'] = $_POST['cnpj'];
      $model = new Fabricante();
      if ($fabricante['id'] == 0) {
        $model->create($fabricante);
      } else {
        $model->update($fabricante);
      }
      $this -> redirect("fabricante/listar");
    }

    function editar($id) {
      $model = new Fabricante();
      $fabricante = $model->getById($id);
      $this -> view("frmFabricante", compact('fabricante'));
    }

    function excluirF($id) {
      $model = new Fabricante();
      $fabricante = $model -> getById($id);
      $fabricante['ativo'] = 'false';

      $model->update($fabricante);
      $this->redirect('fabricante/listar');
    }
  }
 ?>