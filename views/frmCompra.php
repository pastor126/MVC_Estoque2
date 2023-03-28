
<h4>Cadastro de Compras</h4>
<form action="<?php echo APP; ?>compra/salvar" method="post">


  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input readonly type="text" class="form-control" id="id" value="<?php echo $compra['id']; ?>" name="id">
  </div>

  <div class="mb-3">
    <label for="nome" class="form-label" >Cliente</label>
  <div  style="display: flex; align-items: center;">
    <select style="width: 85%;" class="form-select" name="cliente_id" id="cliente_id">
      <?php
      foreach ($clientes as $cliente) {
        if($cliente['ativo'] == 'true'){
           $selected = $cliente['id'] == $compra['cliente_id'] ? 'selected' : '';
        echo "<option $selected value='{$cliente['id']}'>{$cliente['nome']}'</option>";
        }     
      }
      ?>
    </select>
    <a class="btn btn-success ms-3"  href="<?php echo APP.'cliente/listar' ?>" >Novo Cliente</a>
    </div>  
  </div>


  <div class="mb-3">
    <label for="descricao" class="form-label" >Produto</label>
    <select class="form-select" name="produto_id" id="produto_id">
      <?php
      foreach ($produtos as $produto) {
        if($produto['ativo'] == 'true'){
           $selected = $produto['id'] == $compra['produto_id'] ? 'selected' : '';
        echo "<option $selected value='{$produto['id']}'>{$produto['descricao']}'</option>";
        }     
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

  <div class="mb-3">
    <label for="tipo" class="form-label" >Forma de Pagamento</label>
    <select class="form-select" name="forma_pag_id" id="forma_pag_id">
      <?php
      foreach ($forma_pags as $forma_pag) {
        if($forma_pag['ativo'] == 'true'){
        $selected = $forma_pag['id'] == $compra['forma_pag_id'] ? 'selected' : '';
        echo "<option $selected value='{$forma_pag['id']}'>{$forma_pag['tipo']}</option>";
      }
    }
      ?>
    </select>
  </div>

  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
  <a class="btn btn-success"  href="<?php echo APP.'compra/listar' ?>" >Voltar</a>

  <script>
  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    var quantidade = parseInt(document.querySelector('#quantidade').value);
    var qtde_estoque = parseInt('<?php echo $produto["qtde_estoque"]; ?>');
    var id = parseInt(document.querySelector('#id').value);
 
   if (quantidade > qtde_estoque) {
      alert('Quantidade de compra maior do que a quantidade em estoque.');
    }  
    else{
        this.submit();
      }

   
      
    
  });
</script>
</form>

