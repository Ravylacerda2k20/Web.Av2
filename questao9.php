<?php include "header.php"; ?>
<div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
            

        <?php

          $ac = $_POST['velocidade'];
          $ab = 16;
          $ad = 100;
          $plani = 10;
          $resultado1 = $ac * $ab / $ad;
          $resultado2 = $ac + $resultado1;   
          $resu3 = $resultado2 / $plani; 
        ?>
  <section class="content">
      <div class="container-fluid">
               
      <section class="content">
   <div class="container-fluid">
     <h2>09. Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, dívida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra. </h2>
  </div>

            <form action="" id="" name="" method="POST" class="form-group">
             <h2>Desconto</h2>
                <input type="text" id="velocidade" name="velocidade" class="form-control">
                

  
              
              <br>
              <button type="submit" class="btn btn-primary">Calcular parcelas </button>
            </form>

            <h1>Preço total </h1>
            
            <h3><p><?php echo $resultado2," Reais"; ?></p>
          
            </h3>
            
            <h1>Preço da parcela</h1>
            
            <h3><p><?php echo "10 pacelas de ", $resu3," Reais"; ?></p>
            
            </h3>
            </section>
        </div>
      </div>
  </div>

<?php include "footer.php"; ?>