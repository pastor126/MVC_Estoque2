<?php
   class ProdutoController extends Controller{
     function listar() {
       $model = new Produto();
       $produtos = $model->read();
      
       $this -> view('listagemProduto',compact('produtos'));
      
     }

     function novo() {
       $produto = array();
       $produto['id'] = 0;
       $produto['descricao'] = "";
       $produto['qtde_estoque'] = "";
       $produto['fabricante'] = "";
       $produto['valor_compra'] = "";
       $produto['valor_venda'] = "";
       
       $modelFabricante = new Fabricante();
       $fabricantes = $modelFabricante -> read();

       $this->view('frmproduto', compact('produto', 'fabricantes'));
     }

     function salvar() {
       $produto = array();
       $produto['id'] = $_POST['id'];
       $produto['descricao'] = $_POST['descricao'];
       $produto['qtde_estoque'] = $_POST['qtde_estoque'];
       $produto['fabricante_id'] = $_POST['fabricante_id'];
       $produto['valor_compra'] = $_POST['valor_compra'];  
       $produto['valor_venda'] = $_POST['valor_venda'];
       $model = new Produto();
       
       if ($produto['id'] == 0) {
         $model->create($produto);
       } else {
         $model->update($produto);
       }
       $this->redirect('produto/listar');
     }

     function editar($id) {
       $model = new Produto();
       $produto = $model->getById($id);
       
       $modelFabricante = new Fabricante();
       $fabricantes = $modelFabricante->read();

       $this -> view('frmproduto', compact('produto', 'fabricantes'));
     }

     function excluir($id) {
       $model = new Produto();
       $model->delete($id);
       $this->redirect('produto/listar');
     }
   }

 ?>