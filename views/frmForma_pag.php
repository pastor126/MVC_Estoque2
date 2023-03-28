<h4>Cadastrar</h4>
    <form action="<?php echo APP; ?>forma_pag/salvar" method="post">
      <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input readonly type="text" class="form-control" id="id" value="<?php echo $forma_pag['id']; ?>" name="id">
      </div>
      <div class="mb-3">
          <label for="tipo" class="form-label">Forma de Pagamento</label>
          <input type="text" class="form-control" id="tipo" value="<?php echo $forma_pag['tipo']; ?>" name="tipo">
      </div>

      <button class="btn btn-primary" type="submit" name="button">Salvar</button>
      <a class="btn btn-success"  href="<?php echo APP.'forma_pag/listar' ?>" >Voltar</a>
    </form>