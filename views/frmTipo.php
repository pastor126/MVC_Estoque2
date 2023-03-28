<h4>Cadastro de Tipo</h4>
    <form action="<?php echo APP; ?>tipo/salvar" method="post">
      <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input readonly type="text" class="form-control" id="id" value="<?php echo $tipo['id']; ?>" name="id">
      </div>
      <div class="mb-3">
          <label for="nome" class="form-label">Tipo de Produto</label>
          <input type="text" class="form-control" id="nome" value="<?php echo $tipo['nome_tipo']; ?>" name="nome_tipo">
      </div>

      <button class="btn btn-primary" type="submit" name="button">Salvar</button>
      <a class="btn btn-success"  href="<?php echo APP.'tipo/listar' ?>" >Voltar</a>
    </form>