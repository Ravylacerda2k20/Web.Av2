<?php include "header.php"; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
        <section class="content">
      <div class="container-fluid">
              
        <?php

          $ac = $_POST['velocidade'];
          $ab = 7;
          $ad = 100;
          $resultado1 = $ac * $ab / $ad;
          $resultado2 = $ac -$resultado1;    
        ?>

<h2>06. Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo
para o usuário o valor original, o valor do desconto e o valor com o desconto. </h2>

            <form action="" id="" name="" method="POST" class="form-group">
              <h2>Desconto</h2>
                <input type="text" id="velocidade" name="velocidade" class="form-control">

  
              
              <br>
              <button type="submit" class="btn btn-primary">Calcular Desconto </button>
            </form>

            <h1>Preço com desconto </h1>
            
            <h3><p><?php echo $resultado2," Reais"; ?></p>
            <p><?php echo $ac," Valor sem desconto "; ?></p>
            </h3>
            </section>
        </div>
      </div>
  </div>

<?php include "footer.php"; ?>