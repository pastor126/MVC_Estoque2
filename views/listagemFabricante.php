<h4>Fabricantes</h4>
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
            if($fabricante['ativo']=="true"){
              $path_editar = APP.'fabricante/editar';
              $path_excluir = APP.'fabricante/excluir';
              $path_excluirF = APP.'fabricante/excluirF';
              
              echo "
              <tr>
                <td>{$fabricante['id']}</td>
                <td>{$fabricante['nome']}</td>
                <td>{$fabricante['cnpj']}</td>
                <td><a class='btn btn-warning' href='$path_editar/{$fabricante['id']}'>Editar</a></td>
                <td><a class='btn btn-danger' onclick='return confirm(\"Você deseja Excluir?\")' href='$path_excluirF/{$fabricante['id']}'>Excluir</a></td>
              </tr>
              ";
          }
        }
         ?>
      </tbody>
    </table>
    <a class="btn btn-success"  href="<?php echo APP.'produto/listar' ?>" >Home</a>