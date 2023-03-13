<h1>Cadastro</h1>
    <form action="<?php echo APP; ?>fabricante/salvar" method="post">
      <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input readonly type="text" class="form-control" id="id" value="<?php echo $fabricante['id']; ?>" name="id">
      </div>
      <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" value="<?php echo $fabricante['nome']; ?>" name="nome">
      </div>

      <button class="btn btn-primary" type="submit" name="button">Salvar</button>
      <button class="btn btn-success" type="submit" name="voltar" value="voltar">Voltar</button>
    </form>