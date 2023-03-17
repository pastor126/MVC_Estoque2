<h1>Tipo de Produto</h1>
    <a class="btn btn-primary mb-2" href="<?php echo APP; ?>tipo/novo">Cadastrar</a>
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
              $path_editar = APP.'tipo/editar';
              $path_excluir = APP.'tipo/excluir';
              
              echo "
              <tr>
                <td>{$tipo['id']}</td>
                <td>{$tipo['nome_tipo']}</td>
                <td><a class='btn btn-warning' href='$path_editar/{$tipo['id']}'>Editar</a></td>
                <td><a class='btn btn-danger' onclick='return confirm(\"Você deseja Excluir?\")' href='$path_excluir/{$tipo['id']}'>Excluir</a></td>
              </tr>
              ";
          }
         ?>
      </tbody>
    </table>
    <a class="btn btn-success"  href="<?php echo APP.'produto/listar' ?>" >Home</a>