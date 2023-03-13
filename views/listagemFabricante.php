<h1>Fabricantes</h1>
    <a class="btn btn-primary mb-2" href="<?php echo APP; ?>fabricante/novo">Cadastrar</a>
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>CNPJ</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($fabricantes as $fabricante) {
              $path_editar = APP.'fabricante/editar';
              $path_excluir = APP.'fabricante/excluir';
              
              echo "
              <tr>
                <td>{$fabricante['id']}</td>
                <td>{$fabricante['fabricante']}</td>
                <td><a class='btn btn-warning' href='$path_editar/{$fabricante['id']}'>Editar</a></td>
                <td><a class='btn btn-danger' onclick='return confirm(\"Você deseja Excluir?\")' href='$path_excluir/{$fabricante['id']}'>Excluir</a></td>
              </tr>
              ";
          }
         ?>
      </tbody>
    </table>
    <a class="btn btn-success"  href="<?php echo APP.'produto/listar' ?>" >Home</a>