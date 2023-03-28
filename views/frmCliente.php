<h4>Cadastrar Cliente</h4>
    <form action="<?php echo APP; ?>cliente/salvar" method="post">
      <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input readonly type="text" class="form-control" id="id" value="<?php echo $cliente['id']; ?>" name="id">
      </div>
      <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" value="<?php echo $cliente['nome']; ?>" name="nome">
      </div>

      <button class="btn btn-primary" type="submit" name="button">Salvar</button>
      <a class="btn btn-success"  href="<?php echo APP.'cliente/listar' ?>" >Voltar</a>
    </form>