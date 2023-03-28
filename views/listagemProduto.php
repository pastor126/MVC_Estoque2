<h4>Produtos</h4>
    <a class="btn btn-primary mb-2" href="<?php echo APP; ?>produto/novo">Cadastrar</a>
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tipo</th>
          <th>Data</th>
          <th>Produto</th>
          <th>Fabricante</th>
          <th>Quantidade</th>
          <th>Custo</th>
          <th>Preço</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($produtos as $produto) {         
              if($produto['ativo']=="true"){
                $data = date("d/m/Y",  strtotime($produto['data']));
                $path_editar = APP.'produto/editar';
                $path_excluir = APP.'produto/excluir';
                $path_excluirP = APP.'produto/excluirP';
                 echo "
              <tr>
                <td>{$produto['id']}</td>
                <td>{$produto['tipo_nome_tipo']}</td>
                <td>$data</td>
                <td>{$produto['descricao']}</td>
                <td>{$produto['fabricante_nome']}</td>
                <td>{$produto['qtde_estoque']}</td>
                <td>{$produto['valor_compra']}</td>
                <td>{$produto['valor_venda']}</td>
                <td><a class='btn btn-warning' href='$path_editar/{$produto['id']}'>Editar</a></td>
                <td><a class='btn btn-danger' onclick='return confirm(\"Você deseja Excluir?\")' href='$path_excluirP/{$produto['id']}'>Excluir</a></td>

              </tr>
              ";
              }
             
          }
         ?>

      </tbody>
    </table>