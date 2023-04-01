<h4>Formas de pagamento</h4>
    <a class="btn btn-primary mb-2 btn-sm" href="<?php echo APP; ?>forma_pag/novo">Cadastrar forma de pagamento</a>
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
          foreach ($forma_pags as $forma_pag) {
            if($forma_pag['ativo'] == 'true'){
              $path_editar = APP.'forma_pag/editar';
              $path_excluirFP = APP.'forma_pag/excluirFP';
              
              echo "
              <tr>
                <td>{$forma_pag['id']}</td>
                <td>{$forma_pag['tipo']}</td>
                <td><a class='btn btn-warning btn-sm' href='$path_editar/{$forma_pag['id']}'>Editar</a></td>
                <td><a class='btn btn-danger btn-sm' onclick='return confirm(\"Você deseja Excluir?\")' href='$path_excluirFP/{$forma_pag['id']}'>Excluir</a></td>
              </tr>
              ";
          }
        }
         ?>
      </tbody>
    </table>
    <a class="btn btn-success btn-sm"  href="<?php echo APP.'produto/listar' ?>" >Estoque</a>