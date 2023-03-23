
<h1>Cadastro de Compras</h1>
<form action="<?php echo APP; ?>compra/salvar" method="post">


  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input readonly type="text" class="form-control" id="id" value="<?php echo $compra['id']; ?>" name="id">
  </div>

  <div class="mb-3">
    <label for="descricao" class="form-label" >Produto</label>
    <select class="form-select" name="produto_id" id="produto_id">
      <?php
      foreach ($produtos as $produto) {
        $selected = $produto['id'] == $compra['produto_id'] ? 'selected' : '';
        echo "<option $selected value='{$produto['id']}'>{$produto['descricao']}</option>";
      }
      ?>
    </select>
  </div>

  <div class="mb-3">
    <?php
    if ($compra['id'] == 0) {
      $compra['quantidade'] = 0;
    }
    else{
      $compra['quant1'] = $compra['quantidade'];
    }
    ?>
    <label for="quantidade" class="form-label">Quantidade</label>
    <input type="text" class="form-control" id="quantidade" value="<?php echo $compra['quantidade']; ?>" name="quantidade">
    <input readonly type="text" class="form-control" id="quant1" value="<?php $compra['quant1']; ?>" name="quant1" style="display: none" >
  </div>



  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
  <a class="btn btn-success"  href="<?php echo APP.'compra/listar' ?>" >Voltar</a>

  <script>
  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    var quantidade = parseInt(document.querySelector('#quantidade').value);
    var qtde_estoque = parseInt('<?php echo $produto["qtde_estoque"]; ?>');
    var id = parseInt(document.querySelector('#id').value);
 if(id == 0){
   if (quantidade > qtde_estoque) {
      alert('Quantidade de compra maior do que a quantidade em estoque.');
    }  
    else{
        this.submit();
      }
 
    }
    else{
      this.submit();
    }
   
      
    
  });
</script>
</form>

