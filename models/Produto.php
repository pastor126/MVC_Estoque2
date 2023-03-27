<?php
  class Produto extends Model{
    protected $tabela="produto";
    protected $query = "SELECT produto.*, tipo.nome_tipo as tipo_nome_tipo, fabricante.nome as fabricante_nome FROM  tipo JOIN produto ON tipo.id = produto.tipo_id JOIN fabricante ON fabricante.id = produto.fabricante_id ORDER BY tipo, descricao, data ";
    protected $ordem="tipo, descricao, data";
    
  }
 ?>