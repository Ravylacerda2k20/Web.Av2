<?php include "header.php"; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

        <?php

          $ms = $_POST['velocidade'];
          $km = 3.6;

          $resultado = $ms * $km;
                
        ?>

<h2>04. Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e
exiba para o usuário a velocidade em km/h. </h2>

            <form action="" id="" name="" method="POST" class="form-group">
              <h2>Velocidade</h2>
                <input type="text" id="velocidade" name="velocidade" class="form-control">

  
              
              <br>
              <button type="submit" class="btn btn-primary">Calcular</button>
            </form>

            <h1>Resultado</h1>
            <p><?php echo $resultado; ?></p>

        </div>
      </div>
  </div>

<?php include "footer.php"; ?>




    