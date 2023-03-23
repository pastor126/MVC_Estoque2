<?php
   class CompraController extends Controller{
     function listar() {
       $model = new Compra();
       $compras = $model->read();
      
       $this -> view('listagemCompra',compact('compras'));
      
     }

     

     function novo() {
       $compra = array();
       $compra['id'] = 0;
       $compra['produto_descricao'] = "";
       $compra['quantidade'] = "";
       $compra['quant1'] = "";

       $modelProduto = new Produto();
       $produtos = $modelProduto -> read();

       $modelTipo = new Tipo();
       $tipos = $modelTipo -> read();

       $modelFabricante = new Fabricante();
       $fabricantes = $modelFabricante -> read();

       $this->view('frmCompra', compact('compra', 'produtos', 'fabricantes', 'tipos'));
     }

     function salvar() {

      $model = new Compra();
       $data = date('d-m-y');
       $compra = array();
       $compra['id'] = $_POST['id'];
       $compra['quantidade'] = $_POST['quantidade'];
       $compra['data'] = $data;
       $compra['produto_id'] = $_POST['produto_id'];

      $modelProduto = new Produto();
      $produto = $modelProduto -> getById($compra['produto_id']);
      $produto['qtde_estoque'] = $produto['qtde_estoque'] - $compra['quantidade'];
      $modelProduto -> update($produto); 
           
      
      
       if ($compra['id'] == 0) {
         $model->create($compra);
       } else {
         $model->update($compra);
       }
       $this->redirect('compra/listar');
     }

     function editar($id) {
       $model = new Compra();
       $compra = $model->getById($id);
       $quant2 = $compra['quantidade'] - $compra['quant1'];
       
       $modelProdutos = new Produto();
       $produtos = $modelProdutos -> read();
       $modelProduto = new Produto();
       $produto = $modelProduto -> getById($compra['produto_id']);
       $produto['qtde_estoque'] = $produto['qtde_estoque'] + $quant2;
       $modelProduto -> update($produto);

       $this->view('frmCompra', compact('compra','produtos'));
     }

     function excluir($id) {
      $modelCompra = new Compra();
      $compra = $modelCompra -> getById($id);
     
       $modelProduto = new Produto();
       $produto = $modelProduto -> getById($compra['produto_id']);
       $produto['qtde_estoque'] = $produto['qtde_estoque'] + $compra['quantidade'];

       $modelProduto -> update($produto); 
       $modelCompra->delete($id);
       $this->redirect('compra/listar');
     }
   }

 ?>
