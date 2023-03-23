<h1>Compras</h1>
    <a class="btn btn-primary mb-2" href="<?php echo APP; ?>compra/novo">Cadastrar</a>
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Data</th>
          <th>Tipo</th>
          <th>Produto</th>
          <th>Fabricante</th>
          <th>Quantidade</th>
          <th>Preço</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php
        

          foreach ($compras as $compra) {
              $data = date("d/m/Y",  strtotime($compra['data']));
              $path_editar = APP.'compra/editar';
              $path_excluir = APP.'compra/excluir';
              echo "
              <tr>
                <td>{$compra['id']}</td>
                <td>$data</td>
                <td>{$compra['tipo_nome_tipo']}</td> 
                <td>{$compra['produto_descricao']}</td>
                <td>{$compra['fabricante_nome']}</td>
                <td>{$compra['quantidade']}</td>
                <td>{$compra['produto_valor_venda']}</td>
                <td><a class='btn btn-warning' href='$path_editar/{$compra['id']}'>Editar</a></td>
                <td><a class='btn btn-danger' onclick='return confirm(\"Você deseja Excluir?\")' href='$path_excluir/{$compra['id']}'>Excluir</a></td>

              </tr>
              ";
          }
         ?>
      </tbody>
    </table>
    <a class="btn btn-success"  href="<?php echo APP.'produto/listar' ?>" >Home</a>