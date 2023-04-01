<h4>Tipo de Produto</h4>
    <a class="btn btn-primary mb-2 btn-sm" href="<?php echo APP; ?>tipo/novo">Cadastrar</a>
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tipo</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($tipos as $tipo) {
            if($tipo['ativo']=="true"){
              $path_editar = APP.'tipo/editar';
              $path_excluirT = APP.'tipo/excluirT';
              
              echo "
              <tr>
                <td>{$tipo['id']}</td>
                <td>{$tipo['nome_tipo']}</td>
                <td><a class='btn btn-warning btn-sm' href='$path_editar/{$tipo['id']}'>Editar</a></td>
                <td><a class='btn btn-danger btn-sm' onclick='return confirm(\"Você deseja Excluir?\")' href='$path_excluirT/{$tipo['id']}'>Excluir</a></td>
              </tr>
              ";
          }
        }
         ?>
      </tbody>
    </table>
    <a class="btn btn-success btn-sm"  href="<?php echo APP.'produto/listar' ?>" >Estoque</a>