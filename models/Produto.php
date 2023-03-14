<?php
  class Produto extends Model{
    protected $tabela="produto";
    protected $query = "SELECT produto.*, fabricante.nome as fabricante_nome FROM produto JOIN fabricante ON fabricante.id = produto.fabricante_id ORDER BY data, descricao ";
    protected $ordem="data, descricao";
    
  }
 ?>