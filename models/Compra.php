<?php
  class Compra extends Model{
    protected $tabela="compra";
    protected $query = "SELECT compra.*, tipo.nome_tipo AS tipo_nome_tipo, fabricante.nome AS fabricante_nome,forma_pag.tipo AS forma_pag_tipo, produto.descricao AS produto_descricao, produto.qtde_estoque AS produto_qtde_estoque, produto.valor_venda AS produto_valor_venda, cliente.nome AS cliente_nome FROM compra JOIN produto ON produto.id = compra.produto_id JOIN tipo ON tipo.id = produto.tipo_id JOIN forma_pag ON forma_pag.id = compra.forma_pag_id
    JOIN fabricante ON fabricante.id = produto.fabricante_id JOIN cliente ON cliente.id = compra.cliente_id ORDER BY data, descricao";
    protected $ordem="data, descricao";
    
  }
 ?>