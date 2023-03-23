<?php
  class Compra extends Model{
    protected $tabela="compra";
    protected $query = "SELECT compra.*, tipo.nome_tipo as tipo_nome_tipo, fabricante.nome as fabricante_nome, produto.descricao as produto_descricao, produto.qtde_estoque as produto_qtde_estoque, produto.valor_venda as produto_valor_venda FROM compra Join produto on produto.id = compra.produto_id JOIN tipo ON tipo.id = produto.tipo_id 
    JOIN fabricante ON fabricante.id = produto.fabricante_id ORDER BY data, descricao";
    protected $ordem="data, descricao";
    
  }
 ?>