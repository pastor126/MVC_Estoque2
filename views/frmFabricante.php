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

      <div class="mb-3">
          <label for="cnpj" class="form-label">CNPJ</label>
          <input type="text" class="form-control" id="cnpj" value="<?php echo $fabricante['cnpj']; ?>" name="cnpj">
      </div>

      <button class="btn btn-primary" type="submit" name="button">Salvar</button>
      <a class="btn btn-success"  href="<?php echo APP.'fabricante/listar' ?>" >Voltar</a>
    </form>
   