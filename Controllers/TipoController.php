<?php
  class TipoController extends Controller {
    function listar() {
      $model = new Tipo();
      $tipos = $model->read();
      $this -> view("listagemTipo", compact('tipos'));
    }

    function novo() {
      $tipo = array();
      $tipo['id'] = 0;
      $tipo['nome_tipo'] = "";
      $this->view("frmtipo", compact('tipo'));
    }

    function salvar() {
      $tipo = array();
      $tipo['id'] = $_POST['id'];
      $tipo['nome_tipo'] = $_POST['nome_tipo'];
      $model = new Tipo();
      if ($tipo['id'] == 0) {
        $model->create($tipo);
      } else {
        $model->update($tipo);
      }
      $this -> redirect("tipo/listar");
    }

    function editar($id) {
      $model = new Tipo();
      $tipo = $model->getById($id);
      $this -> view("frmTipo", compact('tipo'));
    }

    function excluir($id) {
      $model = new Tipo();
      $model->delete($id);
      $this -> redirect("tipo/listar");
    }
  }
 ?>