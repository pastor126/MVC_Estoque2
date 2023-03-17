<h1>Cadastro</h1>
<form action="<?php echo APP; ?>produto/salvar" method="post">
  <div class="mb-3">
      <label for="id" class="form-label">ID</label>
      <input readonly type="text" class="form-control" id="id" value="<?php echo $produto['id']; ?>" name="id">
  </div>
  <div class="mb-3">
      <label for="descricao" class="form-label">Produto</label>
      <input type="text" class="form-control" id="descricao" value="<?php echo $produto['descricao']; ?>" name="descricao">
  </div>

  <div class="mb-3">
      <label for="qtde_estoque" class="form-label">Estoque</label>
      <input type="text" class="form-control" id="qtde_estoque" value="<?php echo $produto['qtde_estoque']; ?>" name="qtde_estoque">
  </div>

  <div class="mb-3">
      <label for="valor_compra" class="form-label">Custo</label>
      <input type="text" class="form-control" id="valor_compra" value="<?php echo $produto['valor_compra']; ?>" name="valor_compra">
  </div>

  <div class="mb-3">
      <label for="valor_venda" class="form-label">Preço</label>
      <input type="text" class="form-control" id="valor_venda" value="<?php echo $produto['valor_venda']; ?>" name="valor_venda">
  </div>

  <div class="mb-3">
      <label for="fabricante" class="form-label">Fabricante</label>
      <select class="form-select" name="fabricante_id" id="fabricante_id">
        <?php
          foreach ($fabricantes as $fabricante) {
            $selected =
              $fabricante['id'] == $produto['fabricante_id']?'selected':'';

            echo "<option $selected value='{$fabricante['id']}'>{$fabricante['nome']}</option>";
          }
         ?>
      </select>
  </div>


  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
  <a class="btn btn-success"  href="<?php echo APP.'produto/listar' ?>" >Voltar</a>
</form>